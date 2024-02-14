@extends('layouts.frontend')

 <div class="main-wrapper login-body">
 <div class="login-wrapper">
  <div class="container">
  
   <div class="loginbox">
    <div class="login-right">
     <div class="login-right-wrap">
      <h1> Register</h1>
      <p class="account-subtitle">Access to our dashboard</p> @if (Session::has('error')) <p class="text-danger">{{ Session::get('error') }}</p> @endif 
	  <form action="{{ route('employees.register') }}" method="post" enctype="multipart/form-data"> @csrf <div class="form-group">
        <label class="form-control-label"> NAME</label>
        <input type="text" id="name" class="form-control" name="name" required autofocus>
        <br> @if ($errors->has('name')) <span class="text-danger">{{ $errors->first('name') }}</span> @endif
       </div>
       <div class="form-group">
        <label class="form-control-label" for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" class="form-control" name="date_of_birth" required>
        <br> @if ($errors->has('date_of_birth')) <span class="text-danger">{{ $errors->first('date_of_birth') }}</span> @endif
       </div>
       <div class="form-group">
        <label class="form-control-label" for="date_of_joining">Date of Joining:</label>
        <input type="date" id="date_of_joining" class="form-control"  name="date_of_joining" required>
        <br> @if ($errors->has('date_of_joining')) <span class="text-danger">{{ $errors->first('date_of_joining') }}</span> @endif
       </div>
       <div class="form-group">
        <label class="form-control-label" for="gender">Gender:</label>
        <select name="gender" class="form-control" required>
         <option value="male">Male</option>
         <option value="female">Female</option>
        </select>
        <br>
       </div>
       <div class="form-group">
        <label class="form-control-label" for="designation">Designation:</label>
        <input  type="text" id="designation" class="form-control" name="designation" required>
        <br> @if ($errors->has('designation')) <span class="text-danger">{{ $errors->first('designation') }}</span> @endif
       </div>
       <div class="form-group">
        <label class="form-control-label" for="manager">Manager:</label>
        <input type="text" id="manager" class="form-control" name="manager" required>
        @if ($errors->has('manager')) <span class="text-danger">{{ $errors->first('manager') }}</span> @endif
       </div>
       <div class="form-group">
        <label class="form-control-label" for="employee_picture">Employee Picture:</label>
        <input type="file" class="form-control" name="employee_picture"required>@if ($errors->has('employee_picture')) <span class="text-danger">{{ $errors->first('employee_picture') }}</span> @endif
       </div>
       <div class="form-group">
        <label class="form-control-label">Password</label>
        <input type="password" id="password" class="form-control" name="password" required> @if ($errors->has('password')) <span class="text-danger">{{ $errors->first('password') }}</span> @endif
       </div>
       <div class="form-group">
        <label class="form-control-label">Confirm Password</label>
        <input class="form-control" type="password" name="password_confirmation" id="confirmPassword" required>
        <span id="passwordError" style="color: red;"></span>
        <!-- Error message for password confirmation -->
       </div>
     
	   <div class="form-group">
<label class="form-control-label">Email Address</label>
<input type="text" id="email" class="form-control" name="email" required autofocus>
@if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
@endif
</div>
	   
       <div class="form-group mb-0">
        <button class="btn btn-lg btn-block btn-primary w-100" type="submit">Register</button>
       </div>
      </form>
      <div class="login-or">
       <span class="or-line"></span>
       <span class="span-or">or</span>
      </div>
      <div class="social-login">
       <span>Register with</span>
       <a href="#" class="facebook">
        <i class="fab fa-facebook-f"></i>
       </a>
       <a href="#" class="google">
        <i class="fab fa-google"></i>
       </a>
      </div>
      <div class="text-center dont-have">Already have an account? <a href="{{route('employees.login')}}">Login</a>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<script src="{{asset('script/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('script/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('script/script.js')}}"></script>
<script src="{{asset('script/feather.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
 function submitForm() {
  $.ajax({
   url: '/register',
   type: 'post',
   data: new FormData($("#employeeForm")[0]),
   processData: false,
   contentType: false,
   success: function(response) {
    alert(response);
   }
  });
 }
</script>
</body>
</html>