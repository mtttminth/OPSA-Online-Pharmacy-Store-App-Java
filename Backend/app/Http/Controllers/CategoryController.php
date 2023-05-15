<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.detail',compact(['categories']));
    }

    public function create()
    {
        $category = new Category();
        return view('category.create',compact(['category']));
    }


     public function store(Request $request)
    {
         $data=$request->validate([
        'name'=>'required',
        'description'=>'required'
        ]);
         $category= \App\Category::create($data);
        return redirect('category')->with('status','Category Successfully Created');
    }

    public function show(Category $category)
    {
        $category=Category::find($category);
        return view('category.detail')->with('category',$category); 
    }  

    public function edit(Category $category)
    {
        return view('category.edit',compact(['category']));
    }


    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        if($category->wasChanged()){
            return redirect('category')->with('success','Category Successfully Updated');
        }else{
            return redirect('category')->with('warning','Category Not Updated');
        }
        
    }


     public function destroy(Category $category)
    {
        if($category->delete()){
            return redirect('category')->with('success','Post Successfully Deleted');
        }else{
            return redirect('category')->with('Sorry','Something Want Wrong!');
        }
        return back();
    }
   
    
}