<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class OrderItems extends Model
{
    //
    protected $table ='orderitems';
    protected $fillable=['id','product_id','order_quantity','price','total_amount','delivery_fee','tax','user_email'];
 
}
