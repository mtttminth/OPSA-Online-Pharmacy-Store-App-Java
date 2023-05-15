<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Category;
use App\OrderItems;
use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        $categories= Category::all();   
      
        return view('products.indexproduct',compact('products','categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        return view('products.createproduct',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        
        $data=$request->validate([
        
        'name'=>'required',
        'image'=>'required|image|mimes:jpg,png,jpeg,gif|max:8192',
        'image_name'=>'required',
        'price'=>'required',
        'category_id'=>'required',
        'quantity'=>'required',
        'description'=>'required'
       
        ]);
        
        $image=$request->image;
        if ($image) {
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $data['image']=$imageName;
        }

        $product= \App\Product::create($data);

        return redirect('/products')->with('success','Post Created');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product=Product::find($id);
        return view('products.showproduct')->with('product',$product); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $product=Product::find($id);
        $categories= Category::all();
        return view('products.editproduct',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $product=Product::find($id);
        $product->name=$request->get('name');

        if ($request->hasfile('image')) {
        $image=$request->image;
        $imageName=$image->getClientOriginalName();
        $image->move('images',$imageName);
        $product['image']=$request->file('image')->getClientOriginalName();      
        }
        $product->image_name=$request->get('image_name');
        $product->price=$request->get('price');
        $product->category_id=$request->get('category_id');
        $product->quantity=$request->get('quantity');
        $product->description=$request->get('description');
        $product->save();
         
        return redirect('products')->with('success','Product Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $product=Product::find($id);
        $product->delete();  
    
        return redirect('products')->with('success','Post Successfully Deleted');
    }
}
