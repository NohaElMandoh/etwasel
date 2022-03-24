<div class="row">
    
    <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
    <!--            <div class="leftsidecont">-->
                                                                 <!--- Sidemenu -->
    <!--                <div id="sidebar-menu">-->
                        <!-- Left Menu Start -->
    <!--                    <ul class="metismenu list-unstyled" id="side-menu">-->


    <!--                        <li class="MainLi mm-active">-->
    <!--                            <a href="javascript: void(0);" class="has-arrow waves-effect mainLINKAAA">-->
    <!--                                <i class="bx bx-share"></i>-->
    <!--                                <span key="t-multi-level">All Page</span>-->
    <!--                            </a>-->
    <!--                            <ul class="sub-menu SECOCNDSUB" aria-expanded="true">-->
                                    
    <!--                                <li>-->
    <!--                                    <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">PMC</a>-->
    <!--                                    <ul class="sub-menu SubMENUTHERD" aria-expanded="true">-->
    <!--                                        <li><a href="javascript: void(0);" key="t-level-2-1">PMC Item</a></li>-->
    <!--                                        <li><a href="javascript: void(0);" key="t-level-2-2">PMC Item</a></li>-->
    <!--                                    </ul>-->
    <!--                                </li>-->
    <!--                                <li><a href="javascript: void(0);" key="t-level-1-1">Vendor Information</a></li>-->
    <!--                                <li><a href="javascript: void(0);" key="t-level-1-1">Vendor Information</a></li>-->
    <!--                                <li><a href="javascript: void(0);" key="t-level-1-1">Vendor Information</a></li>-->
    <!--                            </ul>-->
    <!--                        </li>-->

    <!--                    </ul>-->
    <!--                </div>-->
                    <!-- Sidebar -->
    <!--            </div>-->
    <!--          </div>-->
    
    
    
    
    
    
    
    
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="leftsidecont">
                  <div class="faq-accordion">
                    <ul class="accordion">
                    @if (Auth::check() )
                    @if(Auth::user()->type == 'vendor')
                    @include('front.partials.sides.left.left-all-pages')
                    @elseif(Auth::user()->type == 'user')
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="leftsidecont">
                                                                 <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            
                            <li class="MainLi mm-active">
                                <a  class="has-arrow waves-effect mainLINKAAA">
                                    <i class="bx bx-home"></i>
                                    <span >{{__('front.All Pages')}}</span>
                                </a>
                                <ul class="sub-menu SECOCNDSUB" aria-expanded="true">
                                    
 
                                    <li>
                                      <a href="{{route('home')}}"   >
                                       
                                        {{__('front.Home')}}
                                      </a>
                                    </li>
                                    <li>
                              <a href="{{route('vendor_contacts')}}" >
                           
                                 {{__('front.Contacts')}}
                              </a>
                            </li>
                            <li>
                                <a href="{{route('notifications')}}" >
                            
                                 {{__('front.Notifications')}}
                                </a>
                            </li>
                                        
                            <li>
                            <a href="{{route('vendor_rfq')}}"   >
                               
                              {{__('front.RFQ')}}
                                </a>
                            </li>
                               <li>
                                  <a href="{{route('user_product')}}"   >
                                   
                                  {{__('front.wishlist')}}
                                  </a>
                                </li>
                                </ul>
                            </li>

                            
                            

                            
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
              </div>
              @endif
                 @endif
                    </ul>
                  </div>
                </div>
              </div>

              <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
              <!--  <div class="addside">-->
              <!--    <div class="addcontent">-->
              <!--      <p>Adds</p>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: none">
                <div class="leftsidecont">
                  <div class="faq-accordion">
                    <ul class="accordion">

              

                      <li class="accordion-item">
                        <a class="accordion-title active" href="javascript:void(0)">
                          <i class="fas fa-plus iconplusss"></i>
                          <span class="namecat"><span class="bx bx-store"></span> {{__('front.Categories')}}</span>
                        </a>
                        <div class="accordion-content show">
                          <div class="acordeddeatails">
                            <div class="linkcateg">
                              <ul>
                                  @if($categories)
                                  @foreach($categories as $category)
                                <li>
                                  <a href="#" class="lincated">
                                    <i class="icofont icofont-woman-bird mr-2"></i>
                                    {{$category->name}} 
                                  </a>
                                </li>
                                @endforeach
                                @endif
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="icofont icofont-mango mr-2"></i>-->
                                <!--    Agriculture-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="icofont icofont-animal-cat-alt-4 mr-2"></i>-->
                                <!--    Animal & Pets-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-icons mr-2"></i>-->
                                <!--    Arts-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="icofont icofont-car-alt-4 mr-2"></i>-->
                                <!--    Automobiles-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-icons mr-2"></i>-->
                                <!--    Bags-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="icofont icofont-butterfly-alt mr-2"></i>-->
                                <!--    Beauty-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-icons mr-2"></i>-->
                                <!--    Books-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="icofont icofont-pills mr-2"></i>-->
                                <!--    Chemicals-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-icons mr-2"></i>-->
                                <!--    Children-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="icofont icofont-baby-cloth mr-2"></i>-->
                                <!--    Clothes-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="icofont icofont-computer mr-2"></i>-->
                                <!--    Computer-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="icofont icofont-playstation mr-2"></i>-->
                                <!--    Electronic-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="icofont icofont-energy-oil mr-2"></i>-->
                                <!--    Energy-->
                                <!--  </a>-->
                                <!--</li>-->


                              </ul>
                            </div>

                          </div>

                        </div>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3" style="display: none">
                <div class="addside NewPreview">
                  <div class="banner-image banner-2">
                      <a href="#">
                        <img src="{{asset('frontUI/assets/img/cladreximg/prev3.png')}}" alt="banner">
                      </a>
                    
                  </div>
                </div>
              </div>
            </div>
