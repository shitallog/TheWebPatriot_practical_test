<!-- resources/views/dashboard/show.blade.php -->

@extends('layouts.side-navpage')
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="content-page-header">
<h2>Employee Details</h2>
<div class="list-btn">
<ul class="filter-list">


<li>
<a class="btn btn-primary" href="{{ route('dashboard.index') }}"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Back Button</a>
</li>

<li>
<a class="btn btn-primary" href="{{ route('dashboard.create') }}"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add  Employee</a>
</li>
</ul>
</div>
</div>
</div>
  	<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Name: <span class="optional">(%)</span></label>
<input  value="{{ $employee->name }}" class="form-control"  required>
</div>	
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Date of Birth:<span class="optional">(%)</span></label>
<input  value="{{ $employee->date_of_birth }}" class=" sm form-control">
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Date of Joining:</label>
<input  value="{{ $employee->date_of_joining }}" class="form-control" >
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Gender:</label>
 <input  value="{{ $employee->gender }}" class="form-control" >

</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Designation:</label>
<input  value="{{ $employee->designation }}" class="form-control" >
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Manager:</label>
<input  value="{{ $employee->manager }}" class="form-control">
</div>
</div>
</div>
</div> 

    

   

    <a class="btn btn-danger" href="{{ route('dashboard.index') }}">Back to Employee List</a>

</div>
</div>
</div>
</div>	
	