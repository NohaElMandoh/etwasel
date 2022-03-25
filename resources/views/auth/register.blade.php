<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content=" Finance ,Shopping, Retail, Food Delivery, Cost Reductions, Wholesaler, activity tracker, and profits- e-Payment- Financial Solutions ">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/bootstrapnew.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/app.min.css') }}">

    <link href="{{ asset('frontUI/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="{{ asset('frontUI/assets/Libs/select2/css/select2.min.css') }}">


    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/magnific-popup.min.css') }}">
    <!--<link rel="stylesheet" href="{{ asset('frontUI/assets/css/nice-select.css') }}">-->
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/revolution-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/style.css') }}">
    @if (Config::get('app.locale') == 'en')
        <link rel="stylesheet" href="{{ asset('frontUI/assets/css/style.css') }}">
    @elseif (Config::get('app.locale') == 'ar')
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontUI/assets/css/style-ar.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('frontUI/assets/css/responsive.css') }}">
    <title>Cladex</title>
    <link rel="icon" type="image/png" href="{{ asset('frontUI/assets/img/NewImg/3anota%20alone.png') }}">
    <script src="https://kit.fontawesome.com/ea9a619c4d.js" crossorigin="anonymous"></script>

    <style>
        .navbar-area {
            bottom: auto;
            top: 0;
            background: linear-gradient(0deg, rgba(248, 54, 0, 1) 0%, rgb(249 77 30) 100%);
            background: linear-gradient(0deg, rgb(39 102 186) 0%, rgb(119 174 235) 100%);

        }

        .sectionfixd {
            opacity: 1;
            position: relative;
            top: 0;
            overflow: auto;
            overflow-x: hidden;
            margin-top: 65px;

        }

        .bodyscroll::-webkit-scrollbar {
            width: 6px;
            background: #ffffff;
        }

        ::-webkit-scrollbar {
            width: 6px;
            background: #fff;
        }

        .bodyscroll::-webkit-scrollbar-thumb {
            width: 6px;
            border-radius: 0;
            background: #417dc9;
        }

        ::-webkit-scrollbar-thumb {
            width: 6px;
            border-radius: 0;
            background: #417dc9;
        }

        .luvion-nav .navbar .navbar-nav .nav-item .search {
            display: block;
            height: 40px;
            line-height: 40px;
            background: #fff;
            border-radius: 25px;
            overflow: hidden;
            width: max-content;
            margin-top: 5px;
        }

        .luvion-nav .navbar .navbar-nav .nav-item .search .btn_search {
            height: 40px;
            width: 40px;
            float: right;
            background: #fff;
            border: 1px solid #fff;
            color: #000;
            margin: 0;
            font-size: 20px;
            text-align: center;
            outline: 0;
            transition: all .4s ease-in-out;
        }

        .luvion-nav .navbar .navbar-nav .nav-item .search .btn_search:hover {
            background: #ff9800;
            border: 1px solid #ff9800;
            color: #fff;
        }

        .luvion-nav .navbar .navbar-nav .nav-item .search input {
            height: 40px;
            line-height: 440px;
            padding: 0 10px;
            border: 1px solid #fff;
            outline: 0;
            font-size: 16px;
            color: #000;
            text-transform: capitalize;
            font-weight: 400;
        }

        .luvion-nav .navbar .navbar-nav .nav-item {
            position: relative;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 0;
            padding-right: 0;

        }

        .luvion-nav .navbar .navbar-nav .nav-item:hover .dropdown-menu {
            padding: 15px;
            border-radius: 25px;
            box-shadow: 0 0 10px #aaa;
        }

        .sectionfixd .fixedright {
            right: 0;
        }

    </style>
</head>

<body style="overflow-x: hidden">
    <div class="preloader">
        <div class="loader">
            <!--<div class="shadow"></div>-->
            <!--<div class="box"></div>-->
            <img src="{{ asset('frontUI/assets/img/loader.gif') }}">
        </div>
    </div>


    <div class="newRegister">
        <div class="container">

            <div class="Registercint">
                <div class="headernav">
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="Language">
                                <div class="dropdown show">
                                    @if (Config::get('app.locale') == 'en')
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            {{ __('front.English') }} <i class="fas fa-chevron-down"></i>
                                        </a>
                                    @elseif (Config::get('app.locale') == 'ar')
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            {{ __('front.Arabic') }} <i class="fas fa-chevron-down"></i>
                                        </a>
                                    @endif
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item"
                                            href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">{{ __('front.Arabic') }}</a>
                                        <!--<a class="dropdown-item" href="#">Português</a>-->
                                        <a class="dropdown-item"
                                            href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">{{ __('front.English') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="imagelogo">
                                <img src="{{ asset('frontUI/assets/img/cladreximg/2021-LogoMaker-Site-Logo.png') }}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="donthane">
                                <div class="fr title-tip">
                                    <h2>{{ __('front.Have an account?') }} <a
                                            href="{{ route('login') }}">{{ __('front.Sign in now') }}</a>!</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="registerForm">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="leftCOnt">

                                <h3 class="TitleRegis">{{ __('front.Create Account') }}</h3>
                                <div class="card-body">

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span
                                                    class="d-none d-sm-block">{{ __('front.Register as User') }}</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span
                                                    class="d-none d-sm-block">{{ __('front.Register as Vendor') }}</span>
                                            </a>
                                        </li>

                                    </ul>
                                    {{-- start  alert errors and sussess --}}
                                    @if ($errors->any())
                                        <div class="contact-form h-75">
                                            <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                    <p style="padding: 7px">{{ $error }}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    {{-- end alert errors and sussess --}}

                                    <!-- Tab panes -->
                                    <div class="tab-content p-3 text-muted">
                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                            <div class="card ">
                                                {{-- view user Register --}}
                                                @include('auth.userRegister')

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile1" role="tabpanel">
                                            <div class="row justify-content-center">
                                                <div
                                                    class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center p-0">
                                                    <div class="card">
                                                        {{-- view vendor Register --}}
                                                        @include('auth.vendorRegister')

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>


























                                <div class="container-fluid">

                                </div>



                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 othercol" style="display:none">
                            <div class="rigjtcont">
                                <div class="why-register">
                                    <h2 class="why">{{ __('front.Why register with us?') }}</h2>
                                    <ul>
                                        <li>
                                            <i class="far fa-clock"></i>
                                            <span class="why-text">
                                                {{ __('front.Faster response to your inquiries') }}
                                            </span>
                                        </li>
                                        <li>

                                            <i class="fab fa-500px"></i>


                                            <span class="why-text">
                                                {{ __('front.Multiple quotes per each request') }}
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-users"></i>
                                            <span class="why-text">
                                                {{ __('front.Sourcing assistant to help you source easier') }}
                                            </span>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="copyRight">
                    <p>{{ __('front.Copyright') }}</p>
                </div>
            </div>



        </div>
    </div>















    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('frontUI/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontUI/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontUI/assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('frontUI/assets/Libs/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('frontUI/assets/Libs/select2/form-advanced.init.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontUI/assets/js/jquery.meanmenu.js') }}"></script>
    <!--<script src="{{ asset('frontUI/assets/js/jquery.nice-select.min.js') }}"></script>-->
    <script src="{{ asset('frontUI/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontUI/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontUI/assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontUI/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('frontUI/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontUI/assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('frontUI/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontUI/assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('frontUI/assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('frontUI/assets/js/main.js') }}"></script>

    <script src="{{ asset('frontUI/wizard.js') }}"></script>
    {{-- <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function() {
                return false;
            })

        });
    </script> --}}






    <script type="text/javascript" src="{{ asset('frontUI/assets/js/jquery-captcha.js') }}"></script>
    {{-- <script>
        // step-1
        const captcha = new Captcha($('#canvas'), {
            length: 4
        });
        // api
        //captcha.refresh();
        //captcha.getCode();
        //captcha.valid("");

        $('#valid').on('click', function() {
            const ans = captcha.valid($('input[name="code"]').val());

            captcha.refresh();
        })
    </script>
    <script>
        try {
            fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
                method: 'HEAD',
                mode: 'no-cors'
            })).then(function(response) {
                return true;
            }).catch(function(e) {
                var carbonScript = document.createElement("script");
                carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
                carbonScript.id = "_carbonads_js";
                document.getElementById("carbon-block").appendChild(carbonScript);
            });
        } catch (error) {
            console.log(error);
        }
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script type="text/javascript">
        $('#user_register').on('click', function(event) {
            event.preventDefault();
            let email = $('#email').val();
            let type = $('#type_user').val();
            let gender = $('#gender').val();
            let full_name = $('#full_name').val();
            let name = $('#full_name').val();

            let password = $('#password').val();
            let password_confirmation = $('#password_confirmation').val();


            $.ajax({
                url: "{{route('userRegister')}}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    name:name,
                    email: email,
                    type: type,
                    gender: gender,
                    full_name: full_name,
                    password: password,
                    password_confirmation: password_confirmation

                },
                success: function(response) {
                    // $(".alert-danger").css("display", "none");
                    // $(".alert-success-message").css("display", "block");
                    // $(".alert-success-message").html('<P style="text-align:center">Thank you.').hide()
                    //     .fadeIn(1500, function() {
                    //         $('.alert-success-message');
                    //     }).fadeOut(1500, function() {
                    //         $('.alert-success-message');
                    //     }).reset();
                        location.reload(true);
                   
                },
                error: function(response) {
                    $(".alert-danger").css("display", "block");
                    $(".alert-success-message").css("display", "none");
                },

            });
            document.getElementById("contactForm").reset();
        });
    </script>
    <script type="text/javascript">
        $('#vendor_register').on('click', function(event) {
            event.preventDefault();
            
             var form = new FormData();
             
        // var TotalImages = $('#photo')[0].files.length;
        var images = $('#photo')[0];

        // for (var i = 0; i < TotalImages; i++) {
        //     form.append('photo[]', images.files[i]);
        // } 
          let str='';
        form.append( 'photo', images.files[0] );
        let full_name = $('#title').val()+' '+$('#vendor_full_name').val();
        form.append('email', $('#vendor_email').val());
        form.append('type', $('#type_vendor').val());
        form.append('country', $('#country').val());
        form.append('full_name',full_name);
        form.append('name', $('#vendor_full_name').val());
           form.append('shop_name', $('#shop_name').val());  
           form.append('password', $('#vendor_password').val());
           form.append('password_confirmation', $('#vendor_password_confirmation').val());
           form.append('phone', $('#phone').val());
            form.append('city_id', $('#city_id').val());
           
            // let email = $('#vendor_email').val();
            // let type = $('#type_vendor').val();
            // let country = $('#country').val();
            // let full_name = $('#title').val()+' '+$('#vendor_full_name').val();
            // let name = $('#vendor_full_name').val();
            // let shop_name = $('#shop_name').val();
            // let password = $('#vendor_password').val();
            // let password_confirmation = $('#vendor_password_confirmation').val();
            // let phone = $('#phone').val();
	$.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  },
		  
        });
            $.ajax({
                url: "{{route('vendorRegister')}}",
                type: "POST",
                data:form,
                 processData: false,
                    contentType: false,
                    cache: false,
  
                success: function(response) {
                    // $(".alert-danger").css("display", "none");
                    // $(".alert-success-message-vendor").css("display", "block");
                    // $(".alert-success-message-vendor").html('<P style="text-align:center">Thank you.').hide()
                    //     .fadeIn(1500, function() {
                    //         $('.alert-success-message-vendor');
                    //     }).fadeOut(1500, function() {
                    //         $('.alert-success-message-vendor');
                    //     }).reset();
                        // location.reload(true);
                        if(response.status = 422){
                            $(".alert-danger-vendor").css("display", "block");
        $.each(response.errors, function (key, value) {
        //  alert(value);
         
//           str = "<ul class='new'>";

              str = "<li>"+ value+"</li>" ;  
// str += "</ul>" ;

$("#errors").append(str);
                        });
                                // $("#errors").html( str );
                        
                }
               else if(response.status = 200){
                   alert('hi');
                   location.reload(true);}
                }

                });
            // document.getElementById("contactForm").reset();
        });
    </script> --}}



</body>



</html>
