<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\HTTP\Controllers\profiletcontroller;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\customerAuthcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/', function () {
    return view('welcome');
});


// login_register_page_route
Route::group(['middleware'=>'guest'],function(){
     Route::get('auth/login', [AuthController::class ,'showLogin'])->name('auth.login');
     Route::post('login', [AuthController::class ,'login'])->name('login');

     Route::get('auth/register', [AuthController::class ,'showRegister'])->name('auth.register');
     Route::post('register', [AuthController::class ,'Register'])->name('register');
});
//  end_register_login_page
//logouthome_route
Route::group(['middleware'=>'auth'],function(){
      Route::get('home', [EmployeeController::class , 'home'])->name('home');
      Route::post('logout', [EmployeeController::class , 'logout'])->name('logout');
});
//employee_login_ragister

Route::get('/employees/register', [EmployeeController::class, 'showRegistrationForm'])->name('employees.register');
Route::post('/employees/register', [EmployeeController::class, 'register']);
Route::get('/employees/login', [EmployeeController::class, 'showLoginForm'])->name('employees.login');
Route::post('/employees/login', [EmployeeController::class, 'login']);
Route::post('/employees/logout', [EmployeeController::class, 'logout'])->name('employees.logout');

 Route::get('home', [EmployeeController::class , 'home'])->name('home');
  Route::post('logout', [EmployeeController::class , 'logout'])->name('logout');


Route::get('/admin/profile', [profiletcontroller::class, "profile"])->name('profile');
Route::get('/admin/edit-profile', [profiletcontroller::class, "editprofile"]);
Route::post('/edit-profile-submit', [profiletcontroller::class, "editprofilesubmit"])->name('edit-profile-submit');
Route::get('/admin/setting', [profiletcontroller::class, "accountSetting"])->name('setting');


//dashboard_page
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

//customer_page
Route::get('admin/dashboard', [CustomAuthController::class, 'dashboardmain'])->name('dashboard');


Route::get('admin/customers', [CustomerAuthController::class, 'Customermain'])->name('customers');

Route::resource('companies', CompanyCRUDController::class);
Route::resource('employees', EmployeeDashboardController::class);




//Route::get('/dashboard/index', [EmployeeDashboardController::class, 'index'])->name('dashboard.index');

Route::post('store', [EmployeeDashboardController::class, 'store']);
Route::post('edit', [EmployeeDashboardController::class, 'edit']);
Route::post('/dashboard/delete', [EmployeeDashboardController::class, 'destroy']);

// returns the form for adding a post
Route::get('/dashboard/index', [EmployeeDashboardController::class, 'index'])->name('dashboard.index');
Route::get('/get-csv', [EmployeeDashboardController::class, 'generateCsv'])->name('download.csv');
// returns the form for adding a post
Route::get('/dashboard/create', [EmployeeDashboardController::class, 'create'])->name('dashboard.create');
// adds a post to the database
Route::post('/dashboard/index', EmployeeDashboardController::class .'@store')->name('dashboard.store');
// returns a page that shows a full post
Route::get('/dashboard/{id}', EmployeeDashboardController::class .'@show')->name('dashboard.show');
// returns the form for editing a post
Route::get('/dashboard/{id}/edit', EmployeeDashboardController::class .'@edit')->name('dashboard.edit');
// updates a post
Route::put('/dashboard/{id}', EmployeeDashboardController::class .'@update')->name('dashboard.update');
// deletes a post
Route::delete('/dashboard/{id}', EmployeeDashboardController::class .'@destroy')->name('dashboard.destroy');


//////////////////////////////////////////////new
//category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');