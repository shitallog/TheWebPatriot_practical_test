@include('layouts/header2');
	<!-- Our SigUp -->
	<section class="our-log bgc-f9">
		<div class="container">
			<div class="row">
        <div class="col-md-6 col-lg-6 col-xl-5">
          <div class="sign_up_form mt60-sm">
            <h2 class="title">Sign up</h2>
            <p>Already have a profile? <a href="page-login.html">Sign in.</a></p>
            <form action="{{route('register')}}" method="POST" onsubmit="return validation()" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                  </div>
                </div>
                {{-- <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control">
                  </div>
                </div> --}}
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group mb20">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group mb20">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="re-password" class="form-control">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-signup btn-thm mb0" >Sign Up</button>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 offset-xl-1 col-xl-5 offset-xl-2">
          <div class="login_with signup_page mt0-sm">
            <h2 class="title">Connect With Social</h2>
            <div class="social_btn">
              <a class="btn btn_fb" href="#"><span class="fab fa-facebook-f"></span>Log In via Facebook</a><br>
              <a class="btn btn_google" href="#"><span class="fab fa-google"></span>Log In via Google+</a>
            </div>
          </div>
        </div>
			</div>
		</div>
	</section>

  @include('layouts/footer');