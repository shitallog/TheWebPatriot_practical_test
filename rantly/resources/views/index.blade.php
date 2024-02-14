
@include('layouts/header')
  <!-- Home Design -->
  <section class="home-one bg-home1">
    <div class="container">
      <div class="row posr">
        <div class="col-lg-10 m-auto">
          <div class="home_content home1_style">
            <div class="home-text text-center mb30">
              <h2 class="title"><span class="aminated-object1"><img class="objects" src="images/home/title-bottom-border.svg" alt=""></span>Find Your Next Match</h2>
              <p class="para">Find the right price, dealer and advice.</p>
            </div>
            <div class="advance_search_panel">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-allstatus-tab" data-bs-toggle="pill" data-bs-target="#pills-allstatus" type="button" role="tab" aria-controls="pills-allstatus" aria-selected="true">All Status</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-usedcar-tab" data-bs-toggle="pill" data-bs-target="#pills-usedcar" type="button" role="tab" aria-controls="pills-usedcar" aria-selected="false">Used Cars</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-newcar-tab" data-bs-toggle="pill" data-bs-target="#pills-newcar" type="button" role="tab" aria-controls="pills-newcar" aria-selected="false">New Cars</button>
                    </li>
                  </ul>
                  <div class="adss_bg_stylehome1">
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-allstatus" role="tabpanel" aria-labelledby="pills-allstatus-tab">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="home1_advance_search_wrapper">
                              <ul class="mb0 text-center">
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_brand">
                                      <h6 class="title">Make</h6>
                                      <select class="selectpicker">
                                        <option>Select Makes</option>
                                        <option>Audi</option>
                                        <option>Bentley</option>
                                        <option>BMW</option>
                                        <option>Ford</option>
                                        <option>Honda</option>
                                        <option>Mercedes</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_models">
                                      <h6 class="title">Models</h6>
                                      <select class="selectpicker">
                                        <option>Select Models</option>
                                        <option>A3 Sportback</option>
                                        <option>A4</option>
                                        <option>A6</option>
                                        <option>Q5</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_prices">
                                      <h6 class="title">Price</h6>
                                      <select class="selectpicker">
                                        <option>All Price</option>
                                        <option>No max Price</option>
                                        <option>$2,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$15,000</option>
                                        <option>$5,000</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="d-block">
                                    <button class="btn btn-thm advnc_search_form_btn"><span class="flaticon-magnifiying-glass"></span>Search</button>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-usedcar" role="tabpanel" aria-labelledby="pills-usedcar-tab">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="home1_advance_search_wrapper">
                              <ul class="mb0 text-center">
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_brand">
                                      <h6 class="title">Make</h6>
                                      <select class="selectpicker">
                                        <option>Select Makes</option>
                                        <option>Audi</option>
                                        <option>Bentley</option>
                                        <option>BMW</option>
                                        <option>Ford</option>
                                        <option>Honda</option>
                                        <option>Mercedes</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_models">
                                      <h6 class="title">Models</h6>
                                      <select class="selectpicker">
                                        <option>Select Models</option>
                                        <option>A3 Sportback</option>
                                        <option>A4</option>
                                        <option>A6</option>
                                        <option>Q5</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_prices">
                                      <h6 class="title">Price</h6>
                                      <select class="selectpicker">
                                        <option>All Price</option>
                                        <option>No max Price</option>
                                        <option>$2,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$15,000</option>
                                        <option>$5,000</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <button class="btn btn-thm advnc_search_form_btn"><span class="flaticon-magnifiying-glass"></span>Search</button>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-newcar" role="tabpanel" aria-labelledby="pills-newcar-tab">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="home1_advance_search_wrapper">
                              <ul class="mb0 text-center">
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_brand">
                                      <h6 class="title">Make</h6>
                                      <select class="selectpicker">
                                        <option>Select Makes</option>
                                        <option>Audi</option>
                                        <option>Bentley</option>
                                        <option>BMW</option>
                                        <option>Ford</option>
                                        <option>Honda</option>
                                        <option>Mercedes</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_models">
                                      <h6 class="title">Models</h6>
                                      <select class="selectpicker">
                                        <option>Select Models</option>
                                        <option>A3 Sportback</option>
                                        <option>A4</option>
                                        <option>A6</option>
                                        <option>Q5</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_prices">
                                      <h6 class="title">Price</h6>
                                      <select class="selectpicker">
                                        <option>All Price</option>
                                        <option>No max Price</option>
                                        <option>$2,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$15,000</option>
                                        <option>$5,000</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <button class="btn btn-thm advnc_search_form_btn"><span class="flaticon-magnifiying-glass"></span>Search</button>
                                  </div>
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
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Car Category -->
  <section class="car-category mobile_space bgc-f9 z-2 pb100">
    <div class="container">
      <div class="row">
        <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
          <div class="category_item">
            <div class="thumb">
              <img src="images/category-item/1.png" alt="1.png">
            </div>
            <div class="details">
              <p class="title"><a href="page-car-single-v1.html">Compact</a></p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="category_item">
            <div class="thumb">
              <img src="images/category-item/2.png" alt="2.png">
            </div>
            <div class="details">
              <p class="title"><a href="page-car-single-v1.html">Sedan</a></p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="category_item">
            <div class="thumb">
              <img src="images/category-item/3.png" alt="3.png">
            </div>
            <div class="details">
              <p class="title"><a href="page-car-single-v1.html">SUV</a></p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="category_item">
            <div class="thumb">
              <img src="images/category-item/4.png" alt="4.png">
            </div>
            <div class="details">
              <p class="title"><a href="page-car-single-v1.html">Convertible</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
          <div class="category_item">
            <div class="thumb">
              <img src="images/category-item/5.png" alt="5.png">
            </div>
            <div class="details">
              <p class="title"><a href="page-car-single-v1.html">Coupe</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Product  -->
  <section class="featured-product">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Featured Listings</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="popular_listing_sliders row">
            <!-- Nav tabs -->
            <div class="nav nav-tabs col-lg-12 justify-content-center" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All Status</button>
              <button class="nav-link" id="nav-shopping-tab" data-bs-toggle="tab" data-bs-target="#nav-shopping" role="tab" aria-controls="nav-shopping" aria-selected="false">New Cars</button>
              <button class="nav-link" id="nav-hotels-tab" data-bs-toggle="tab" data-bs-target="#nav-hotels" role="tab" aria-controls="nav-hotels" aria-selected="false">Used Cars</button>
            </div>
            <!-- Tab panes -->
            <div class="tab-content col-lg-12" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                  <div class="col-sm-6 col-xl-3">
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/1.jpg" alt="1.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
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
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/5.jpg" alt="5.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
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
                  <div class="col-sm-6 col-xl-3">
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/2.jpg" alt="2.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$56</h5>
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
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/6.jpg" alt="6.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$56</h5>
                          <h6 class="title"><a href="page-car-single-v1.html">Land Rover Range Rover HSE Westminster</a></h6>
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
                  <div class="col-sm-6 col-xl-3">
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/3.jpg" alt="3.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$230</h5>
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
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/7.jpg" alt="7.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$230</h5>
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
                  <div class="col-sm-6 col-xl-3">
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag blue">SPECIAL</div>
                        <img src="images/listing/4.jpg" alt="4.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$478</h5>
                          <h6 class="title"><a href="page-car-single-v1.html">Nıssan Qasqai - Sky Pack</a></h6>
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
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/8.jpg" alt="8.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$478</h5>
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
                </div>
              </div>
              <div class="tab-pane fade" id="nav-shopping" role="tabpanel" aria-labelledby="nav-shopping-tab">
                <div class="row">
                  <div class="col-sm-6 col-xl-3">
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/1.jpg" alt="1.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
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
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/5.jpg" alt="5.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
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
                  <div class="col-sm-6 col-xl-3">
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/2.jpg" alt="2.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$56</h5>
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
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/6.jpg" alt="6.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$56</h5>
                          <h6 class="title"><a href="page-car-single-v1.html">Land Rover Range Rover HSE Westminster</a></h6>
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
                  <div class="col-sm-6 col-xl-3">
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/3.jpg" alt="3.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$230</h5>
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
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/7.jpg" alt="7.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$230</h5>
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
                  <div class="col-sm-6 col-xl-3">
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag blue">SPECIAL</div>
                        <img src="images/listing/4.jpg" alt="4.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$478</h5>
                          <h6 class="title"><a href="page-car-single-v1.html">Nıssan Qasqai - Sky Pack</a></h6>
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
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/8.jpg" alt="8.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$478</h5>
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
                </div>
              </div>
              <div class="tab-pane fade" id="nav-hotels" role="tabpanel" aria-labelledby="nav-hotels-tab">
                <div class="row">
                  <div class="col-sm-6 col-xl-3">
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/1.jpg" alt="1.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
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
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/5.jpg" alt="5.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
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
                  <div class="col-sm-6 col-xl-3">
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/2.jpg" alt="2.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$56</h5>
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
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/6.jpg" alt="6.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$56</h5>
                          <h6 class="title"><a href="page-car-single-v1.html">Land Rover Range Rover HSE Westminster</a></h6>
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
                  <div class="col-sm-6 col-xl-3">
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/3.jpg" alt="3.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$230</h5>
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
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/7.jpg" alt="7.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$230</h5>
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
                  <div class="col-sm-6 col-xl-3">
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag blue">SPECIAL</div>
                        <img src="images/listing/4.jpg" alt="4.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$478</h5>
                          <h6 class="title"><a href="page-car-single-v1.html">Nıssan Qasqai - Sky Pack</a></h6>
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
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="images/listing/8.jpg" alt="8.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$478</h5>
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt20">
        <div class="col-lg-12">
          <div class="text-center">
            <a href="page-list-v1.html" class="more_listing">Show All Cars <span class="icon"><span class="fas fa-plus"></span></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Chose us  -->
  <section class="why-chose pt0 pb90">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Why Choose Us?</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
          <div class="why_chose_us">
            <div class="icon float-start"><span class="flaticon-price-tag"></span></div>
            <div class="details">
              <h5 class="title">Best Price</h5>
              <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="why_chose_us">
            <div class="icon float-start style2"><span class="flaticon-car"></span></div>
            <div class="details">
              <h5 class="title">Trusted By Thousands</h5>
              <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="why_chose_us">
            <div class="icon float-start style3"><span class="flaticon-trust"></span></div>
            <div class="details">
              <h5 class="title">Wide Range of Brands</h5>
              <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Delivery Divider -->
  <section class="deliver-divider bg-img1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="posr">
            <div class="home1_divider_video_pop">
              <div class="video_popup_icon">
                <a class="video_popup_btn popup-img popup-youtube" href="https://www.youtube.com/watch?v=R7xbhKIiw4Y">
                  <span class="flaticon-play"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-xl-5">
          <div class="home1_divider_content">
            <h2 class="title">We Make Finding The Right Car Simple</h2>
            <p class="para">At Voiture what matters to us is making your car search and buying experience as simple as possible, so you can find the right car quickly and get on with making it yours.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Popular Listing -->
  <section class="popular-listing pb80 bg-ptrn1 bgc-heading-color">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2 class="text-white">Popular Listings</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="home1_popular_listing">
          <div class="listing_item_4grid_slider dots_none">
            <div class="item">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="images/listing/1.jpg" alt="1.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
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
            <div class="item">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="images/listing/2.jpg" alt="2.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$56</h5>
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
            <div class="item">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="images/listing/3.jpg" alt="3.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$230</h5>
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
            <div class="item">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag blue">SPECIAL</div>
                  <img src="images/listing/4.jpg" alt="4.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$478</h5>
                    <h6 class="title"><a href="page-car-single-v1.html">Nıssan Qasqai - Sky Pack</a></h6>
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
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Funfact -->
  <section class="our-funfact pt50 pb30">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer">27600</div>
              <p class="ff_title">CARS FOR SALE</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer">6500</div>
              <p class="ff_title">DEALER REVIEWS</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer">8230</div>
              <p class="ff_title">VISITORS PER DAY</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer">5250</div>
              <p class="ff_title">VERIFIED DEALERS</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials  -->
  <section class="our-testimonials-home1 pt120 pb120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="testimonial_slider_home1">
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="images/testimonial/1.png" alt="1.png">
                  <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div> 
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="images/testimonial/2.png" alt="2.png">
                  <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="images/testimonial/1.png" alt="1.png">
                  <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div> 
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="images/testimonial/2.png" alt="2.png">
                  <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="images/testimonial/1.png" alt="1.png">
                  <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div> 
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="images/testimonial/2.png" alt="2.png">
                  <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Blog -->
  <section class="our-blog pb90">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Recent Articles</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
          <div class="for_blog">
            <div class="thumb">
              <div class="tag">BLOG</div>
              <img class="img-whp" src="images/blog/1.jpg" alt="1.jpg">
            </div>
            <div class="details">
              <div class="wrapper">
                <div class="bp_meta">
                  <ul>
                    <li class="list-inline-item"><a href="page-blog-single.html"><span class="flaticon-user"></span>Brooklyn Simmons</a></li>
                    <li class="list-inline-item"><a href="page-blog-single.html"><span class="flaticon-chat"></span>12 Comments</a></li>
                    <li class="list-inline-item"><a href="page-blog-single.html"><span class="flaticon-calendar-1"></span>April 25, 2021</a></li>
                  </ul>
                </div>
                <h4 class="title"><a href="page-blog-single.html">2021 BMW 540i M Sport Review: Light on Sport, Heavy on Tech</a></h4>
                <a href="page-blog-single.html" class="more_listing">Read More <span class="icon"><span class="fas fa-plus"></span></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="for_blog">
            <div class="thumb">
              <div class="tag">SUV</div>
              <img class="img-whp" src="images/blog/2.jpg" alt="2.jpg">
            </div>
            <div class="details">
              <div class="wrapper">
                <div class="bp_meta">
                  <ul>
                    <li class="list-inline-item"><a href="page-blog-single.html"><span class="flaticon-user"></span>Brooklyn Simmons</a></li>
                    <li class="list-inline-item"><a href="page-blog-single.html"><span class="flaticon-chat"></span>12 Comments</a></li>
                    <li class="list-inline-item"><a href="page-blog-single.html"><span class="flaticon-calendar-1"></span>April 25, 2021</a></li>
                  </ul>
                </div>
                <h4 class="title"><a href="page-blog-single.html">2022 Volkswagen Taos First Drive: Exactly as Good as It Needs to Be</a></h4>
                <a href="page-blog-single.html" class="more_listing">Read More <span class="icon"><span class="fas fa-plus"></span></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="for_blog">
            <div class="thumb">
              <div class="tag">2021</div>
              <img class="img-whp" src="images/blog/3.jpg" alt="3.jpg">
            </div>
            <div class="details">
              <div class="wrapper">
                <div class="bp_meta">
                  <ul>
                    <li class="list-inline-item"><a href="page-blog-single.html"><span class="flaticon-user"></span>Brooklyn Simmons</a></li>
                    <li class="list-inline-item"><a href="page-blog-single.html"><span class="flaticon-chat"></span>12 Comments</a></li>
                    <li class="list-inline-item"><a href="page-blog-single.html"><span class="flaticon-calendar-1"></span>April 25, 2021</a></li>
                  </ul>
                </div>
                <h4 class="title"><a href="page-blog-single.html">2021 Kia Sorento Hybrid Review: Big Vehicle With Small-Vehicle Fuel Economy</a></h4>
                <a href="page-blog-single.html" class="more_listing">Read More <span class="icon"><span class="fas fa-plus"></span></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Partners -->
  <section class="our-partner pt0 pb100">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Popular Makes</h2>
          </div>
        </div>
      </div>
      <div class="partner_divider">
        <div class="row">
          <div class="col-6 col-xs-6 col-sm-4 col-xl-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <div class="partner_item">
              <img src="images/partners/1.png" alt="1.png">
            </div>
          </div>
          <div class="col-6 col-xs-6 col-sm-4 col-xl-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="partner_item">
              <img src="images/partners/2.png" alt="2.png">
            </div>
          </div>
          <div class="col-6 col-xs-6 col-sm-4 col-xl-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="partner_item">
              <img src="images/partners/3.png" alt="3.png">
            </div>
          </div>
          <div class="col-6 col-xs-6 col-sm-4 col-xl-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="partner_item">
              <img src="images/partners/4.png" alt="4.png">
            </div>
          </div>
          <div class="col-6 col-xs-6 col-sm-4 col-xl-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
            <div class="partner_item">
              <img src="images/partners/5.png" alt="5.png">
            </div>
          </div>
          <div class="col-6 col-xs-6 col-sm-4 col-xl-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
            <div class="partner_item">
              <img src="images/partners/6.png" alt="6.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('layouts/footer');