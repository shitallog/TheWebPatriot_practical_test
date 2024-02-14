<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class AdminController extends Controller
{

   public function  showadminSignUp(){
        return view('AdminSignUpForm');
    }
    public function  showadminlogin(){
        return view('AdminLoginForm');
    }

    
}
