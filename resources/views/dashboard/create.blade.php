<!-- resources/views/dashboard/create.blade.php -->

@extends('layouts.side-navpage')


    <h2>Create Employee</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="content-page-header">
<h5>Add Employee</h5>

<div class="list-btn">
<ul class="filter-list">
<li>
<a class="btn btn-primary" href="{{ route('dashboard.index') }}"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Back Button</a>
</li>
<li>
<a class="active btn-filters" href="javascript:void(0);"><span><i class="fe fe-list"></i></span> </a>
</li>
<li>
<a class="btn-filters" href="javascript:void(0);"><span><i class="fe fe-grid"></i></span> </a>
</li>
<li>

</li>

<li>
<a class="btn btn-import" href="javascript:void(0);"><span><i class="fe fe-check-square me-2"></i>Import  Employee</span></a>
</li>

</ul>
</div>
</div>
</div>
<form action="{{ route('dashboard.store')}}" method="post">
 @csrf
		<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12">
	<div class="form-group">
<label class="form-control-label"> NAME</label>
 <input type="text" name="name" required autofocus>
 </div>
 </div>
<div class="col-lg-4 col-md-6 col-sm-12">
     <div class="form-group">
<label class="form-control-label">Date of Birth:</label>
 <input type="text" name="date_of_birth" required autofocus>
 </div>  
   </div>
<div class="col-lg-4 col-md-6 col-sm-12">     
<div class="form-group">
<label class="form-control-label">Date of Joining:</label>
 <input type="text" name="date_of_joining" required autofocus>
 </div> 
 </div>
<div class="col-lg-4 col-md-6 col-sm-12"> 
<div class="form-group">
        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>
		</div>
		</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label class="form-control-label">Designation:</label>
 <input type="text" name="designation" required autofocus>
 </div> 
 </div>
 <div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label class="form-control-label">password:</label>
 <input type="text" name="password" required autofocus>
 </div> 
 </div>
 <div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label class="form-control-label">email :</label>
 <input type="text" name="email" required autofocus>
 </div> 
 </div>
 
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="form-group">
<label class="form-control-label">Manager:</label>
 <input type="text" name="manager" required autofocus>
 </div> 
    </div>
      
   </div>   
<button type="Submit" class=" btn btn-danger bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Create</button>
							<a href=""class="btn btn-danger bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Cancel</a>
     
    </form>

