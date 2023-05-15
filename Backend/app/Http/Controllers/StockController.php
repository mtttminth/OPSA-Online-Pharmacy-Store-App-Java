<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\OrderItems;
use App\Stock;
use DB;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $stock=DB::table('products')
            ->join('orderitems', 'products.id', '=', 'orderitems.product_id')
            ->select('products.name','products.quantity','products.created_at','orderitems.order_quantity')
            ->get();
        return view('stock.indexstock')->with('stock',$stock);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('stock.indexstock');
             
    }
    
   public function store(Request $request)
    {
        //
         $data=$request->validate([
        'name'=>'required',
        'quantity'=>'required',
        'order_quantity'=>'required',
        'total_quantity'=>'required'
       
        ]);
         $stock= \App\Stock::create($data);

        return redirect('/indexstock')->with('success','Post Created');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}