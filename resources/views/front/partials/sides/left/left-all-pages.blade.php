 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="leftsidecont ">
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
                                    
                                    <li style='display:none'>
                                        <a  class="has-arrow" >{{__('front.PMC')}}</a>
                                        <ul class="sub-menu SubMENUTHERD" aria-expanded="true">
                                            @if(Auth::user()->pmcs)
                                            @foreach(Auth::user()->pmcs as $pmc)
                                               <li><a href="ds" >{{$pmc->cat}}</a></li>
                                               @endforeach
                                            @endif
                                            <!--<li><a href="javascript: void(0);" key="t-level-2-1">PMC Item</a></li>-->
                                            <!--<li><a href="javascript: void(0);" key="t-level-2-2">PMC Item</a></li>-->
                                        </ul>
                                    </li>
                                    <li style='display:none'>
                                  <a href="{{route('home')}}"   >
                                   
                                    {{__('front.Home')}}
                                  </a>
                                </li>
                                  <li>
                                  <a href="{{route('vendor_profile')}}"   >
                                   
                                     {{__('front.Vendor Personal Info')}}
                                  </a>
                                </li>
                                 <li >
                                  <a href="{{route('add_pmc')}}"   >
                                   
                                    {{__('front.Add PMC')}}
                                  </a>
                                </li>
                                <li>
                                  <a href="{{route('vendor_individual_product')}}"   >
                                   
                                    {{__('front.Vendor Individual')}}
                                  </a>
                                </li>
                                
                                  <li>
                                  <a href="{{route('myProducts')}}"   >
                                   
                                   {{__('front.myProducts')}}
                                  </a>
                                </li>
                                 <li>
                                  <a href="{{route('vendor_website',['vendor_id'=>Auth::user()->id ?? null,'vendor_name'=>Auth::user()->name ?? ''])}}"  >
                                   
                                   {{__('front.Company Products')}}
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

                                  
                                 
                                
                                
                                    <!--<li><a href="javascript: void(0);" key="t-level-1-1">Vendor Information</a></li>-->
                                    <!--<li><a href="javascript: void(0);" key="t-level-1-1">Vendor Information</a></li>-->
                                    <!--<li><a href="javascript: void(0);" key="t-level-1-1">Vendor Information</a></li>-->
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
              </div>
    
<li class="accordion-item" style="display:none">
                        <a class="accordion-title active " href="javascript:void(0)">
                          <i class="fas fa-plus iconplusss"></i>
                          <span class="namecat"><span class="bx bx-home"></span> {{__('front.All Pages')}}</span>
                        </a>
                        <div class="accordion-content show ">
                          <div class="acordeddeatails">
                            <div class="linkcateg">
                              <ul>
                                <li>
                                  <a href="{{route('home')}}" class="lincated">
                                    <i class="bx bx-home "></i>
                                    {{__('front.Home')}}
                                  </a>
                                </li>

                                <li>
                                  <a href="{{route('vendor_profile')}}" class="lincated">
                                    <i class="fas fa-store "></i>
                                   {{__('front.Vendor Personal Info')}}
                                  </a>
                                </li>
                                <li>
                                  <a href="{{route('vendor_individual_product')}}" class="lincated">
                                    <i class="fas fa-store "></i>
                                    {{__('front.Vendor Individual')}}
                                  </a>
                                </li>
                                   <li>
                                  <a href="{{route('myProducts')}}" class="lincated">
                                    <i class="fas fa-store "></i>
                                    {{__('front.myProducts')}}
                                  </a>
                                </li>
                                <li>
                                  <a href="{{route('vendor_rfq')}}" class="lincated">
                                    <i class="fas fa-store "></i>
                                     {{__('front.RFQ')}}
                                  </a>
                                </li>
                                 <li>
                                  <a href="{{route('vendor_contacts')}}" class="lincated">
                                    <i class="fas fa-store "></i>
                                     {{__('front.Contacts')}}
                                  </a>
                                </li>
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-store "></i>-->
                                <!--    Vendor New Product Details-->
                                <!--  </a>-->
                                <!--</li>-->

                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-store "></i>-->
                                <!--    Add Product-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-store "></i>-->
                                <!--    category-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-store "></i>-->
                                <!--    Edit Product-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-store "></i>-->
                                <!--    My Product-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-store "></i>-->
                                <!--    Product Details-->
                                <!--  </a>-->
                                <!--</li>-->
                                <li>
                                  <a href="{{route('vendor_website',['vendor_id'=>Auth::user()->id ?? null,'vendor_name'=>Auth::user()->name ?? ''])}}" class="lincated">
                                    <i class="fas fa-store "></i>
                                    {{__('front.Company Products')}}
                                  </a>
                                </li>
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-store "></i>-->
                                <!--    profile-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-store "></i>-->
                                <!--    Qutation page-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-store "></i>-->
                                <!--    Vendor-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-store "></i>-->
                                <!--    Vendor Profile-->
                                <!--  </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--  <a href="#" class="lincated">-->
                                <!--    <i class="fas fa-store "></i>-->
                                <!--    Vendor Product (search)-->
                                <!--  </a>-->
                                <!--</li>-->


                              </ul>
                            </div>

                          </div>

                        </div>
                      </li>


<li class="accordion-item" style="display:none">
                        <a class="accordion-title  " href="javascript:void(0)">
                          <i class="fas fa-plus iconplusss"></i>
                          <span class="namecat"><span class="bx bx-store"></span> PMC</span>
                        </a>
                        <div class="accordion-content  ">
                          <div class="acordeddeatails">
                            <div class="linkcateg">
                              <ul>
                                <li>
                                  <a href="#" class="lincated">
                                    <i class="bx bx-home "></i>
                                    PMC Item
                                  </a>
                                </li>
                                <li>
                                  <a href="#" class="lincated">
                                    <i class="bx bx-home "></i>
                                    PMC Item
                                  </a>
                                </li>
                                <li>
                                  <a href="#" class="lincated">
                                    <i class="bx bx-home "></i>
                                    PMC Item
                                  </a>
                                </li>
                                <li>
                                  <a href="#" class="lincated">
                                    <i class="bx bx-home "></i>
                                    PMC Item
                                  </a>
                                </li>


                              </ul>
                            </div>

                          </div>

                        </div>
                      </li>



<li class="accordion-item" style="display:none">
                        <a class="accordion-title  " href="javascript:void(0)">
                          <i class="fas fa-plus iconplusss"></i>
                          <span class="namecat"><span class="bx bx-store"></span> مواكلين السيارات</span>
                        </a>
                        <div class="accordion-content  ">
                          <div class="acordeddeatails">
                            <div class="linkcateg">
                              <ul>
                                <li>
                                  <a href="#" class="lincated">
                                    <i class="bx bx-home "></i>
                                    PMC Item
                                  </a>
                                </li>
                                <li>
                                  <a href="#" class="lincated">
                                    <i class="bx bx-home "></i>
                                    PMC Item
                                  </a>
                                </li>
                                <li>
                                  <a href="#" class="lincated">
                                    <i class="bx bx-home "></i>
                                    PMC Item
                                  </a>
                                </li>
                                <li>
                                  <a href="#" class="lincated">
                                    <i class="bx bx-home "></i>
                                    PMC Item
                                  </a>
                                </li>


                              </ul>
                            </div>

                          </div>

                        </div>
                      </li>


<li class="accordion-item" style="display:none">
                        <a class="accordion-title  " href="javascript:void(0)">
                          <i class="fas fa-plus iconplusss"></i>
                          <span class="namecat"><span class="bx bx-store"></span> مواكلين اورق</span>
                        </a>
                        <div class="accordion-content  ">
                          <div class="acordeddeatails">
                            <div class="linkcateg">
                              <ul>
                                <li>
                                  <a href="#" class="lincated">
                                    <i class="bx bx-home "></i>
                                    PMC Item
                                  </a>
                                </li>
                                <li>
                                  <a href="#" class="lincated">
                                    <i class="bx bx-home "></i>
                                    PMC Item
                                  </a>
                                </li>
                                <li>
                                  <a href="#" class="lincated">
                                    <i class="bx bx-home "></i>
                                    PMC Item
                                  </a>
                                </li>
                                <li>
                                  <a href="#" class="lincated">
                                    <i class="bx bx-home "></i>
                                    PMC Item
                                  </a>
                                </li>


                              </ul>
                            </div>

                          </div>

                        </div>
                      </li>


