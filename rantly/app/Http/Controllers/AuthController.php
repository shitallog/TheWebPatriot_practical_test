<?php

namespace App\Http\Controllers;

use Session;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AuthController;

class AuthController extends Controller
{
    public function showRegister(){
        return view ('page-register');
    }
    public function showLogin(){
        return view('page-login');
    }
    public function Register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'username' => 'required|string|max:255|unique:users',
            // 'phone' => 'nullable|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            're-password' => 'required|same:password',
       ]);
       
       // Create a new Customer record in the database
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password); // Hash the password
       $user->save();
       
        
       if(!$user){
        return redirect(route('RegistrationPage'))->with("error", "Registration failed try again");
       }
       return redirect(route('LoginPage'))->with("success", "Registration Success, Login to Access the app");
    }

    function Login(Request $request){
        $request->validate([
           'email' => 'required' ,
           'password' => 'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('AdminProfile'));
        }
        return redirect(route('RegistrationPage'))->with("error","Login Details are not valid");
    }

    
    public function dashboard(){
        return view('dashboard.page-dashboard');
    }
    public function form(){
        return view('dashboard.page-dashboard-profile');
    }
    public function ShowProfile(){
    return view('dashboard.page-dashboard-profile');
    }
    // CustomersShow
    public function ShowCustomers(){
        return view ('CustomerUsers');
    }
    


    
}

