<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderItems;
use App\Product;
use App\User;
use DB;

class OrderitemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $oitems = DB::table('orderitems')
            ->join('products', 'orderitems.product_id', '=', 'products.id')
            ->join('users', 'orderitems.user_email', '=', 'users.email')->select('name as user_name')
            ->select('orderitems.id as oid','orderitems.order_quantity','orderitems.user_email','orderitems.price','orderitems.product_id','orderitems.delivery_fee','orderitems.tax','products.*', 'users.name as user_name','users.email')
            ->get();
  
            return view('orderitems.indexorder')->with('oitems',$oitems);

   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('orderitems.ordercomfirm');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       
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
