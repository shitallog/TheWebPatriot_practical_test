<?php

namespace App\Http\Controllers;

use App\Models\customerusers;
use Illuminate\Http\Request;

class CustomerAuthController extends Controller
{

    //show the pages
    public function Customermain(){
        return view ('admin.customers');
    }  
    
    public function addCustomer(){
        return view ('admin.add-customers');
    }  

    public function editCustomer(){
        return view ('admin.edit-customer');
    }  
    public function viewCustomersdetail(){
        return view ('admin.viewcustomer-details');
    }  





}



