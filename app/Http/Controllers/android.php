<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Question;
use App\User;
use App\androidtest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Redirect;

class android extends Controller
{
    public function store(Request $request){

               $and =  new androidtest();
               $and -> name = $request->input('name');
               $and -> email = $request->input('email');
               $and -> password = $request->input('password');
        
               $and->save();
        
         
         
    }
    
    
    
    
}
