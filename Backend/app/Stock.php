<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //
    protected $table='stock';
      protected $fillable=['id','name','quantity','order_quantity','total_quantity'];
}