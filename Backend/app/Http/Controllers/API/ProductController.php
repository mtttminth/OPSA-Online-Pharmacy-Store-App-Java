<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\OrderItems;
use App\User;

class ProductController extends Controller
{
    public function getToken(Request $request){
         $request->request->add([
             'grant_type' => 'password',
             'client_id'=>2,
             'client_secret'=> '74ELFMbOyVbXIdji4jksmKEyd3KZ2qr4bBnBZ3Bt',
             'username'=> $request->username,
             'password'=>$request->password,
         ]);
         $requestToken = Request::create(env('APP_URL').'/oauth/token','post');
         $response= Route::dispatch($requestToken);
         $responseData=json_decode($response->getContent());
         if(isset($responseData->error)){
             return response()->json([
                'error'=>true,
                "access_token" => ""
            ]);
         }
         return response()->json([
            'error'=>false,
            "access_token"=>$responseData->access_token,
            "expires_in"=> $responseData->expires_in
        ]);
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function getProduct(Request $request)
    {  

        $products=Product::all();
        
        if ($products) {
            return response()->json([
                'success'=>true,
                'message'=>'Successfully Reached Product!',          
                //'token'=>$token,
                /* 'product'=>json_encode($products)*/ 
                 'product'=>$products 
            ]);            
        } else {
            return response()->json([
                'success'=>false,
                 'message'=>'Failed,Please try again',
                'product'=>null            
          ]);
        }
    }
  
    public function getOrderItems(Request $request)
    {   
        $this->validate($request,[
            'product_id'=>'required',
            'order_quantity'=>'required',
            'price' =>'required',
            'total_amount'=>'required',
            'delivery_fee' => 'required',
            'tax' =>'required',
            'user_email'=>'required'
        ]);

          $oitems=OrderItems::create([
            'product_id'=>$request->product_id,
            'order_quantity'=> $request->order_quantity,
            'price' => $request->price,  
            'total_amount'=>$request->total_amount,          
            'delivery_fee' => $request->delivery_fee,
            'tax' => $request->tax,
            'user_email'=>$request->user_email          
          ]);

        $product = Product::find($request->product_id);
        $product_quantity = $product->quantity;


        $ordered_qty=$oitems->order_quantity;
        $product = $product_quantity - $ordered_qty;

         if ($product_quantity>$ordered_qty) {
           
            return response()->json([
                'success'=>true,
                'message'=>"Ordered Successfully inserted!".$ordered_qty,          
                'orderitems'=>$oitems  
            ]);
        } else {
            return response()->json([
                'success'=>false,
                'message'=>'Ordered failed!!!'.$product."is availiable now",                 
          ]);
        }

       /* if ($oitems) {
           
            return response()->json([
                'success'=>true,
                'message'=>'Ordered Successfully inserted!',          
                'orderitems'=>$oitems  
            ]);
        } else {
            return response()->json([
                'success'=>false,
                'message'=>'Ordered failed!!!',                 
          ]);
        }*/
    }
  

   /* public function reduceQuantity(Request $request)
    {
        $product = Product::find($request->product_id);
        $order_qty=OrderItems::find($request->product_id);

        $product_quantity = $product->quantity;
        $ordered_quantity=$order_qty->ordered_quantity;

        if($product_quantity>$ordered_quantity){
            $product = $product_quantity - $ordered_quantity;

            return response()->json([
                "data"=>$product,
                "success"=>true,
                "message"=>"Successfully ordered Reduced.".$ordered_quantity,                     
                ]);
        }else{
            return response()->json([
                "data"=>null,
                "success"=>false,
                "message"=>"Stock limit is full,only ".$product_quantity." is availiable"              
                ]);
            }
    }*/
}
