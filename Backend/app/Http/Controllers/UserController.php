<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
    public function index()
    {
      
    $users = DB::table('users')
            
            ->select('users.id','users.name','users.email','users.password','users.phone_number', 'users.address')
            ->get();
  
            return view('users.index')->with('users',$users);
    }



     public function show($id)
    {
        
        $users=User::find($id);
        return view('users.show')->with('users',$users); 
    }


 
}
