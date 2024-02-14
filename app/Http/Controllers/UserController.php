<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class UserController extends Controller
{
    public function ShowProfile(){
        return view('dashboard.page-dashboard-profile');
    }

}
