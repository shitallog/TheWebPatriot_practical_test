@extends('layouts.side-navpage')

<div class="page-wrapper">
    <div class="content container-fluid">
    
    <div class="page-header">
    <div class="content-page-header">
    <h5>Add Customers</h5>
    </div>
    </div>
    
    <div class="row">
    <div class="col-md-12">
 <form action="{{ route('admin.customers') }}" method="POST">
    @csrf
    <div class="card-body">
    <div class="form-group-item">
    <h5 class="form-title">Basic Details</h5>
    <div class="profile-picture">
    <div class="upload-profile">
    <div class="profile-img">
    <img id="blah" class="avatar" src="{{asset(' img/profiles/avatar-10.jpg')}}" alt>
    </div>
    <div class="add-profile">
    <h5>Upload a New Photo</h5>
    <span>Profile-pic.jpg</span>
    </div>
    </div>
    <div class="img-upload">
    <label class="btn btn-primary">
    Upload <input type="file">
    </label>
    <a class="btn btn-remove">Remove</a>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="CustomerName" class="form-control" placeholder="Enter Name">
    @if ($errors->has('CustomerName'))
    <span class="help-block">
        <strong>{{ $errors->first('CustomerName') }}</strong>
    </span>
@endif
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
        <label>ADDRESS </label>
        <input type="text" class="form-control" placeholder="Enter Website Address" name="CustomerAddress">
        @if ($errors->has('CustomerAddress'))
        <span class="help-block">
            <strong>{{ $errors->first('CustomerAddress') }}</strong>
        </span>
    @endif 
    
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
            </div>
            </div>
            
        <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
    @if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="form-group">
    <label>Phone</label>
    <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="MobileNumber">
    @if ($errors->has('MobileNumber'))
    <span class="help-block">
        <strong>{{ $errors->first('MobileNumber') }}</strong>
    </span>
@endif 
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="form-group">
    <label>BANK DETAILS</label>
    <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="BankName">
    @if ($errors->has('BankName'))
    <span class="help-block">
        <strong>{{ $errors->first('BankName') }}</strong>
    </span>
@endif 
    </div>
    </div>
  

    </div>
    </div>
  
   
    <div class="add-customer-btns text-end">
    <a href="#" type="reset" class="btn customer-btn-cancel">Cancel</a>
    <a href="customers.html" type="submit" class="btn customer-btn-save">Save Changes</a>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    
    </div>