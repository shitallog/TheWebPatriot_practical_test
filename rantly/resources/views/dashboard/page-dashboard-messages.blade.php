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
                  <h2 class="breadcrumb_title">Messages</h2>
                  <p>Ready to jump back in?</p>
                </div>
              </div>
						</div>
					</div>
          <div class="row">
            <div class="col-lg-5 col-xxl-4">
              <div class="message_container">
                <div class="inbox_user_list">
                  <div class="iu_heading">
                    <div class="candidate_revew_search_box">
                      <form class="row-cols-lg-auto g-3 align-items-center">
                        <button class="btn" type="submit"><span class="flaticon-magnifiying-glass"></span></button>
                        <input class="form-control" type="search" placeholder="Serach" aria-label="Search">
                      </form>
                    </div>
                  </div>
                  <ul>
                    <li class="contact pt3">
                      <a href="#">
                        <div class="wrap">
                          <img class="img-fluid" src="images/team/ms1.jpg" alt="ms1.jpg"/>
                          <div class="child-wrap df">
                            <div class="meta">
                              <h5 class="name">Darlene Robertson</h5>
                              <p class="preview">Head of Development</p>
                            </div>
                            <div class="iul_notific">
                              <small class="body-color">35 mins</small>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="contact">
                      <a href="#">
                        <div class="wrap">
                          <img class="img-fluid" src="images/team/ms2.jpg" alt="ms2.jpg"/>
                          <div class="child-wrap df">
                            <div class="meta">
                              <h5 class="name">Jane Cooper</h5>
                              <p class="preview">Head of Development</p>
                            </div>
                            <div class="iul_notific">
                              <small class="body-color">35 mins</small>
                              <div class="m_notif">2</div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="contact">
                      <a href="#">
                        <div class="wrap">
                          <img class="img-fluid" src="images/team/ms3.jpg" alt="ms3.jpg"/>
                          <div class="child-wrap df">
                            <div class="meta">
                              <h5 class="name">Arlene McCoy</h5>
                              <p class="preview">Head of Development</p>
                            </div>
                            <div class="iul_notific">
                              <small class="body-color">35 mins</small>
                              <div class="m_notif online">2</div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="contact">
                      <a href="#">
                        <div class="wrap">
                          <img class="img-fluid" src="images/team/ms4.jpg" alt="ms4.jpg"/>
                          <div class="child-wrap df">
                            <div class="meta">
                              <h5 class="name">Albert Flores</h5>
                              <p class="preview">Head of Development</p>
                            </div>
                            <div class="iul_notific">
                              <small class="body-color">35 mins</small>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="contact">
                      <a href="#">
                        <div class="wrap">
                          <img class="img-fluid" src="images/team/ms5.jpg" alt="ms5.jpg"/>
                          <div class="child-wrap df">
                            <div class="meta">
                              <h5 class="name">Cameron Williamson</h5>
                              <p class="preview">Head of Development</p>
                            </div>
                            <div class="iul_notific">
                              <small class="body-color">35 mins</small>
                              <div class="m_notif away">2</div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="contact">
                      <a href="#">
                        <div class="wrap">
                          <img class="img-fluid" src="images/team/ms6.jpg" alt="ms6.jpg"/>
                          <div class="child-wrap df">
                            <div class="meta">
                              <h5 class="name">Kristin Watson</h5>
                              <p class="preview">Head of Development</p>
                            </div>
                            <div class="iul_notific">
                              <small class="body-color">35 mins</small>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="contact">
                      <a href="#">
                        <div class="wrap">
                          <img class="img-fluid" src="images/team/ms7.jpg" alt="ms7.jpg"/>
                          <div class="child-wrap df">
                            <div class="meta">
                              <h5 class="name">Annette Black</h5>
                              <p class="preview">Head of Development</p>
                            </div>
                            <div class="iul_notific">
                              <small class="body-color">35 mins</small>
                              <div class="m_notif busy">2</div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="contact">
                      <a href="#">
                        <div class="wrap">
                          <img class="img-fluid" src="images/team/ms8.jpg" alt="ms8.jpg"/>
                          <div class="child-wrap df">
                            <div class="meta">
                              <h5 class="name">Jacob Jones</h5>
                              <p class="preview">Head of Development</p>
                            </div>
                            <div class="iul_notific">
                              <small class="body-color">35 mins</small>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="contact">
                      <a href="#">
                        <div class="wrap">
                          <img class="img-fluid" src="images/team/ms1.jpg" alt="ms1.jpg"/>
                          <div class="child-wrap df">
                            <div class="meta">
                              <h5 class="name">Vincent Porter</h5>
                              <p class="preview">Head of Development</p>
                            </div>
                            <div class="iul_notific">
                              <small class="body-color">35 mins</small>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="contact">
                      <a href="#">
                        <div class="wrap">
                          <img class="img-fluid" src="images/team/ms2.jpg" alt="ms2.jpg"/>
                          <div class="child-wrap df">
                            <div class="meta">
                              <h5 class="name">Jacob Brown</h5>
                              <p class="preview">Head of Development</p>
                            </div>
                            <div class="iul_notific">
                              <small class="body-color">35 mins</small>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-xxl-8">
              <div class="message_container mt30-md">
                <div class="user_heading">
                  <div class="wrap">
                    <span class="contact-status online"></span>
                    <img class="img-fluid mr10" src="images/team/mm1.jpg" alt="mm1.jpg"/>
                    <div class="meta">
                      <a class="text-thm3 tdu float-end fz14" href="#">Delete Conversation</a>
                      <h5 class="name">Arlene McCoy</h5>
                      <p class="preview">Active</p>
                    </div>
                  </div>
                </div>
                <div class="inbox_chatting_box">
                  <ul class="chatting_content">
                    <li class="sent">
                      <div class="df">
                        <img class="img-fluid align-self-start me-3" src="images/team/mm2.jpg" alt="mm2.jpg"/>
                        <h5 class="title">Albert Flores <small class="body-color ml15">35 mins</small></h5>
                      </div>
                      <p>How likely are you to recommend our company to your friends and family?</p>
                    </li>
                    <li class="reply first">
                      <div class="df justify-content-end">
                        <h5 class="title"><small class="body-color mr15">35 mins</small> You</h5>
                        <img class="img-fluid align-self-end ms-3" src="images/team/mm3.jpg" alt="mm3.jpg"/>
                      </div>
                      <p>Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</p>
                    </li>
                    <li class="sent">
                      <div class="df">
                        <img class="img-fluid align-self-start me-3" src="images/team/mm3.jpg" alt="mm3.jpg"/>
                        <h5 class="title">Albert Flores <small class="body-color ml15">35 mins</small></h5>
                      </div>
                      <p>Ok, Understood!</p>
                    </li>
                    <li class="reply first">
                      <div class="df justify-content-end">
                        <h5 class="title"><small class="body-color mr15">35 mins</small> You</h5>
                        <img class="img-fluid align-self-end ms-3" src="images/team/mm3.jpg" alt="mm3.jpg"/>
                      </div>
                      <p>The project finally complete! Let's go to!.</p>
                    </li>
                    <li class="sent">
                      <div class="df">
                        <img class="img-fluid align-self-start me-3" src="images/team/mm2.jpg" alt="mm2.jpg"/>
                        <h5 class="title">Albert Flores <small class="body-color ml15">35 mins</small></h5>
                      </div>
                      <p>Let's go!</p>
                    </li>
                    <li class="sent">
                      <div class="df">
                        <img class="img-fluid align-self-start me-3" src="images/team/mm2.jpg" alt="mm2.jpg"/>
                        <h5 class="title">Albert Flores <small class="body-color ml15">35 mins</small></h5>
                      </div>
                      <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </li>
                    <li class="sent">
                      <div class="df">
                        <img class="img-fluid align-self-start me-3" src="images/team/mm2.jpg" alt="mm2.jpg"/>
                        <h5 class="title">Albert Flores <small class="body-color ml15">35 mins</small></h5>
                      </div>
                      <p>Hello, John!</p>
                    </li>
                    <li class="reply first">
                      <div class="df justify-content-end">
                        <h5 class="title"><small class="body-color mr15">35 mins</small> You</h5>
                        <img class="img-fluid align-self-end ms-3" src="images/team/mm3.jpg" alt="mm3.jpg"/>
                      </div>
                      <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </li>
                    <li class="reply first">
                      <div class="df justify-content-end">
                        <h5 class="title"><small class="body-color mr15">35 mins</small> You</h5>
                        <img class="img-fluid align-self-end ms-3" src="images/team/mm3.jpg" alt="mm3.jpg"/>
                      </div>
                      <p>Are we meeting today?</p>
                    </li>
                    <li class="reply first">
                      <div class="df justify-content-end">
                        <h5 class="title"><small class="body-color mr15">35 mins</small> You</h5>
                        <img class="img-fluid align-self-end ms-3" src="images/team/mm3.jpg" alt="mm3.jpg"/>
                      </div>
                      <p>The project finally complete! Let's go to!</p>
                    </li>
                    <li class="sent">
                      <div class="df">
                        <img class="img-fluid align-self-start me-3" src="images/team/mm2.jpg" alt="mm2.jpg"/>
                        <h5 class="title">Albert Flores <small class="body-color ml15">35 mins</small></h5>
                      </div>
                      <p>Let's go!</p>
                    </li>
                    <li class="sent">
                      <div class="df">
                        <img class="img-fluid align-self-start me-3" src="images/team/mm2.jpg" alt="mm2.jpg"/>
                        <h5 class="title">Albert Flores <small class="body-color ml15">35 mins</small></h5>
                      </div>
                      <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </li>
                    <li class="reply first">
                      <div class="df justify-content-end">
                        <h5 class="title"><small class="body-color mr15">35 mins</small> You</h5>
                        <img class="img-fluid align-self-end ms-3" src="images/team/mm3.jpg" alt="mm3.jpg"/>
                      </div>
                      <p>Are we meeting today?</p>
                    </li>
                    <li class="reply first">
                      <div class="df justify-content-end">
                        <h5 class="title"><small class="body-color mr15">35 mins</small> You</h5>
                        <img class="img-fluid align-self-end ms-3" src="images/team/mm3.jpg" alt="mm3.jpg"/>
                      </div>
                      <p>The project finally complete! Let's go to!</p>
                    </li>
                    <li class="sent">
                      <div class="df">
                        <img class="img-fluid align-self-start me-3" src="images/team/mm2.jpg" alt="mm2.jpg"/>
                        <h5 class="title">Albert Flores <small class="body-color ml15">35 mins</small></h5>
                      </div>
                      <p>Let's go!</p>
                    </li>
                    <li class="sent">
                      <div class="df">
                        <img class="img-fluid align-self-start me-3" src="images/team/mm2.jpg" alt="mm2.jpg"/>
                        <h5 class="title">Albert Flores <small class="body-color ml15">35 mins</small></h5>
                      </div>
                      <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </li>
                  </ul>
                </div>
                <div class="mi_text">
                  <div class="message_input">
                    <form class="row-cols-lg-auto g-3 align-items-center">
                      <input class="form-control" type="search" placeholder="Type a Message" aria-label="Search">
                      <button class="btn" type="submit">Send</button>
                    </form>
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

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-dashboard-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 11:44:12 GMT -->
</html>