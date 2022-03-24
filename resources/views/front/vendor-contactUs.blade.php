@extends('front.layouts.app')
@section('styles')

<link href="{{asset('frontUI/assets/Libs/magnific-popup/magnific-popup.css')}}">
@endsection
@section('content')

<div class="sectionfixd fixedsecotherpage">
    <div class="overlay">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12col-xs-12">
                <div class="companyheaders">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="companydetails">
                                    <div class="companylogo">
                                        {{-- <img src="{{asset('frontUI/assets/img/cladreximg/companylogo.png')}}">--}}
                                        @if(!empty($user->details))
                                        @if($user->details->logo)
                                        <img src="{{Voyager::image($user->details->logo)}}">
                                        @else
                                        <img src="{{Voyager::image('users/OimK016812.png')}}">
                                        @endif
                                        @else
                                        <img src="{{Voyager::image('users/OimK016812.png')}}">
                                        @endif
                                    </div>
                                    <div class="companydesas">
                                        <div class="itltw">
                                            <a href="#" class="comptitl"> {{$user->display_name ?? ''}}</a>
                                        </div>
                                        <div class="servcomp">
                                            <ul>
                                                <li><img src="{{asset('frontUI/assets/img/cladreximg/jewels.png')}}"> {{$user->details->campany_name??'Campany Name'}}
                                                    <!--<span>sinc 2008</span>-->
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                <div class="seraserbox">


                                    <form method="get" action="{{route('search')}}" enctype="multipart/form-data" class="">
                                        @csrf
                                        <div class="searchselect">
                                            <select class="selecttsite select2" style="width: 100px">
                                                <option>{{__('front.This Site')}}</option>
                                                <option>{{__('front.All Sites')}} </option>
                                            </select>
                                            <input type="text" id='keyword' name='keyword' class="SiyrInput" placeholder="{{__('front.Search Products')}}">
                                            <button type="submit" class="BTNSEARCH"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>


                                </div>


                            </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="nananbars">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-lg navbar-light">

                            <!-- collapse -->
                            <div class=" navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route('vendor_website',['vendor_id'=>$user->id ?? null,'vendor_name'=>$user->name ?? ''])}}">{{__('front.Home')}} </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-list-ul"></i> {{__('front.Products')}}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @if(!empty($user->pmcs))
                                            @foreach($user->pmcs as $pmc)
                                            <a class="dropdown-item" href="#">{{ $pmc->cat}}</a>
                                            <!--<a class="dropdown-item" href="#">Die cutting machine</a>-->
                                            <!--<a class="dropdown-item" href="#">Slitting machine</a>-->
                                            @endforeach
                                            @else
                                            <a class="dropdown-item" href="#">{{__('front.No Products Found')}} </a>
                                            @endif
                                        </div>
                                    </li>
                                    <li class="nav-item" style='display:none'>
                                        <a class="nav-link" href="#">{{__('front.About Us')}}</a>
                                    </li>
                                    <li class="nav-item" style='display:none'>
                                        <a class="nav-link" href="#">{{__('front.Solutions')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">{{__('front.Contact Us')}}</a>
                                    </li>

                                </ul>

                            </div>
                        </nav>
                    </div>

                </div>
            </div>




            <div class="col-lg-12 col-md-12">

                <div class="centerside">
                    <div class="centersidecont">
                        <div class="row">


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="PopuProd productfillter">

                                    <div class="PopuProdtemsss">
                                        <div class="row ">
                                            <div class="col-lg-12 col-md-12 col-sm--12 col-xs-12">

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4">
                                                        <div class="othersidebare">
                                                            <div class="faq-accordion">
                                                                <ul class="accordion">
                                                                    <li class="accordion-item">
                                                                        <h2>{{__('front.Product Groups')}}</h2>

                                                                    </li>
                                                                    @if(!empty($user->pmcs))
                                                                    @foreach($user->pmcs as $pmc)
                                                                    <li class="accordion-item">
                                                                        <a class="accordion-title " href="javascript:void(0)">

                                                                            <span class="namecat"> {{$pmc->cat}}
                                                                            </span>
                                                                        </a>

                                                                    </li>
                                                                    @endforeach
                                                                    @endif



                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="contactsupli">
                                                            <div class="titile">
                                                                <h2>{{__('front.Contact Supplier')}}</h2>
                                                            </div>
                                                            <div class="detailsssup">
                                                                <div class="supInfo">
                                                                    <div class="imagess">
                                                                        <img src="{{Voyager::image($user->photo ?? $user->avatar ?? '')}}">
                                                                    </div>
                                                                    <div class="sudet">
                                                                        <p>{{$user->full_name ?? 'supplier'}}</p>
                                                                        <span>{{$user->details->campany_category->name ?? ''}}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="formsss">
                                                                    <form method="post" class='contact_form'>
                                                                        @csrf
                                                                        <input type="hidden" id='user_id' name='user_id' value='{{$user->id ?? ''}}'>
                                                                        <div class="alert alert-success alert-success-message" style="display:none">
                                                                            {{ Session::get('success') }}
                                                                        </div>
                                                                        <div class="alert alert-danger " style="display:none">
                                                                            {{__('front.please fill all records')}}
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="formitem">
                                                                                    <span>{{__('front.Email')}}</span>
                                                                                    <input type="email" id='email' name='email' class="forminpsd" placeholder=" {{__('front.Enter Your Email')}}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="formitem">
                                                                                    <span>{{__('front.Message')}}</span>
                                                                                    <textarea id='message' name='message' placeholder="   {{__('front.Enter your message')}}" class="textaremess"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="formitem">

                                                                                    <button class="SenMess contact_form" type='button'>{{__('front.Send')}} </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-9 col-md-8">

                                                        <div class="IframeModalla">
                                                            <div class="IfrmaCont">
                                                                <iframe style="border: 0;" src="{{$user->details->location_url ?? 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3449.198261345427!2d31.47360221444666!3d30.1743300193814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sGolf%20Mall%2C%20Building%202%2C%20BETA%20Greens%20Compound%2C%206%20October%2C%20Giza!5e0!3m2!1sen!2seg!4v1622592831809!5m2!1sen!2seg'}}" width="100%" allowfullscreen="allowfullscreen"></iframe>
                                                            </div>
                                                        </div>

                                                        <div class="COntEmailsInfo">
                                                            <div class="prpdtit">
                                                                <h2>{{__('front.Contact Info')}} </h2>
                                                            </div>
                                                            <div class="ContactDetails">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="row">
                                        @if(!empty($user->contacts))
                                                                            @foreach($user->contacts as $contact)
                                                                            <div clas="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="InfoCont">
                                                                                    <p class="InfoItem"><i class="bx bx-phone-call"></i> <span>{{$contact->contact}}</span></p>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            @endif
                                                                            <!-- <div clas="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="InfoCont">
                                                                                <p class="InfoItem"><i class="bx bx-phone-call"></i> <span>01020704551</span></p>
                                                                            </div>
                                                                        </div>
                                                                        <div clas="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="InfoCont">
                                                                                <p class="InfoItem"><i class="bx bx-phone-call"></i> <span>01020704551</span></p>
                                                                            </div>
                                                                        </div> -->
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="row">
                                                                            
                                                      @if(!empty($user->emails))
                                                                            @foreach($user->emails as $email)                        
                                                                            <div clas="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="InfoCont">
                                                                                    <p class="InfoItem"><i class="bx bx-envelope"></i> <span>{{$email->email}}</span></p>
                                                                                </div>
                                                                            </div>
                                                @endforeach                            @endif
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>



                                                        <div class="certifications">
                                                            <div class="prpdtit">
                                                                <h2>{{__('front.Certificates')}}</h2>
                                                            </div>
                                                            <div class="certitemss CertificationPopUp">
                                                                <div class="row certificationsRow">
                                                                    @if(!empty(Auth::user()->certification))
                                                                    @foreach(Auth::user()->certification as $cer)

                                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="certitem">
                                                                            <a href="{{Voyager::image($cer->image)}}" class="itemcert">
                                                                                <div class="imgaes">
                                                                                    <div class="imgesitem">
                                                                                        <img src="{{Voyager::image($cer->image)}}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ceritname">
                                                                                    <h3>{{$cer->title_en ?? ''}}</h3>
                                                                                </div>
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="certifications">
                                                            <div class="prpdtit">
                                                                <h2>{{__('front.Send your message to this supplier')}}</h2>
                                                            </div>
                                                            <div class="Messagee">
                                                                <form method="post" class='contact_form'>
                                                                    @csrf

                                                                    <div class="alert alert-success alert-success-message2" style="display:none">
                                                                        {{ Session::get('success') }}
                                                                    </div>
                                                                    <div class="alert alert-danger2 " style="display:none">
                                                                        {{__('front.please fill all records')}}
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="Messageinput">
                                                                                <div class="row">
                                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                        <div class="titiw">
                                                                                            <p> {{__('front.from')}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-9 col-md-9 col-xs-9 col-xs-12">
                                                                                        <div class="inputmess">
                                                                                            <input type="email" id='email2' name='email2' placeholder=" {{__('front.Enter Your Email')}}" class="mailinpu">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="Messageinput">
                                                                                <div class="row">
                                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                        <div class="titiw">
                                                                                            <p> {{__('front.to')}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-9 col-md-9 col-xs-9 col-xs-12">
                                                                                        <div class="tomrsss">
                                                                                            <img src="{{Voyager::image($user->photo ?? $user->avatar ?? '')}}">
                                                                                            <span>{{$user->full_name ?? 'supplier'}}</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="Messageinput">
                                                                                <div class="row">
                                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                        <div class="titiw">
                                                                                            <p>{{__('front.Message')}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-9 col-md-9 col-xs-9 col-xs-12">
                                                                                        <div class="inputmess">
                                                                                            <textarea id='message2' name='message2' placeholder="{{__('front.message2')}}" class="textaremess"></textarea>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="Messageinput">
                                                                                <div class="row">
                                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                                                                    </div>
                                                                                    <div class="col-lg-9 col-md-9 col-xs-9 col-xs-12">
                                                                                        <div class="inputmess">
                                                                                            <button class="SenMess send_msg" type="button">{{__('front.Send')}}</button>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>





                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="foootercompa">
                                                            <p>{{__('front.Copyright')}} </p>
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

        <div class="go-top"><i class="fas fa-arrow-up"></i></div>

    </div>
</div>


@endsection
@section('scripts')
<script src="{{asset('frontUI/assets/Libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontUI/assets/Libs/magnific-popup/lightbox.init.js')}}"></script>



<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '.contact_form', function(e) {
            // $('.contact_form').on('click', function(event) {
            event.preventDefault();
            // alert('hi');
            let user_id = $('#user_id').val();
            let email = $('#email').val();
            let message = $('#message').val();

            $.ajax({
                url: "{{route('contactUs')}}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    user_id: user_id,
                    email: email,
                    message: message,
                },
                success: function(response) {
                    $(".alert-danger").css("display", "none");
                    $(".alert-success-message").css("display", "block");
                    $(".alert-success-message").html('<P style="text-align:center">Thank you.').hide()
                        .fadeIn(1500, function() {
                            $('.alert-success-message');
                        }).fadeOut(1500, function() {
                            $('.alert-success-message');
                        }).reset();

                },
                error: function(response) {
                    $(".alert-danger").css("display", "block");
                    $(".alert-success-message").css("display", "none");
                },

            });
            document.getElementById("contactForm").reset();
        });

        $('.send_msg').on('click', function(event) {
            event.preventDefault();
            let user_id = $('#user_id').val();
            let email = $('#email2').val();
            let message = $('#message2').val();


            $.ajax({
                url: "{{route('contactUs')}}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    user_id: user_id,
                    email: email,
                    message: message,
                },
                success: function(response) {
                    $(".alert-danger").css("display", "none");
                    $(".alert-success-message2").css("display", "block");
                    $(".alert-success-message2").html('<P style="text-align:center">Thank you.').hide()
                        .fadeIn(1500, function() {
                            $('.alert-success-message2');
                        }).fadeOut(1500, function() {
                            $('.alert-success-message2');
                        }).reset();

                },
                error: function(response) {
                    $(".alert-danger2").css("display", "block");
                    $(".alert-success-message2").css("display", "none");
                },

            });
            document.getElementById("contactForm").reset();
        });
    });
</script>
@endsection