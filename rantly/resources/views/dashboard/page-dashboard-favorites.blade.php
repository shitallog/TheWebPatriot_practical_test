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
                    <li><a href="{{route('Messages')}}"><span class="flaticon-message"></span>Messages</a></li>
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
                  <h2 class="breadcrumb_title">Favorites</h2>
                  <p>Ready to jump back in?</p>
                </div>
              </div>
						</div>
					</div>
          <div class="row">
            <div class="col-lg-12">
              <div class="dashboard_favorites_contents p10-520">
                <div class="row">
                  <div class="col-sm-6 col-xl-12 col-xxl-6">
                    <div class="car-listing list_style">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img class="img-fluid" src="images/listing/1.jpg" alt="1.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$129</h5>
                          <h6 class="title"><a href="page-car-single-v1.html">Volvo XC90 - 2020</a></h6>
                          <div class="listign_review">
                            <ul class="mb0">
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#">4.7</a></li>
                              <li class="list-inline-item">(684 reviews)</li>
                            </ul>
                          </div>
                          <div class="mb0 db_share_icons">
                            <a href="#"><span class="flaticon-heart"></span></a>
                          </div>
                        </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-12 col-xxl-6">
                    <div class="car-listing list_style">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img class="img-fluid" src="images/listing/2.jpg" alt="2.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$129</h5>
                          <h6 class="title"><a href="page-car-single-v1.html">Mercedes-Benz S 560 - 2021</a></h6>
                          <div class="listign_review">
                            <ul class="mb0">
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#">4.7</a></li>
                              <li class="list-inline-item">(684 reviews)</li>
                            </ul>
                          </div>
                          <div class="mb0 db_share_icons">
                            <a href="#"><span class="flaticon-heart"></span></a>
                          </div>
                        </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-12 col-xxl-6">
                    <div class="car-listing list_style">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img class="img-fluid" src="images/listing/5.jpg" alt="5.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$129</h5>
                          <h6 class="title"><a href="page-car-single-v1.html">Audi A8 L 55 - 2021</a></h6>
                          <div class="listign_review">
                            <ul class="mb0">
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#">4.7</a></li>
                              <li class="list-inline-item">(684 reviews)</li>
                            </ul>
                          </div>
                          <div class="mb0 db_share_icons">
                            <a href="#"><span class="flaticon-heart"></span></a>
                          </div>
                        </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-12 col-xxl-6">
                    <div class="car-listing list_style">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img class="img-fluid" src="images/listing/3.jpg" alt="3.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$129</h5>
                          <h6 class="title"><a href="page-car-single-v1.html">BMW M8 Gran Coupe Base - 2021</a></h6>
                          <div class="listign_review">
                            <ul class="mb0">
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#">4.7</a></li>
                              <li class="list-inline-item">(684 reviews)</li>
                            </ul>
                          </div>
                          <div class="mb0 db_share_icons">
                            <a href="#"><span class="flaticon-heart"></span></a>
                          </div>
                        </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-12 col-xxl-6">
                    <div class="car-listing list_style">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img class="img-fluid" src="images/listing/7.jpg" alt="7.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$129</h5>
                          <h6 class="title"><a href="page-car-single-v1.html">Bentley Bentayga V8 - 2020</a></h6>
                          <div class="listign_review">
                            <ul class="mb0">
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#">4.7</a></li>
                              <li class="list-inline-item">(684 reviews)</li>
                            </ul>
                          </div>
                          <div class="mb0 db_share_icons">
                            <a href="#"><span class="flaticon-heart"></span></a>
                          </div>
                        </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-12 col-xxl-6">
                    <div class="car-listing list_style">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img class="img-fluid" src="images/listing/8.jpg" alt="8.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$129</h5>
                          <h6 class="title"><a href="page-car-single-v1.html">Ferrari 488 Spider Base - 2019</a></h6>
                          <div class="listign_review">
                            <ul class="mb0">
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#">4.7</a></li>
                              <li class="list-inline-item">(684 reviews)</li>
                            </ul>
                          </div>
                          <div class="mb0 db_share_icons">
                            <a href="#"><span class="flaticon-heart"></span></a>
                          </div>
                        </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mbp_pagination mt10">
                      <ul class="page_navigation">
                        <li class="page-item">
                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="fa fa-arrow-left"></span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><span class="fa fa-arrow-right"></span></a>
                        </li>
                      </ul>
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
<script src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-dashboard-favorites.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 11:44:08 GMT -->
</html>