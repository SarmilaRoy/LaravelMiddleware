<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function contacts(){
      
        return view('contact');
    }

    public function abouts(){
      
        return view('about');
    }
    public function users(){
      
        return view('user');
    }
}
