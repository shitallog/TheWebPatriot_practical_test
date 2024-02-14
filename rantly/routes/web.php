<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingPageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// routes/web.php

Route::get('/', [LandingPageController::class, 'index'])->name('HomePage');

// Register
Route::get('Register', [AuthController::class , 'showRegister'])->name('RegistrationPage');
Route::post('Register', [AuthController::class , 'Register'])->name('register');

// Login
Route::get('Login', [AuthController::class , 'showLogin'])->name('LoginPage');
Route::post('Login', [AuthController::class , 'Login'])->name('login');

//Logout
Route::get('Logout', [])->name('LogOut'); 

// UserProfile
Route::view('UserProfile', 'page-user-profile')->name('UserProfile');


// Dashboard-Profile
// Route::view('DashboardProfile', 'dashboard.page-dashboard-profile')->name('AdminProfile');

// My Listings
Route::view('My-Listings', 'dashboard.page-dashboard-listing')->name('MyListings');

// Favourites
Route::view('Favourites', 'dashboard.page-dashboard-favorites')->name('Favourites');

// Add Listing      
Route::view('AddListing', 'dashboard.page-dashboard-add-listings')->name('AddListing');

// Messages
Route::view('Messages', 'dashboard.page-dashboard-messages')->name('Messages');

// UserProfile
Route::get('Profile', [UserController::class,'ShowProfile'])->name('UserProfile');


Route::get('Dashboard',[AuthController::class,'dashboard'])->name('DashBoard');
Route::get('form', [AuthController::class,'form'])->name('AdminProfile');

// Customers
Route::get('Customers',[AuthController::class,'ShowCustomers'])->name('ShowCustomers');

// AdminLogin
Route::get('AdminLogin',[AdminController::class,'showadminlogin'])->name('AdminLogin');
Route::post('AdminLogin',[AdminController::class,'adminlogin'])->name('login.check');


