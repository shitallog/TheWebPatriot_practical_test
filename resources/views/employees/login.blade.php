@extends('layouts.frontend')

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<img class="img-fluid logo-dark mb-2" src="{{asset('img/logo2.png')}}" alt="Logo">
<div class="loginbox">
<div class="login-right">
<div class="login-right-wrap">
<h1>Login</h1>
<p class="account-subtitle">Access to our dashboard</p>

@if (Session::has('error'))
<p class="text-danger">{{ Session::get('error') }}</p>
@endif
@if (Session::has('success'))
<p class="text-success">{{ Session::get('success') }}</p>
@endif

<form action="{{ route('employees.login') }}" method="post">
    @csrf
@method('post')
<div class="form-group">
<label class="form-control-label">Email Address</label>
<input type="text" id="email" class="form-control" name="email" required autofocus>
@if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
@endif
</div>
<div class="form-group">
<label class="form-control-label">Password</label>
<div class="pass-group">
    <input type="password" id="password" class="form-control" name="password" required>

    @if ($errors->has('password'))

        <span class="text-danger">{{ $errors->first('password') }}</span>

    @endif
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-6">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="cb1">
<label class="custom-control-label" for="cb1">Remember me</label>
</div>
</div>
<div class="col-6 text-end">
<a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
</div>
</div>
</div>
<button class="btn btn-lg btn-block btn-primary w-100" type="submit">Login</button>
<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>

<div class="social-login mb-3">
<span>Login with</span>
<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
</div>

<div class="text-center dont-have">Don't have an account yet? <a href=" {{route('employees.register')}} ">Register</a></div>
</form>
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

</body>
</html>