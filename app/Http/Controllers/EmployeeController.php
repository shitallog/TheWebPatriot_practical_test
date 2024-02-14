<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\EmployeeController;

class EmployeeController extends Controller
{
    public function showRegistrationForm()
    {
        return view('employees.register');
    }

    public function register(Request $request)
    {
        //validate
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'date_of_joining' => 'required|date',
            'gender' => 'required|string',
            'designation' => 'required|string',
            'manager' => 'required|string',
            'employee_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'required|string|min:6',
            'password_confirmation' => 'required|string|min:6',
            'email' => 'required|email|unique:employees',
            'password_confirmation' => 'required|same:password'
        ]);


        if ($request->hasFile('employee_picture')) {
            $image = $request->file('employee_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['employee_picture'] = $imageName;
        }

        Employee::create($validatedData);

        // Log in the newly registered user
       // Auth::login(Employee::where('email', $request->email)->first());

        //return redirect()->route('home'); // You can customize the redirection path
        return redirect()->route('home')->with('success', 'Employee registered successfully!');
       // if(\Auth::attempt($request->only('email','password'))){
           // return redirect('home');
        
       // }
        //return redirect('employees/register')->withError('register details are not correct');



    }

    public function showLoginForm()
    {
        return view('employees.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);



       // if (Auth::attempt($credentials)) {
        //    return redirect()->route('home');
       // }
       if(\Auth::attempt($request->only('email','password'))){
           return redirect('home');
        
       }
        return redirect('employees/login')->withError('details are Invalid login');

    }
    
	public function home(){
        return view('home');
     }
     
    // public function logout(){
       // session::flush();
      // Auth::logout();
       // return redirect ('login');
       //}

       public function logout()
       {
           Auth::logout();
           return redirect()->route('login');
       }

       public function dashboard(){
        return view('admin.dashboard');
    }
            
   // public function logout()
   // {
       // Auth::logout();
       // return redirect()->route('login'); // You can customize the redirection path
   // }
}
