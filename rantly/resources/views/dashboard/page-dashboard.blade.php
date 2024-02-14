@include('layouts.header2');

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f9">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xxl-10 offset-xxl-2 dashboard_grid_space">
          <div class="row">
            <div class="col-lg-12">
              <div class="extra-dashboard-menu dn-lg">
                <div class="ed_menu_list">
                  <ul> 
                    <li><a href="{{route('DashBoard')}}"><span class="flaticon-dashboard"></span>Dashboard</a></li>
                    <li><a class="active"  href="{{route('UserProfile')}}"><span class="flaticon-user-2"></span>Profile</a></li>
                    <li><a href="{{route('MyListings')}}"><span class="flaticon-list"></span>My Listing</a></li>
                    <li><a href="{{route('Favourites')}}"><span class="flaticon-heart"></span>Favorites</a></li>
                    <li><a href="{{route('AddListing')}}"><span class="flaticon-plus"></span>Add Listing</a></li>
                    <li><a href="{{route('Messages')}}"><span class="flaticon-message"></span>Messags</a></li>
                    <li><a href="{{route('LogOut')}}"><span class="flaticon-logout"></span>Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
					<div class="row">
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-lg mt50">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                  <ul id="myDropdown" class="dropdown-content">
                    <li><a href="{{route('DashBoard')}}"><span class="flaticon-dashboard"></span>Dashboard</a></li>
                    <li><a class="active" href="{{route('UserProfile')}}"><span class="flaticon-user-2"></span>Profile</a></li>
                    <li><a href="{{route('MyListings')}}"><span class="flaticon-list"></span>My Listing</a></li>
                    <li><a href="{{route('Favourites')}}"><span class="flaticon-heart"></span>Favorites</a></li>
                    <li><a href="{{route('AddListing')}}"><span class="flaticon-plus"></span>Add Listing</a></li>
                    <li><a href="{{route('Messages')}}"><span class="flaticon-message"></span>Messages</a></li>
                    <li><a href="{{route('LogOut')}}"><span class="flaticon-logout"></span>Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-8">
              <div class="breadcrumb_content mb50">
                <h2 class="breadcrumb_title">Hello, Cameron!</h2>
                <p>Ready to jump back in!</p>
              </div>
						</div>
					</div>
          <div class="row">
            <div class="col-sm-6 col-lg-4">
              <div class="ff_one">
                <div class="icon"><span class="flaticon-list"></span></div>
                <div class="detais text-end">
                  <div class="timer">1260</div>
                  <p class="para">Total Listing</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="ff_one style2">
                <div class="icon"><span class="flaticon-message"></span></div>
                <div class="detais text-end">
                  <div class="timer">74</div>
                  <p class="para">Messages</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="ff_one style3">
                <div class="icon"><span class="flaticon-heart"></span></div>
                <div class="detais text-end">
                  <div class="timer">20</div>
                  <p class="para">Favorites</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-xl-7">
              <div class="application_statics">
                <h4>Your Profile Views</h4>
                <div class="c_container"></div>
              </div>
            </div>
            <div class="col-xl-5">
              <div class="recent_job_activity">
                <h4 class="title">Recent Activities</h4>
                <div class="grid d-block d-sm-flex">
                  <div class="icon blue"><span><img src="images/icon/briefcase-blue.svg" alt="briefcase-blue.svg"></span></div>
                  <p class="mb0"><span class="heading-color">Wade Warren</span> add list for a car <span class="color-blue">Audi a3 Sportback 2020</span></p>
                </div>
                <div class="grid d-block d-sm-flex">
                  <div class="icon blue"><span><img src="images/icon/briefcase-blue.svg" alt="briefcase-blue.svg"></span></div>
                  <p class="mb0"><span class="heading-color">Wade Warren</span> add list for a car <span class="color-blue">Audi a5 Sportback 2020</span></p>
                </div>
                <div class="grid d-block d-sm-flex">
                  <div class="icon green"><span><img src="images/icon/briefcase-green.svg" alt="briefcase-green.svg"></span></div>
                  <p><span class="heading-color">Wade Warren</span> Saved for a car Mercedes cla 2021</p>
                </div>
                <div class="grid d-block d-sm-flex">
                  <div class="icon blue"><span><img src="images/icon/briefcase-blue.svg" alt="briefcase-blue.svg"></span></div>
                  <p><span class="heading-color">Wade Warren</span> add list for a car <span class="color-blue">Audi q5 Sportback 2020</span></p>
                </div>
                <div class="grid d-block d-sm-flex">
                  <div class="icon green"><span><img src="images/icon/briefcase-green.svg" alt="briefcase-green.svg"></span></div>
                  <p><span class="heading-color">Wade Warren</span> Saved for a car Mercedes c-class 2021</span></p>
                </div>
                <div class="grid d-block d-sm-flex">
                  <div class="icon blue"><span><img src="images/icon/briefcase-blue.svg" alt="briefcase-blue.svg"></span></div>
                  <p><span class="heading-color">Wade Warren</span> add list for a car <span class="color-blue">Audi a3 Sportback 2020</span></p>
                </div>
              </div>
            </div>
          </div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
</div>
<!-- Wrapper End -->
<script src="js/jquery-3.6.0.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.mmenu.all.js"></script>
<script src="js/ace-responsive-menu.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-custome.js"></script>
<script src="js/snackbar.min.js"></script>
<script src="js/simplebar.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scrollto.js"></script>
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/progressbar.js"></script>
<script src="js/slider.js"></script>
<script src="js/timepicker.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 11:44:07 GMT -->
</html>