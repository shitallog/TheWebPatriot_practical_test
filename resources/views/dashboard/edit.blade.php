<!-- resources/views/dashboard/edit.blade.php -->

@extends('layouts.side-navpage')


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="content-page-header">
<h5>Edit Employee</h5>
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
   

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('dashboard.update', $employee->id) }}" method="post">
        @csrf
        @method('PUT')
        
	<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Name: <span class="optional">(%)</span></label>
<input type="text" name="name" value="{{ $employee->name }}" class="form-control" placeholder="Enter name" required>
</div>	
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Date of Birth:<span class="optional">(%)</span></label>
<input type="date" name="date_of_birth" value="{{ $employee->date_of_birth }}" class=" sm form-control" placeholder="Enter date_of_birth" required>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Date of Joining:</label>
<input type="date" name="date_of_joining" value="{{ $employee->date_of_joining }}" class="form-control" placeholder="date_of_joining" name="name">
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Gender:</label>
 <select name="gender" required>
            <option value="male" {{ $employee->gender == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ $employee->gender == 'female' ? 'selected' : '' }}>Female</option>
        </select>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Designation:</label>
<input type="text" name="designation" value="{{ $employee->designation }}" class="form-control" placeholder="Enter  designation">
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Manager:</label>
<input type="text" name="manager" value="{{ $employee->manager }}" class="form-control" placeholder="Enter Your Manager:">
</div>
</div>
</div>
</div>	
	 <button class="btn btn-danger" type="submit">Update</button>
    </form>
</div>
</div>
</div>
</div>
