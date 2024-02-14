@extends('layouts.side-navpage')



<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="content-page-header">
<h5>Settings</h5>
</div>
</div>

<div class="row">
<div class="col-xl-3 col-md-4">
<div class="card">
<div class="card-body">

<div class="widget settings-menu mb-0">
<ul>
<li class="nav-item">
<a href="settings.html" class="nav-link active">
<i class="far fa-user"></i> <span>Profile Settings</span>
</a>
</li>
<li class="nav-item">
<a href="preferences.html" class="nav-link">
<i class="fas fa-cog"></i> <span>Preferences</span>
</a>
</li>
<li class="nav-item">
<a href="tax-types.html" class="nav-link">
<i class="far fa-check-square"></i> <span>Tax Types</span>
</a>
</li>
<li class="nav-item">
<a href="expense-category.html" class="nav-link">
<i class="far fa-list-alt"></i> <span>Expense Category</span>
</a>
</li>
<li class="nav-item">
<a href="notifications.html" class="nav-link">
<i class="far fa-bell"></i> <span>Notifications</span>
</a>
</li>
<li class="nav-item">
<a href="change-password.html" class="nav-link">
<i class="fas fa-unlock-alt"></i> <span>Change Password</span>
</a>
</li>
<li class="nav-item">
<a href="delete-account.html" class="nav-link">
<i class="fas fa-ban"></i> <span>Delete Account</span>
</a>
</li>
</ul>
</div>

</div>
</div>
</div>
<div class="col-xl-9 col-md-8">
<div class="card">
<div class="card-header">
<h5 class="card-title">Basic information</h5>
</div>
<div class="card-body">

<form action="{{ route('edit-profile-submit') }}" method="POST"  enctype="multipart/form-data">
    @csrf
<div class="row form-group">
<label for="avatar" class="col-sm-3 col-form-label input-label">Avatar</label>
<div class="col-sm-9">
<div class="d-flex align-items-center">
<label class="avatar avatar-xxl profile-cover-avatar m-0" for="edit_img">
<img id="avatarImg" class="avatar-img" src="assets/img/profiles/avatar-02.jpg" alt="Profile Image">
<input type="file" id="edit_img" name="profile_pic">
<span class="avatar-edit">
<i class="fe fe-edit avatar-uploader-icon shadow-soft"></i>
</span>
</label>
</div>
</div>
</div>
<div class="row form-group">
<label for="name" class="col-sm-3 col-form-label input-label">Bussiness Name</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="name" placeholder="Your Name"  name="name" data-required>
</div>
</div>
<div class="row form-group">
<label for="email" class="col-sm-3 col-form-label input-label">Email</label>
<div class="col-sm-9">
<input type="email" class="form-control" id="email" placeholder="Email"  name="email" required>
</div>
</div>
<div class="row form-group">
<label for="phone" class="col-sm-3 col-form-label input-label">Phone </label>
<div class="col-sm-9">
<input type="text" class="form-control" id="phone" placeholder="+x(xxx)xxx-xx-xx"  name="phone" required>
</div>
</div>
<div class="row form-group">
<label for="location" class="col-sm-3 col-form-label input-label">Location</label>
<div class="col-sm-9">
<div class="mb-3">
<input type="text" class="form-control" id="location" placeholder="Country"  name="country" required>
</div>
<div class="mb-3">
<input type="text" class="form-control" placeholder="City"  name="city" required>
</div>
<input type="text" class="form-control" placeholder="State"  name="state" required>
</div>
</div>
<div class="row form-group">
<label for="addressline1" class="col-sm-3 col-form-label input-label">Address line 1</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="addressline1" placeholder="Your address"  name="address" required>
</div>
</div>
<div class="row form-group">
<label for="addressline2" class="col-sm-3 col-form-label input-label">Address line 2 <span class="text-muted">(Optional)</span></label>
<div class="col-sm-9">
<input type="text" class="form-control" id="addressline2" placeholder="Your address" >
</div>
</div>
<div class="row form-group">
<label for="zipcode" class="col-sm-3 col-form-label input-label">Pin Code</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="zipcode" placeholder="Your pin code" name="pin_code" required>
</div>
</div>
<div class="row form-group">
<label for="gst_no" class="col-sm-3 col-form-label input-label">Gst No.<span class="text-muted">(Optional)</span></label>
<div class="col-sm-9">
<input type="text" class="form-control" id="gst_no" placeholder="Your Gst number"  name="gst">
</div>
</div>
<div class="row form-group">
<label for="pan" class="col-sm-3 col-form-label input-label">Pan No.</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="pan" placeholder="Your Pan No."  name="pan" required>
</div>
</div>
<div class="row form-group">
<label for="auth" class="col-sm-3 col-form-label input-label">Authorised Person's Name</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="auth" placeholder="Authorised Signatory Person's Name"  name="authorized" required>
</div>
</div>
<div class="row form-group">
<label for="bank_detail" class="col-sm-3 col-form-label input-label">Bank Details</label>
<div class="col-sm-9">
<div class="mb-3">
<input type="text" class="form-control" id="bank_name" placeholder="bank name"  name="bank_name" required>
</div>
<div class="mb-3">
<input type="text" class="form-control" placeholder="bank IFSC" value="" name="bank_ifsc" required>
</div>
<input type="text" class="form-control" placeholder="account no." value="" name="bank_account" required>
</div>
</div>
<div class="text-end">
<button type="submit" class="btn btn-primary">Save Changes</button>
</div>
</form>

</div>
</div>
</div>
</div>
</div>
</div>