
<header  id="-topbar" class="navbar-area" >
    <div class="navbar-header">
        <div class="d-flex searsrchinputt">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{route('home')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img class="EN_ETASELIMG" src="{{asset('frontUI/assets/img/cladreximg/2021-LogoMaker-Site-Logo.png')}}" alt="" height="65">
                        <img class="AR_ETASELIMG" src="{{asset('frontUI/assets/img/cladreximg/ArabicLogoEtwasel.png')}}">
                    </span>
                    <span class="logo-lg">
                        <img class="EN_ETASELIMG" src="{{asset('frontUI/assets/img/cladreximg/2021-LogoMaker-Site-Logo.png')}}" alt="" height="65">
                        <img class="AR_ETASELIMG" src="{{asset('frontUI/assets/img/cladreximg/ArabicLogoEtwasel.png')}}">
                    </span>
                </a>

                <!--<a href="{{route('home')}}" class="logo logo-light">-->
                <!--    <span class="logo-sm">-->
                <!--        <img src="{{asset('frontUI/assets/img/cladreximg/2021-LogoMaker-Site-Logo.png')}}" alt="" height="65">-->
                <!--    </span>-->
                <!--    <span class="logo-lg">-->
                <!--        <img src="{{asset('frontUI/assets/img/cladreximg/2021-LogoMaker-Site-Logo.png')}}" alt="" height="65">-->
                <!--    </span>-->
                <!--</a>-->
            </div>

            

            <!-- App Search-->
               <form method="get" action="{{route('search')}}" enctype="multipart/form-data"  class="app-search d-none d-lg-block">
                @csrf
            <!--<form class="app-search d-none d-lg-block">-->
                <div class="position-relative">
                    <input type="text"  id='keyword' name='keyword'  class="form-control" placeholder="{{__('front.Search')}}">
                          <button type="submit" class="buttiknsearch">  
                                <span class="bx bx-search-alt"></span>
                          </button>
                </div>
            </form>

            
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="{{__('front.Search')}}" aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown droplang d-inline-block landroppp">
                <button type="button" class="btn header-item waves-effect"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      @if ( Config::get('app.locale') == 'en')
                     
                    <img id="header-lang-img-us" src="{{Voyager::image($website->us_flag)}}" alt="Header Language" height="20">
                     @elseif ( Config::get('app.locale') == 'ar' )
                
                     <img id="header-lang-img-eg" src="{{Voyager::image($website->eg_flag)}}" alt="Header Language" height="20">
                     @endif
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                     <!-- item-->
                    <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="dropdown-item notify-item language" data-lang="en">
                        <img src="{{asset('frontUI/assets/img/cladreximg/flags/us.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">{{__('front.English')}}</span>
                    </a>
                      <!-- item-->
                    <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}" class="dropdown-item notify-item language" data-lang="eg">
                        <img src="{{asset('frontUI/assets/img/cladreximg/flags/egypt.png')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">{{__('front.Arabic')}}</span>
                    </a>
                    <!-- item-->
                    <!--<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">-->
                    <!--    <img src="{{asset('frontUI/assets/img/cladreximg/flags/spain.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>-->
                    <!--</a>-->

                    <!-- item-->
                    <!--<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">-->
                    <!--    <img src="{{asset('frontUI/assets/img/cladreximg/flags/germany.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>-->
                    <!--</a>-->

                    <!-- item-->
                    <!--<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">-->
                    <!--    <img src="{{asset('frontUI/assets/img/cladreximg/flags/italy.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>-->
                    <!--</a>-->

                    <!-- item-->
                    <!--<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">-->
                    <!--    <img src="{{asset('frontUI/assets/img/cladreximg/flags/russia.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>-->
                    <!--</a>-->
                </div>
            </div>
            @if (Auth::check() )

          <div class="dropdown dropdawnnott d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bxl-messenger bx-tada"></i>
                                <span class="badge bg-danger rounded-pill">{{Auth::user()->contactsUs->count() ?? ''}}</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> {{__('front.Contacts')}} </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('vendor_contacts')}}" class="small" key="t-view-all"> {{__('front.View All')}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar class="simbebaree" style="max-height: 230px;">
                                    @if(Auth::user()->contactsUs )
                                     @foreach(Auth::user()->contactsUs as $k=>$content)
                                    <a href="{{route('vendor_contacts')}}" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="{{asset('frontUI/assets/img/cladreximg/user.png')}}" style='display:none'
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">{{$content->name ??$content->email }}</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-simplified">{{$content->message}}</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">{{$content->created_at->diffForHumans() ?? '' }}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach
                                    @else 
                                    no messages
                                    @endif
                                    <!--<a href="#" class="text-reset notification-item">-->
                                    <!--    <div class="media">-->
                                    <!--        <img src="assets/img/cladreximg/own1.jpg"-->
                                    <!--            class="me-3 rounded-circle avatar-xs" alt="user-pic">-->
                                    <!--        <div class="media-body">-->
                                    <!--            <h6 class="mt-0 mb-1">James Lemire</h6>-->
                                    <!--            <div class="font-size-12 text-muted">-->
                                    <!--                <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>-->
                                    <!--                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</a>-->
                                    <!--<a href="#" class="text-reset notification-item">-->
                                    <!--    <div class="media">-->
                                    <!--        <img src="assets/img/cladreximg/own1.jpg"-->
                                    <!--            class="me-3 rounded-circle avatar-xs" alt="user-pic">-->
                                    <!--        <div class="media-body">-->
                                    <!--            <h6 class="mt-0 mb-1">James Lemire</h6>-->
                                    <!--            <div class="font-size-12 text-muted">-->
                                    <!--                <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>-->
                                    <!--                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</a>-->
                                    <!--<a href="#" class="text-reset notification-item">-->
                                    <!--    <div class="media">-->
                                    <!--        <img src="assets/img/cladreximg/own1.jpg"-->
                                    <!--            class="me-3 rounded-circle avatar-xs" alt="user-pic">-->
                                    <!--        <div class="media-body">-->
                                    <!--            <h6 class="mt-0 mb-1">James Lemire</h6>-->
                                    <!--            <div class="font-size-12 text-muted">-->
                                    <!--                <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>-->
                                    <!--                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</a>-->
                                    
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="{{route('vendor_contacts')}}">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">{{__('front.View More')}}..</span> 
                                    </a>
                                </div>
                            </div>
                        </div>
            

            <div class="dropdown dropdawnnott d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">{{Auth::user()->notifications->count() ?? ''}}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0" key="t-notifications"> {{__('front.Notifications')}} </h6>
                            </div>
                            <div class="col-auto">
                                <a href="{{route('notifications')}}" class="small" key="t-view-all">{{__('front.View All')}}</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar class="simbebaree" style="max-height: 230px;">
                       @if(Auth::user()->notifications )
                       @foreach(Auth::user()->notifications as $notification)
                           <a href="#" class="text-reset notification-item">
                            <div class="media">
                                <img src="{{asset('frontUI/assets/img/cladreximg/own1.jpg')}}"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                              <a href="{{route('notifications')}}">      <h6 class="mt-0 mb-1">{{$notification->title ?? '' }}</h6></a>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-simplified">{{$notification->message ?? '' }}</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">{{$notification->created_at->diffForHumans() ?? '' }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                       @endif
                        <!--<a href="#" class="text-reset notification-item">-->
                        <!--    <div class="media">-->
                        <!--        <img src="{{asset('frontUI/assets/img/cladreximg/own1.jpg')}}"-->
                        <!--            class="me-3 rounded-circle avatar-xs" alt="user-pic">-->
                        <!--        <div class="media-body">-->
                        <!--            <h6 class="mt-0 mb-1">James Lemire</h6>-->
                        <!--            <div class="font-size-12 text-muted">-->
                        <!--                <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>-->
                        <!--                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</a>-->
                        <!--<a href="#" class="text-reset notification-item">-->
                        <!--    <div class="media">-->
                        <!--        <img src="{{asset('frontUI/assets/img/cladreximg/own1.jpg')}}"-->
                        <!--            class="me-3 rounded-circle avatar-xs" alt="user-pic">-->
                        <!--        <div class="media-body">-->
                        <!--            <h6 class="mt-0 mb-1">James Lemire</h6>-->
                        <!--            <div class="font-size-12 text-muted">-->
                        <!--                <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>-->
                        <!--                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</a>-->
                        <!--<a href="#" class="text-reset notification-item">-->
                        <!--    <div class="media">-->
                        <!--        <img src="{{asset('frontUI/assets/img/cladreximg/own1.jpg')}}"-->
                        <!--            class="me-3 rounded-circle avatar-xs" alt="user-pic">-->
                        <!--        <div class="media-body">-->
                        <!--            <h6 class="mt-0 mb-1">James Lemire</h6>-->
                        <!--            <div class="font-size-12 text-muted">-->
                        <!--                <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>-->
                        <!--                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</a>-->
                        <!--<a href="#" class="text-reset notification-item">-->
                        <!--    <div class="media">-->
                        <!--        <img src="{{asset('frontUI/assets/img/cladreximg/own1.jpg')}}"-->
                        <!--            class="me-3 rounded-circle avatar-xs" alt="user-pic">-->
                        <!--        <div class="media-body">-->
                        <!--            <h6 class="mt-0 mb-1">James Lemire</h6>-->
                        <!--            <div class="font-size-12 text-muted">-->
                        <!--                <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>-->
                        <!--                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</a>-->
                        
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="{{route('notifications')}}">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">{{__('front.View More')}}..</span> 
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown dropdownUser d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Auth::user()->details->logo ?? '' !=null)
                    <img class="rounded-circle header-profile-user" src="{{Voyager::image(Auth::user()->details->logo ?? Auth::user()->avater)}}"
                        alt="Header Avatar">
                        @else
                         <img class="rounded-circle header-profile-user" src="{{Voyager::image('users/profile.png')}}"
                        alt="Header Avatar">
                        @endif
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{Auth::user()->full_name}}&nbsp; {{Auth::user()->f_name}}&nbsp; {{Auth::user()->s_name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">{{Auth::user()->details->campany_category->name ?? ''}} </span></a>
                      <a class="dropdown-item"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">{{Auth::user()->details->package->name ?? 'pls,,contact owner to select your package'}} </span></a>
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('vendor_info')}}"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">{{__('front.Settings')}}</span></a>
                    <!--<a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>-->
                    <!--<a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">{{__('front.Settings')}}</span></a>-->
                    <!--<a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>-->
                    <div class="dropdown-divider"></div>
                    
                   
                <form method="post" action="{{ route('logout') }}" enctype="multipart/form-data">
                 @csrf
                    <button class="dropdown-item text-danger" ><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">{{__('front.Logout')}}</span></button>
                    </form>
                   
                 
                </div>
            </div>
          @else 
          
           <div class="others-options linkatlogregister">
                            <ul>
                                <li>
                                    <a href="{{ route('register') }}" class="login-btn"> {{__('front.Register')}}</a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}" class="login-btn loginStyle"><i class="bx bx-log-in-circle"></i> {{__('front.Login')}}</a>
                                </li>
                            </ul>
                        </div>
                        
                        
       
         @endif

<!--
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div>
-->

        </div>
    </div>
</header>

