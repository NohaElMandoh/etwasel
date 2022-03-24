<!doctype html>
<html lang="zxx">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content=" Finance ,Shopping, Retail, Food Delivery, Cost Reductions, Wholesaler, activity tracker, and profits- e-Payment- Financial Solutions ">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @include('front.partials.home.styles')
  
  <script src="https://kit.fontawesome.com/ea9a619c4d.js" crossorigin="anonymous"></script>
 
</head>

<body style="overflow-x: hidden">
  <div class="preloader">
    <div class="loader">
      <!--<div class="shadow"></div>-->
      <!--<div class="box"></div>-->
          <img src="{{asset('frontUI/assets/img/loader.gif')}}">
    </div>
  </div>

  @include('front.partials.home.nav_bar')
 

  @yield('main_section')


  <div class="sectionfixd">
    <div class="overlay">
      <div class="row" style="margin: 0">
        <div class="col-lg-3 col-md-4" >
          <div class="fixedleft  ">
            @include('front.partials.sides.left.left')

          </div>
        </div>
        <!-- ----center---- -->
        <div class="col-lg-9 col-md-8  @if (!Auth::check() )fullwidthauth @endif">
          @yield('content')

        </div>
      
      </div>
    </div>
  </div>


  <section style="opacity: 0" class="blog-area ptb-70 pb-50">
    <div class="container">
      <div class="section-title">
        <h2>The news from our blog</h2>
        <div class="bar"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-blog-post">
            <div class="blog"><a href="#"><img src="{{asset('frontUI/assets/img/5.png')}}" alt="image"></a></div>
            <div class="blog-post-content">
              <ul class="entry-meta">
                <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                <li><i class="far fa-calendar"></i>December 15, 2019</li>
              </ul>
              <h3><a href="#">The security risks of changing package owners</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p><a class="btn btn-primary" href="#">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
          <div class="single-blog-post">
            <div class="blog"><a href="#"><img src="{{asset('frontUI/assets/img/faq.p')}}ng" alt="image"></a></div>
            <div class="blog-post-content">
              <ul class="entry-meta">
                <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                <li><i class="far fa-calendar"></i>December 16, 2019</li>
              </ul>
              <h3><a href="#">Protect your workplace from cyber attacks</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p><a class="btn btn-primary" href="#">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-blog-post">
            <div class="blog"><a href="#"><img src="{{asset('frontUI/assets/img/5.png')}}" alt="image"></a></div>
            <div class="blog-post-content">
              <ul class="entry-meta">
                <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                <li><i class="far fa-calendar"></i>December 16, 2019</li>
              </ul>
              <h3><a href="#">Tips to protecting business and family</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p><a class="btn btn-primary" href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <div class="modal fade popupqutaions" id="exampleModalCenterquotaion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Product Name</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="qutpopupbody">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <!--<div class="imgProduct">-->
                      <!--    <div class="imgtag">-->
                      <!--        <img src="{{asset('frontUI/assets/img/cladreximg/Product/27.png')}}">-->
                      <!--    </div>-->
                      <!--</div>-->
                      
                      <div class="product-detai-imgs">
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-3 col-xs-12">
                                                            <div class="nav flex-column nav-pills caroselproductdetails " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                <a class="nav-link active" id="product-1-tab" data-bs-toggle="pill" href="#product-1" role="tab" aria-controls="product-1" aria-selected="true">
                                                                    <img src="{{asset('frontUI/assets/img/cladreximg/Product/26.png')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                                                </a>
                                                                <a class="nav-link" id="product-2-tab" data-bs-toggle="pill" href="#product-2" role="tab" aria-controls="product-2" aria-selected="false">
                                                                    <img src="{{asset('frontUI/assets/img/cladreximg/Product/27.png')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                                                </a>
                                                                <a class="nav-link" id="product-3-tab" data-bs-toggle="pill" href="#product-3" role="tab" aria-controls="product-3" aria-selected="false">
                                                                    <img src="{{asset('frontUI/assets/img/cladreximg/Product/28.png')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                                                </a>
                                                                <a class="nav-link" id="product-4-tab" data-bs-toggle="pill" href="#product-4" role="tab" aria-controls="product-4" aria-selected="false">
                                                                    <img src="{{asset('frontUI/assets/img/cladreximg/Product/29.png')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 offset-md-1 col-sm-9 col-xs-12">
                                                            <div class="tab-content" id="v-pills-tabContent">
                                                                <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                                                    <div>
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/26.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="product-2" role="tabpanel" aria-labelledby="product-2-tab">
                                                                    <div>
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/27.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="product-3" role="tabpanel" aria-labelledby="product-3-tab">
                                                                    <div>
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/28.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="product-4" role="tabpanel" aria-labelledby="product-4-tab">
                                                                    <div>
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/29.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                      
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="qutpopform">
                        <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="formgropop">
                            <span>Name</span>
                            <input type="text" placeholder="Write Your Name" class="forminpppop" required>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="formgropop">
                            <span>Email</span>
                            <input type="email" placeholder="Write Your email" class="forminpppop" required>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="formgropop">
                            <span>Phone</span>
                            <input type="text" placeholder="Write Your Phone" class="forminpppop" required>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="formgropop">
                            <span>Quantity</span>
                            <input type="text" value="1" min="1" placeholder="Number of Your Quantity" class="forminpppop" required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              

          </div>
        </div>
        <div class="modal-footer">
          <!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
          <button type="submit" class="btn_savess">submit</button>
        </div>
      </div>
    </div>
  </div>




  <div class="go-top"><i class="fas fa-arrow-up"></i></div>

  @include('front.partials.home.scripts')
  @yield('scripts')
</body>

<!-- Mirrored from templates.envytheme.com/luvion/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jun 2021 18:41:32 GMT -->

</html>