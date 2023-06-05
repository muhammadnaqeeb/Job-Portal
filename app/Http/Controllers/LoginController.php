<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Loginn(){
        $mainHeadingText = 'Welcome Back'; // data to send
        return view('Login')->with('mainHeadingText',$mainHeadingText);
    }
}
