@extends('layouts.side-navpage')

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Kanakku </title>

<link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

<link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset ('plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset ('plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset ('plugins/feather/feather.css')}}">

<link rel="stylesheet" href="{{asset ('style/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{asset ('plugins/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{asset ('style/style.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset ('css/datatables.min.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset ('css/jquery.dataTables.min.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset ('css/buttons.dataTables.min.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset ('css/jquery.dataTables.css')}}">
 <script type="text/javascript" src="{{asset('script/datatables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('script/jquery-3.6.0.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('script/jquery.dataTables.js')}}"></script>
<!--<link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

-->
<link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet">



  
</head>
<body>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="content-page-header">
<h5>Employee</h5>
<div class="list-btn">
<ul class="filter-list">
<li>
 <div class="text-end">
            <a href="{{ route('download.csv') }}" class="btn btn-primary">Download CSV</a>
        </div>
</li>
<li>
<a class="btn btn-primary" href="{{ route('dashboard.create') }}"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Employee</a>
</li>
</ul>
</div>
</div>
</div>


<div id="filter_inputs" class="card filter-card">
<div class="card-body pb-0">
<div class="row">
<div class="col-sm-6 col-md-3">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="form-group">
<label>Phone</label>
<input type="text" class="form-control">
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card-table">
<div class="card-body">
<div class="table-responsive X_content">
<table id="example"  style="width:100%" class="table table-striped display nowrap">
<thead class="thead-light">
<tr>
 <th>id</th>
 <th>Name</th>
 <th>Date of Birth</th>
 <th>Date of Joining</th>
  <th>Gender</th>
  <th>Designation</th>
    <th>Manager</th>
			 <th>Status</th>
            <th>Actions</th>
        </tr>
</thead>
<tbody id="tableBody">
 @foreach($employees as $employee)
            <tr>
			  <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->date_of_birth }}</td>
                <td>{{ $employee->date_of_joining }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->designation }}</td>
                <td>{{ $employee->manager }}</td>
                
				<td><span type="button" class="btn btn-{{ $employee->is_active ? 'success' : 'danger' }} btn-xs py-0">{{ $employee->is_active ? 'Active' : 'Inactive' }}</span></td>
            <td>
                <form action="{{ route('dashboard.destroy',$employee->id) }}" method="Post">
                       <a href="{{ route('dashboard.show',$employee->id) }}" class="btn btn-light  py-0">Show</a>
                    <a class="btn btn-light" href="{{ route('dashboard.edit',$employee->id) }}">Edit</a>
    
                    @csrf
                    @method('DELETE')
       
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach
		
</tbody>
</table>

 </div>
 @can('employee access')
 <div class="text-right btn mt-4">
  { $employees->links() }}
  </div>
 @endcan
 
 </div>
 
</div>
</div>
</div>
</div>
</div>


 <script src="{{asset('script/jquery-3.6.3.min.js')}}"></script>

    <script src="{{asset('script/bootstrap.bundle.min.js')}}"></script>
    
    <script src="{{asset('script/feather.min.js')}}"></script>
    
    <script src="{{asset('plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    
    <script src="{{asset('plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset('plugins/apexchart/chart-data.js')}}"></script>
    
    <script src="{{asset('js/script.js')}}"></script>
   
    <script>
 
    new DataTable('#example');



 
new $.fn.dataTable.Buttons( table, {
    buttons: [
        'copy', 'excel', 'pdf'
    ]
} );

      </script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>


</body>

</html>
