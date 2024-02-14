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
                    <li><a class="active" href="{{route('UserProfile')}}"><span class="flaticon-user-2"></span>Profile</a></li>
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
              <div class="col-lg-12 mb50">
                <div class="breadcrumb_content">
                  <h2 class="breadcrumb_title">Profile</h2>
                  <p>Ready to jump back in?</p>
                </div>
              </div>
						</div>
					</div>
          <div class="row">
            <div class="col-lg-12">
              <div class="new_property_form mb30">
                <h4 class="title mb30">Account Details</h4>
                <div class="dp_user_thumb_content">
                  <div class="wrap-custom-file mb25">
                    <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png">
                    <label for="image1">
                      <span>&nbsp;&nbsp;Browse</span>
                    </label>
                    <small class="file_title">Max file size is 1MB, Minimum dimension: 330x300 And Suitable files are .jpg & .png</small>
                  </div>
                </div>
                <form  role="form" action="#"  method="post">
                 @csrf
                 @method('PUT')
                  <div class="row">
                    <div class="col-lg-7">
                      <div class="row">
                        <div class="col-sm-6 col-lg-7">
                          <div class="mb20">
                            <input name="name"  class="form-control form_control" type="text" placeholder="Password">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb20">
                            <input name="email"  class="form-control form_control" type="text" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-7">
                          <div class="mb20">
                            <input name="password"  class="form-control form_control" type="text" placeholder="Password">
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="new_propertyform_btn">
                            <button type="submit" class="btn btn-thm ad_flor_btn">EDIT</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="new_property_form">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="title mb30">Change Password</h4>
                  </div>
                  <div class="col-sm-6 col-lg-7">
                    <div class="mb20">
                      <input name="form_name" class="form-control form_control" type="text" placeholder="Old Password">
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-7">
                    <div class="mb20">
                      <input name="form_name" class="form-control form_control" type="text" placeholder="New Password">
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-7">
                    <div class="mb20">
                      <input name="form_name" class="form-control form_control mb20" type="text" placeholder="Re-enter New Password">
                      <a href="#" class="btn btn-thm ad_flor_btn">Save</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="new_property_form">
                <div class="row">
                  <div class="col-lg-7">
                    <div class="row">
                      <div class="col-lg-12">
                        <h4 class="title mb30">Your Social Networks</h4>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb20">
                          <input name="form_name" class="form-control form_control" type="text" placeholder="Facebook">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb20">
                          <input name="form_name" class="form-control form_control" type="text" placeholder="Twitter">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb20">
                          <input name="form_name" class="form-control form_control" type="text" placeholder="Linked In">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb20">
                          <input name="form_name" class="form-control form_control mb20" type="text" placeholder="Youtube">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <a href="#" class="btn btn-thm ad_flor_btn">Save</a>
                      </div>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="new_property_form">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="title mb30">Gallery</h4>
                  </div>
                  <div class="col-lg-12">
                    <label class="form-label">Featured Image</label>
                    <ul class="mb0 mt10">
                      <li class="list-inline-item">
                        <div class="portfolio_item">
                          <img class="img-fluid" src="images/listing/a3.jpg" alt="a3.jpg">
                          <div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
                            <a href="#"><span>X</span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-inline-item vat">
                        <div class="upload_file_input_add_remove style-right mb30-sm">
                          <span class="btn_upload">
                            <input type="file" id="imag3" title="" class="input-img" placeholder="UPLOAD FILES"/>
                            <span class="">UPLOAD FILES</span>
                          </span>
                          <img id="ImgPreview3" src="#" class="preview3" alt=""/>
                          <button id="removeImage3" class="btn-rmv3" type="button"><span>X</span></button>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="form-label">Video - copy any online video link e.g. YouTube, Facebook, Instagram or .mp4</label>
                      <input name="form_name" class="form-control form_control" type="text" placeholder="Video Link">
                    </div>
                  </div>
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
<script src="js/smartuploader.js"></script>
<script src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 11:44:08 GMT -->
</html>