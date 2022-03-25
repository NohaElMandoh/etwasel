@extends('front.layouts.app')
@section('styles')
<link href="{{asset('frontUI/assets/Libs/magnific-popup/magnific-popup.css')}}">

<style>
    .navbar-area {
        bottom: auto;
        top: 0;
        background: linear-gradient(0deg, rgb(36 99 184) 0%, rgb(128 182 240) 100%);

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
        background: #3c79c7;
    }

    ::-webkit-scrollbar-thumb {
        width: 6px;
        border-radius: 0;
        background: #3c79c7;
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
        background: #3c79c7;
        border: 1px solid #3c79c7;
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

    .centerside .productfillter {
        padding: 15px !important;
    }



    .modalprivew {}

    .modalprivew {}

    .modalprivew .modal-body {
        padding: 0;
    }

    .centerside .addside {
        height: 250px;
        display: block;
    }

    .centerside .addside .addcontent {
        display: block;
        width: 100%;
        height: 100%;
    }

    .centerside .addside .addcontent img {
        display: block;
        width: 100%;
        height: 100%;
    }

    .ScondPriview {}

    .ScondPriview .modal-dialog {}

    .ScondPriview .modal-content {}

    .ScondPriview .modal-header {}

    .ScondPriview .modal-header .modal-title {}

    .ScondPriview .modal-header .btn-close {}

    .ScondPriview .modal-body {}

    .ScondPriview .secPriviewCont {}

    .ScondPriview .secPriviewCont .BoxSec {
        display: flex;
        height: 200px;
        align-items: center;
        justify-content: center;
        border: 1px dashed #3c79c7;
        background: #fff;
    }

    .ScondPriview .secPriviewCont .BoxSec h2 {
        text-transform: capitalize;
        color: #ffffff;
        font-size: 45px;
        -webkit-text-stroke: 1px #3c79c7;
        text-transform: uppercase;
        letter-spacing: 15px;
        font-weight: revert;
    }

    .ScondPriview .secPriviewCont .ImgPrivew {}

    .ScondPriview .secPriviewCont .ImgPrivew .ImgCont {
        display: block;
        width: 100%;
        height: 300px;
        margin: 15px auto;
    }

    .ScondPriview .secPriviewCont .ImgPrivew .ImgCont img {
        display: block;
        width: 100%;
        height: 100%
    }
</style>
@endsection
@section('content')
@php
$user=Auth::user();
@endphp


<div class="sectionfixd fixedsecotherpage">
    <div class="overlay">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="fixedleft">
                    @include('front.partials.sides.left.left')
                </div>
            </div>

            <div class="col-lg-9 col-md-8">

                <div class="profilepage">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="profsittengs">
                                <div class="title">
                                    <h2><span><i class="style_icoColor__1U_A_ fas fa-sliders-h mr-2"></i></span> {{__('front.Product Info')}}</h2>
                                </div>
                                <form method="post" id='submitForm' enctype="multipart/form-data">
                                    @csrf
                                    <div class="alert alert-success alert-success-message3" style="display:none">
                                        {{ Session::get('success') }}
                                    </div>
                                    <div class="alert alert-danger " style="display:none">
                                        <ul id='list'>

                                        </ul>
                                        {{-- {{__('front.please fill all records')}}
                                        @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul id='list'>

                                            </ul>
                                        </div>
                                        @endif--}}
                                    </div>
                                    <input type="hidden" id="user_id" name="user_id" value="{{$user->id}}">
                                    <div class="inputVendorr">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.PMC')}}
                                                        <!--<button class="btnInfoPopover" data-toggle="popover" data-trigger="hover"  data-content="{{$website->pmc_info ?? ''}}"><i class="fas fa-info"></i> </button>-->
                                                        <a class="btnInfoPopover" data-toggle="popover" data-trigger="hover" data-content="{{$website->pmc_info ?? ''}}"><i class="fas fa-info"></i> </a>
                                                    </span>
                                                    <select id='pmc_id' name='pmc_id' class='form-control select2' required>
                                                        @if(count($user->pmcs)>0)
                                                        @foreach($user->pmcs as $pmc)

                                                        <option value='{{$pmc->id}}'>{{$pmc->cat_name}}</option>

                                                        @endforeach
                                                        @endif
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-nd-12 col-sm-12 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.Product Name EN')}}*</span>
                                                    <textarea placeholder="{{__('front.Product Name EN')}}" id='product_name_en' name='product_name_en' required class="TextInputt"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-nd-12 col-sm-12 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.Product Name AR')}}*</span>

                                                    <textarea placeholder=" {{__('front.Product Name AR')}} " id='product_name_ar' name='product_name_ar' required class="TextInputt"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="profsittengs">

                                                    <div class="setingstaps">



                                                        <div class="TapCOnfirmation bs-example">
                                                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" data-bs-toggle="tab" href="#Phone" role="tab">

                                                                        <span class=" d-sm-block">{{__('front.Product Pictures')}}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab" href="#Email" role="tab">

                                                                        <span class=" d-sm-block">{{__('front.Product Video')}}</span>
                                                                    </a>
                                                                </li>

                                                            </ul>


                                                            <div class="tab-content p-3 text-muted">
                                                                <div class="tab-pane tabcontent-grids active" id="Phone" role="tabpanel">
                                                                    <div class="row">

                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="setforms">
                                                                                <div class="qoutstepform ">
                                                                                    <span>{{__('front.Upload Pictures')}}</span>
                                                                                    <div class="input-group image-preview fileuploaaad">
                                                                                        <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                                                                        <span class="input-group-btn">
                                                                                            <div class="btn btn-default image-preview-input">

                                                                                                <span class="far fa-folder-open"></span>
                                                                                                <span class="image-preview-input-title">{{__('front.Browse')}}</span>
                                                                                                <input type="file" accept="image/*" multiple id='image' name='image[]' onchange="changePreview(event);" />
                                                                                            </div>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="popup-gallery2">
                                                                        <div class="row" id='gallary_imgs'>
                                                                            <!--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">-->

                                                                            <!--        <div class="formItemVendor"> -->
                                                                            <!--            <a href="{{asset('frontUI/assets/img/cladreximg/2021-LogoMaker-Site-Logo.png')}}" class="Itemmm">-->
                                                                            <!--                <div class="sliderimgItem">-->
                                                                            <!--                    <img src="{{asset('frontUI/assets/img/cladreximg/2021-LogoMaker-Site-Logo.png')}}">-->
                                                                            <!--                    <button type="button"  class="Removee RemoveSlide" >-->
                                                                            <!--                       <i class="far fa-trash-alt"></i>-->
                                                                            <!--                    </button>-->
                                                                            <!--                </div>-->
                                                                            <!--            </a>-->


                                                                            <!--         </div> -->

                                                                            <!--</div>-->
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="tab-pane tabcontent-grids" id="Email" role="tabpanel">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12col-sm-12 col-xs-12">
                                                                            <div class="setforms">
                                                                                <div class="qoutstepform ">
                                                                                    <span>{{__('front.Upload Video')}}</span>
                                                                                    <div class="input-group image-preview fileuploaaad">
                                                                                        <input type="text" class="form-control image-preview-filename">
                                                                                        <span class="input-group-btn">
                                                                                            <div class="btn btn-default image-preview-input">

                                                                                                <span class="far fa-folder-open"></span>
                                                                                                <span class="image-preview-input-title">{{__('front.Browse')}}</span>
                                                                                                <input type="file" accept="video/*" id='video' name='video[]' multiple onchange="changeVideoPreview(event);" />
                                                                                            </div>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row sliderimgItemV">
                                                                        <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">                              <div class="formItemVendor"> -->
                                                                        <!--    <div class="sliderimgItemV">-->
                                                                        <!--<video class="VedioPorUpload"  controls>-->
                                                                        <!--<source src="{{asset('frontUI/assets/videos/Team Working-14.m4v')}}" type="video/mp4">-->


                                                                        <!--</video>-->
                                                                        <!--<button type="button"  class="Removee RemoveSlide" >-->
                                                                        <!--                           <i class="far fa-trash-alt"></i>-->
                                                                        <!--                        </button> -->

                                                                        <!--    </div>-->


                                                                        <!--                                 </div>-->
                                                                        <!--</div>-->
                                                                    </div>
                                                                </div>
                                                            </div>




                                                            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs" style="display: none">
                                                                <ul id="myTab" class="nav nav-tabs" role="tablist">
                                                                    <li role="presentation" class="active">
                                                                        <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true" class="active show">{{__('front.Product Pictures')}}</a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a href="#carl" role="tab" id="carl-tab" data-toggle="tab" aria-controls="carl">{{__('front.Product Video')}}</a>
                                                                    </li>


                                                                </ul>
                                                                <div id="myTabContent" class="tab-content">
                                                                    <div role="tabpanel" class="tab-pane fadeIn active" id="home" aria-labelledby="home-tab">
                                                                        <div class="tabcontent-grids">
                                                                            <div class="setforms">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                    </div>





                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                        <div class="ImagePriveiwEdite">
                                                                                            <img id='f_prev_img2' style='display:none'>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
                                                                        <div class="tabcontent-grids">
                                                                            <div class="setforms">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <!--        <div class="qoutstepform ">-->
                                                                                        <!--            <span>{{__('front.Upload Video')}}</span>-->
                                                                                        <!--            <div class="input-group image-preview fileuploaaad">-->
                                                                                        <!--                <input type="text" id='video' name='video' class="form-control image-preview-filename">-->
                                                                                        <!--                <span class="input-group-btn">-->
                                                                                        <!--    <div class="btn btn-default image-preview-input">-->

                                                                                        <!--        <span class="far fa-folder-open"></span>-->
                                                                                        <!--        <span class="image-preview-input-title">Browse</span>-->
                                                                                        <!--        <input type="file" accept="" id='video' name='video' />-->
                                                                                        <!--    </div>-->
                                                                                        <!--</span> -->
                                                                                        <!--            </div>-->
                                                                                        <!--        </div>-->
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


                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="formItemVendor">
                                                        <span>{{__('front.Currency')}}</span>
                                                        <select id='currency_id' name='currency_id' class='form-control select2' required>
                                                            @if($currencies)
                                                            @foreach( $currencies as $currency)
                                                            <option value='{{$currency->id}}'>{{$currency->name}}</option>
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <hr>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="formItemVendor">
                                                                <span>{{__('front.Min')}} {{__('front.Price')}}</span>
                                                                <input type="number" step="0.01" id='min_price' name='min_price' class="inputvendor" required placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="formItemVendor">
                                                                <span>{{__('front.Max')}} {{__('front.Price')}}</span>
                                                                <input type="number" step="0.01" id='max_price' name='max_price' class="inputvendor" required placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="formItemVendor">
                                                                <span>{{__('front.Unit')}}</span>
                                                                <select id='unit_id' name='unit_id' class='form-control select2' required>
                                                                    @if($units)
                                                                    @foreach($units as $unit)
                                                                    <option value='{{$unit->id}}'>{{$unit->name}}</option>

                                                                    @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-nd-6 col-sm-6 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="formItemVendor">
                                                                        <span>{{__('front.Min')}} {{__('front.Order')}} {{__('front.Qty')}} </span>
                                                                        <input type="number" id='min_order' name='min_order' class="inputvendor" required placeholder="">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <hr>
                                                </div>




                                                <!--<div class="col-lg-6 col-nd-6 col-sm-6 col-xs-12">-->
                                                <!--    <div class="row">-->
                                                <!--        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">-->
                                                <!--            <div class="formItemVendor">-->
                                                <!--                <span>{{__('front.Max')}} {{__('front.Order')}}*</span>-->
                                                <!--                <input type="number" id='max_order' name='max_order' class="inputvendor" required placeholder="">-->
                                                <!--            </div>-->
                                                <!--        </div>-->

                                                <!--    </div>-->
                                                <!--</div>-->
                                                <div class="col-lg-6 col-nd-6 col-sm-6 col-xs-12">
                                                    <div class="formItemVendor">
                                                        <span>{{__('front.Delivery Load Time')}}</span>
                                                        <input type="text" id='load_time' name='load_time' class="inputvendor"  required placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                                                    <div class="formItemVendor">
                                                        <span>{{__('front.Product Specs EN')}}*</span>
                                                        <!--<textarea placeholder="My Info" id='product_desc' name='product_desc' required class="textarea"></textarea>-->
                                                    </div>

                                                    <textarea id='product_desc' name='product_desc' required class="textarea"></textarea>

                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="formItemVendor">
                                                        <span>{{__('front.Product Specs AR')}}*</span>
                                                        <!--<textarea placeholder="My Info" id='product_desc' name='product_desc' required class="textarea"></textarea>-->
                                                    </div>

                                                    <textarea id='product_desc_ar' name='product_desc_ar' required class="textarea"></textarea>

                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                    <div>
                                                        <span id='f_error' style="display:none">{{__('front.please select keyword,date from and date to')}}</span>

                                                        <div class="row">
                                                            <div class="col-lg-3 col-nd-3 col-sm-3 col-xs-12">
                                                                <div class="formItemVendor">
                                                                    <span>{{__('front.1st_page')}}
                                                                        <!--<a class="btnInfoPopover" data-toggle="popover" data-trigger="hover"  data-content="{{$website->first_keyword_info}}"><i class="fas fa-info"></i></a>-->
                                                                        <a class="btnInfoPopover" data-toggle="popover" data-trigger="hover" data-content="{{$website->first_keyword_info}}"><i class="fas fa-info"></i> </a>
                                                                    </span>


                                                                    <input id='first_page_keywrd_input' class="form-control " type="text" value="" list="first_page_keywrd_list" name='first_page_keywrd_list' />
                                                                    <datalist id='first_page_keywrd_list'>
                                                                        @if($first_page_keywrds)
                                                                        @foreach($first_page_keywrds as $f_keyword)
                                                                        <option value='{{$f_keyword->keyword}}' data-price="{{$f_keyword->price}}"></option>
                                                                        @endforeach
                                                                        @endif
                                                                    </datalist>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="formItemVendor">
                                                                            <span>{{__('front.from')}}</span>
                                                                            <div class="input-group" id="datepicker3">
                                                                                <input type="date" name='first_page_from' class="form-control first_page_from_input" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker3' data-provide="datepicker" data-date-autoclose="true">

                                                                                <span class="input-group-text bg_Brawen_iconinput"><i class="fas fa-calendar-alt"></i></span>
                                                                            </div><!-- input-group -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="formItemVendor">
                                                                            <span>{{__('front.to')}}</span>
                                                                            <div class="input-group" id="datepicker4">
                                                                                <input type="date" name='first_page_to' class="form-control first_page_to_input" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker4' data-provide="datepicker" data-date-autoclose="true">

                                                                                <span class="input-group-text bg_Brawen_iconinput"><i class="fas fa-calendar-alt"></i></span>
                                                                            </div><!-- input-group -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 pp">
                                                                <div class="formItemVendor">
                                                                    <span>{{__('front.Unit')}} {{__('front.Price')}}</span>
                                                                    <input readonly type="text" id='first_page_price_input' name='first_page_price' class="inputvendor first_page_price" placeholder="">
                                                                    <input type="hidden" id="f_page_position" name="f_page_position" value="first_page">
                                                                    <input type="text" style='display:none' id="total" name="total" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                                                                <div class="formItemVendor">
                                                                    <button style="top: 35px; " type="button" class="addMore addMore_input" title="Add Mor Emails">
                                                                        <i class="fas fa-plus iconpluss"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="keyword_table">
                                                    <table id="keywordstable" class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <p>{{__('front.Keyword')}}</p>
                                                                </th>
                                                                <th>
                                                                    <p>{{__('front.from')}}</p>
                                                                </th>
                                                                <th>
                                                                    <p>{{__('front.to')}}</p>
                                                                </th>
                                                                <th>
                                                                    <p>{{__('front.Price')}}</p>
                                                                </th>
                                                                <th>
                                                                    <p>{{__('front.Total')}}</p>
                                                                </th>
                                                                <th>
                                                                    <p>{{__('front.Action')}}</p>
                                                                </th>
                                                            </tr>

                                                        </thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                    <div>

                                                        <span id='d_error' style="display:none">{{__('front.please select keyword,date from and date to')}}</span>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-nd-3 col-sm-3 col-xs-12">
                                                                <div class="formItemVendor">
                                                                    <span>{{__('front.Top Dynamic')}}
                                                                        <!--<a class="btnInfoPopover" data-toggle="popover" data-trigger="hover"  data-content="{{$website->top_dynamic}}"><i class="fas fa-info"></i></a>-->
                                                                        <a class="btnInfoPopover" data-toggle="popover" data-trigger="hover" data-content="{{$website->top_dynamic}}"><i class="fas fa-info"></i> </a>
                                                                    </span>
                                                                    <!--<input type="text" class="inputvendor" placeholder="">-->
                                                                    {{-- <select id='dynamic_page_keywrd' name='dynamic_page_keywrd'>
                                                                    <option value='0'>Select</option>
                                                                    @if($dynamic_page_keywrds)
                                                                    @foreach($dynamic_page_keywrds as $d_keyword)
                                                                    <option value='{{$d_keyword->id}}'>{{$d_keyword->keyword}}</option>
                                                                    @endforeach
                                                                    @endif
                                                                    </select>--}}
                                                                    <input id='dynamic_page_keywrd_input' class="form-control  " list="dynamic_page_keywrd_list" type="text" value="" name='dynamic_page_keywrd' />
                                                                    <datalist id='dynamic_page_keywrd_list'>
                                                                        @if($dynamic_page_keywrds)
                                                                        @foreach($dynamic_page_keywrds as $d_keyword)
                                                                        <option value='{{$d_keyword->keyword}}'></option>
                                                                        @endforeach
                                                                        @endif
                                                                    </datalist>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="formItemVendor">
                                                                            <span>{{__('front.from')}}</span>
                                                                            <div class="input-group" id="datepicker3">
                                                                                <input type="date" name='dynamic_page_from' class="form-control dynamic_page_from_input" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker3' data-provide="datepicker" data-date-autoclose="true">

                                                                                <span class="input-group-text bg_Brawen_iconinput"><i class="fas fa-calendar-alt"></i></span>
                                                                            </div><!-- input-group -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="formItemVendor">
                                                                            <span>{{__('front.to')}}</span>
                                                                            <div class="input-group" id="datepicker4">
                                                                                <input type="date" name='dynamic_page_to' class="form-control dynamic_page_to_input" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker4' data-provide="datepicker" data-date-autoclose="true">

                                                                                <span class="input-group-text bg_Brawen_iconinput"><i class="fas fa-calendar-alt"></i></span>
                                                                            </div><!-- input-group -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <div class="formItemVendor">
                                                                    <span>{{__('front.Price')}}</span>
                                                                    <input readonly name='dynamic_page_price' id='dynamic_page_price_input' type="text" class="inputvendor dynamic_page_price_input" placeholder="">
                                                                </div>

                                                                <input type="hidden" id="dynamic_position" name="dynamic_position" value="dynamic_page">

                                                            </div>
                                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                                                                <div class="formItemVendor">
                                                                    <button style="top: 35px;" type="button" class="addMore add_more" title="Add Mor Emails">
                                                                        <i class="fas fa-plus iconpluss"></i>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div class="keyword_d_table keyword_table">
                                                            <table id="keywords_d_table" class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <p>{{__('front.Keyword')}}</p>
                                                                        </th>
                                                                        <th>
                                                                            <p>{{__('front.from')}}</p>
                                                                        </th>
                                                                        <th>
                                                                            <p>{{__('front.to')}}</p>
                                                                        </th>
                                                                        <th>
                                                                            <p>{{__('front.Price')}}</p>
                                                                        </th>
                                                                        <th>
                                                                            <p>{{__('front.Total')}}</p>
                                                                        </th>
                                                                        <th>
                                                                            <p>{{__('front.Action')}}</p>
                                                                        </th>
                                                                    </tr>

                                                                </thead>
                                                                <tbody>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 repeater">
                                                <div data-repeater-list="first_page_keywords">
                                                    <div class="formItemVendor">
                                                        <button style="top: 35px; " data-repeater-create type="button" class="addMore" title="Add Mor Emails">
                                                            <i class="fas fa-plus iconpluss"></i>
                                                        </button>
                                                    </div>
                                                    <div class="row" data-repeater-item>
                                                        <div class="col-lg-3 col-nd-3 col-sm-3 col-xs-12">
                                                            <div class="formItemVendor">
                                                                <span>1st Page</span>
                                                                

                                                                <input class="form-control"  type="text" value="" list="first_page_keywrd" name='first_page_keywrd' />
                                                                <datalist id='first_page_keywrd'>
                                                                    @if($first_page_keywrds)
                                                                    @foreach($first_page_keywrds as $f_keyword)
                                                                    <option value='{{$f_keyword->keyword}}'></option>
                                                @endforeach
                                                @endif
                                                </datalist>

                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="formItemVendor">
                                                        <span>From</span>
                                                        <div class="input-group" id="datepicker3">
                                                            <input type="date" id='first_page_from' name='first_page_from' class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker3' data-provide="datepicker" data-date-autoclose="true">

                                                            <span class="input-group-text bg_Brawen_iconinput"><i class="fas fa-calendar-alt"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="formItemVendor">
                                                        <span>TO</span>
                                                        <div class="input-group" id="datepicker4">
                                                            <input type="date" id='first_page_to' name='first_page_to' class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker4' data-provide="datepicker" data-date-autoclose="true">

                                                            <span class="input-group-text bg_Brawen_iconinput"><i class="fas fa-calendar-alt"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="formItemVendor">
                                                <span>Price</span>
                                                <input readonly type="text" id='first_page_price' name='first_page_price' class="inputvendor" placeholder="">
                                            </div>
                                        </div>

                                    </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 repeater">
                            <div data-repeater-list="dynamic_page_keywords">
                                <div class="formItemVendor">
                                    <button style="top: 35px;" data-repeater-create type="button" class="addMore" title="Add Mor Emails">
                                        <i class="fas fa-plus iconpluss"></i>
                                    </button>
                                </div>
                                <div class="row" data-repeater-item>
                                    <div class="col-lg-3 col-nd-3 col-sm-3 col-xs-12">
                                        <div class="formItemVendor">
                                            <span>Top Dynamic</span>
                                            <!--<input type="text" class="inputvendor" placeholder="">-->

                                            <input class="form-control" type="text" value="" list="dynamic_page_keywrd" name='dynamic_page_keywrd' />
                                            <datalist id='dynamic_page_keywrd'>
                                                @if($dynamic_page_keywrds)
                                                @foreach($dynamic_page_keywrds as $d_keyword)
                                                <option value='{{$d_keyword->keyword}}'></option>
                                                @endforeach
                                                @endif
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>From</span>
                                                    <div class="input-group" id="datepicker3">
                                                        <input type="date" id='dynamic_page_from' name='dynamic_page_from' class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker3' data-provide="datepicker" data-date-autoclose="true">

                                                        <span class="input-group-text bg_Brawen_iconinput"><i class="fas fa-calendar-alt"></i></span>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>TO</span>
                                                    <div class="input-group" id="datepicker4">
                                                        <input type="date" id='dynamic_page_to' name='dynamic_page_to' class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker4' data-provide="datepicker" data-date-autoclose="true">

                                                        <span class="input-group-text bg_Brawen_iconinput"><i class="fas fa-calendar-alt"></i></span>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="formItemVendor">
                                            <span>Price</span>
                                            <input readonly id='dynamic_page_price' name='dynamic_page_price' type="text" class="inputvendor" placeholder="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        --}}
                        <div class="col-lg-12">
                            <div class="formItemVendor">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">{{__('front.first_page_preview')}}</button>

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".ScondPriview">{{__('front.dynamic_page_preview')}}</button>
                            </div>




                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="formItemVendor">
                                <button type="submit" id='add_btn' class="btn btn-success ">
                                    <i class="fas fa-check"></i> {{__('front.Add')}}
                                </button>

                                <a href="#" class="btn btn-danger " style="display:none">
                                    <i class="fas fa-undo-alt"></i> {{__('front.Back')}}
                                </a>
                            </div>

                        </div>





                    </div>
                </div>
                </form>
            </div>
        </div>




    </div>
</div>

</div>

</div>

<div class="go-top"><i class="fas fa-arrow-up"></i></div>

</div>
</div>














<div class="modal fade bs-example-modal-xl modalprivew" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Extra large modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="sectionfixd" style="margin: 0;">
                    <div class="centerside">
                        <div class="centersidecont">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="slider">
                                        <div class="jtv-slideshow" style="margin: 0;">

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div id='jtv-rev_slider_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                                                        <div id='jtv-rev_slider' class='rev_slider fullwidthabanner'>
                                                            <ul>
                                                                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{asset('frontUI/assets/img/cladreximg/slide-img1.jpg')}}"><img src="{{asset('frontUI/assets/img/cladreximg/slide-img1.jpg')}}" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                                                                    <div class="info">
                                                                        <div class='tp-caption jtv-sub-title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Fashion Hussein 2017</span> </div>
                                                                        <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Look Book</span> </div>
                                                                        <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
                                                                        <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">Shop Now</a> </div>
                                                                    </div>
                                                                </li>
                                                                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{asset('frontUI/assets/img/cladreximg/slide-img2.jpg')}}"><img src="{{asset('frontUI/assets/img/cladreximg/slide-img2.jpg')}}" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                                                                    <div class="info">
                                                                        <div class='tp-caption jtv-sub-title sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'><span>Designer Clothing</span> </div>
                                                                        <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Trendy colletions</div>
                                                                        <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Best offer of the month top brands.</div>
                                                                        <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">View colletion</a> </div>
                                                                    </div>
                                                                </li>




                                                                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{asset('frontUI/assets/img/cladreximg/slide-img3.jpg')}}"><img src="{{asset('frontUI/assets/img/cladreximg/slide-img3.jpg')}}" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                                                                    <div class="info">
                                                                        <div class='tp-caption jtv-sub-title sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'><span>Designer Clothing</span> </div>
                                                                        <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Trendy colletions</div>
                                                                        <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Best offer of the month top brands.</div>
                                                                        <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">View colletion</a> </div>
                                                                    </div>
                                                                </li>







                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end JTV Home Slider -->


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="addside">
                                        <div class="addcontent">
                                            <img id='f_prev_img' src="{{asset('frontUI/assets/img/cladreximg/media1.png')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="services">
                                        <div class="servcont">
                                            <div class="title">
                                                <h2 class="Sertittl">Our Services</h2>
                                                <div class="line"></div>
                                            </div>
                                            <div class="servitemsss">
                                                <div class="seritem">
                                                    <a href="" class="servitemcont">
                                                        <span class="linkcont">
                                                            <i class=" icofont icofont-5-star-hotel"></i>
                                                            <span>Hotels</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="seritem">
                                                    <a href="" class="servitemcont">
                                                        <span class="linkcont">
                                                            <i class=" icofont icofont-plane-ticket"></i>
                                                            <span>Airlines</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="seritem">
                                                    <a href="#" class="servitemcont itembig">
                                                        <span class="linkcont">
                                                            <i class=" icofont icofont-cart"></i>
                                                            <span>Shopping</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="seritem">
                                                    <a href="" class="servitemcont">
                                                        <span class="linkcont">
                                                            <i class=" icofont icofont-open-eye"></i>
                                                            <span>Fairs</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="seritem">
                                                    <a href="" class="servitemcont">
                                                        <span class="linkcont">
                                                            <i class=" icofont icofont-delivery-time"></i>
                                                            <span>Shipping</span>
                                                        </span>
                                                    </a>
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
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade bs-example-modal-xl ScondPriview " tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Second Priview large modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="secPriviewCont">
                    <div class="BoxSec">
                        <h2>Section In Inner Page</h2>
                    </div>
                    <div class="ImgPrivew">
                        <div class="ImgCont">
                            <img id='s_prev_img' src="{{asset('frontUI/assets/img/cladreximg/media1.png')}}">
                        </div>
                    </div>
                    <div class="BoxSec">
                        <h2>Section In Inner Page</h2>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script src="{{asset('frontUI/assets/Libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontUI/assets/Libs/magnific-popup/lightbox.init.js')}}"></script>


<script>
    $(function(e) {
        $('#product_desc').richText();
        $('#product_desc_ar').richText();
    });
</script>

<script>
    $(document).ready(function() {

        if ($('#keywordstable tr').length < 2)
            $('.keyword_table').slideUp();

        if ($('#keywords_d_table tr').length < 2)
            $('.keyword_d_table').slideUp();

        $('#keywordstable').on('click', '.f_delete', function(e) {
            $(this).closest('tr').remove()
        })
        $('#keywords_d_table').on('click', '.d_delete', function(e) {
            $(this).closest('tr').remove()
        })
        let total;
        $('.addMore_input').click(function() {
            // alert('hi');

            var ids = [];

            if (!$('#first_page_keywrd_input').val() || !$('.first_page_from_input').val() || !$('.first_page_to_input').val()) {
                $("#f_error").css("display", "block");
            } else {
                // ----------
                var from_date = $('.first_page_from_input').val();
                var to_date = $('.first_page_to_input').val();
                var price = $('#first_page_price_input').val();
                $.ajax({
                    url: "{{route('keywordPrice')}}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        from_date: from_date,
                        to_date: to_date,
                        price: price,
                    },
                    success: function(response) {
                        total = response.price;
                        $('#total').val(response.price);
                        // alert(response.price);

                        useNextLoad(response.price);

                    }

                });
                // alert(total);
                // ----------<td>'+total+'</td>

            }

        });

        function useNextLoad(total) {
            //   console.log(price);
            $("#f_error").css("display", "none");
            $('#keywordstable > tbody').append('<tr><td><p>' + $('#first_page_keywrd_input').val() + '</td><td><p>' + $('.first_page_from_input').val() + '</td><td><p>' + $('.first_page_to_input').val() + '</td><td><p>' + $('#first_page_price_input').val() + '</td><td><p>' + $('#total').val() + '</p></td><td>  ' +
                '<button  type="button" class="btn btn-danger f_delete" title="Add Mor Emails"><i class="far fa-trash-alt"></i> </button></td></tr>');
            if ($('#keywordstable tr').length >= 2) {
                $('.keyword_table').slideDown();
            } else {
                $('.keyword_table').slideUp();
            }

        }
        $('.add_more').click(function() {
            // alert('hi');
            var ids = [];
            if (!$('#dynamic_page_keywrd_input').val() || !$('.dynamic_page_from_input').val() || !$('.dynamic_page_to_input').val()) {
                $("#d_error").css("display", "block");
            } else {

                var from_date = $('.dynamic_page_from_input').val();
                var to_date = $('.dynamic_page_to_input').val();
                var price = $('#dynamic_page_price_input').val();
                $.ajax({
                    url: "{{route('keywordPrice')}}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        from_date: from_date,
                        to_date: to_date,
                        price: price,
                    },
                    success: function(response) {
                        total = response.price;
                        $('#total').val(response.price);
                        // alert(response.price);

                        useNextLoad2(response.price);

                    }

                });

                // $("#d_error").css("display", "none");
                // $('#keywords_d_table > tbody').append('<tr><td><p>' + $('#dynamic_page_keywrd_input').val() + '</p></td><td><p>' + $('.dynamic_page_from_input').val() + '</p></td><td><p>' + $('.dynamic_page_to_input').val() + '</p></td><td><p>' + $('#dynamic_page_price_input').val() + '</p></td><td>  ' +
                //     '<button  type="button" class="btn btn-danger d_delete" title="Add Mor Emails"><i class="far fa-trash-alt"></i> </button></td></tr>')
            }


        });

        function useNextLoad2(total2) {
            //   console.log(price);
            $("#d_error").css("display", "none");
            $('#keywords_d_table > tbody').append('<tr><td><p>' + $('#dynamic_page_keywrd_input').val() + '</p></td><td><p>' + $('.dynamic_page_from_input').val() + '</p></td><td><p>' + $('.dynamic_page_to_input').val() + '</p></td><td><p>' + $('#dynamic_page_price_input').val() + '</p></td><td><p>' + $('#total').val() + '</p></td><td>  ' +
                '<button  type="button" class="btn btn-danger d_delete" title="Add Mor Emails"><i class="far fa-trash-alt"></i> </button></td></tr>');
            if ($('#keywords_d_table tr').length >= 2) {
                $('.keyword_d_table').slideDown();
            } else {
                $('.keyword_d_table').slideUp();
            }

        }

        let keyword_arr = new Array();;
        let dynamic_keyword_arr = new Array();

        let keyword_arr_words = new Array();;
        let dynamic_keyword_arr_words = new Array();

        function getFirstTableData() {
            $('#keywordstable').find('tr').each(function(i, el) {

                if (i > 0) {

                    var $tds = $(this).find('td'),
                        keyword = $tds.eq(0).text(),
                        from = $tds.eq(1).text(),
                        to = $tds.eq(2).text();
                    price = $tds.eq(3).text();
                    total = $tds.eq(4).text();
                    position = $('#f_page_position').val();

                    item = new Object();
                    item["keyword"] = keyword;
                    item["from"] = from;
                    item["to"] = to;
                    item["price"] = price;
                    item["position"] = position;
                    item["total"] = total;

                    // jsonObj.push(item);

                    // var row = {
                    //     "keyword": keyword,
                    //     "from": from,
                    //     "to": to,
                    //     "price": price,
                    // };
                    // jsonObj.push(item);
                    keyword_arr.push(item);
                    // console.log(keyword_arr);
                    keyword_arr_words.push(keyword);
                }

            });
        }

        function getSecondTableData() {
            $('#keywords_d_table').find('tr').each(function(w, el2) {

                if (w > 0) {

                    var $tds2 = $(this).find('td'),
                        keyword2 = $tds2.eq(0).text(),
                        from2 = $tds2.eq(1).text(),
                        to2 = $tds2.eq(2).text();
                    price2 = $tds2.eq(3).text();
                    total2 = $tds2.eq(4).text();
                    position2 = $('#dynamic_position').val();



                    var row2 = {
                        "keyword": keyword2,
                        "from": from2,
                        "to": to2,
                        "price": price2,
                        'position': position2,
                        'total': total2
                    };
                    dynamic_keyword_arr.push(row2);
                    // alert(dynamic_keyword_arr);
                    // console.log(dynamic_keyword_arr);
                    dynamic_keyword_arr_words.push(keyword2);
                }

            });
        }
        $('#add_btn').click(function() {

            event.preventDefault();

            //get first kewords obj
            getFirstTableData();
            // console.log(typeof(keyword_arr));

            //get Second kewords obj
            getSecondTableData();
            // console.log(dynamic_keyword_arr);

            var form = new FormData();
            form.append('pmc_id', $('#pmc_id').val());
            form.append('user_id', $('#user_id').val());
            form.append('product_name_en', $('#product_name_en').val());
            form.append('product_name_ar', $('#product_name_ar').val());
            form.append('unit_id', $('#unit_id').val());
            form.append('currency_id', $('#currency_id').val());
            form.append('min_order', $('#min_order').val());
            form.append('min_price', $('#min_price').val());
            // form.append('max_order', $('#max_order').val());
            form.append('max_price', $('#max_price').val());
            form.append('load_time', $('#load_time').val());
            form.append('product_desc', $('#product_desc').val());
            form.append('product_desc_ar', $('#product_desc_ar').val());
            form.append('first_page_keywords', JSON.stringify(keyword_arr));
            form.append('dynamic_page_keywords', JSON.stringify(dynamic_keyword_arr));

            form.append('first_page_keywords_words', keyword_arr_words);
            form.append('dynamic_page_keywords_words', dynamic_keyword_arr_words);



            // var images = $('#image')[0];


            // form.append('image', images.files[0]);
            var TotalImages = $('#image')[0].files.length;
            var images = $('#image')[0];

            for (var i = 0; i < TotalImages; i++) {
                form.append('image[]', images.files[i]);
            }

            var Totalvideos = $('#video')[0].files.length;
            var videos = $('#video')[0];

            for (var j = 0; j < Totalvideos; j++) {
                form.append('video[]', videos.files[j]);
            }

            $.ajax({
                url: "{{route('vendor_individual_product_post')}}",
                type: "POST",
                data: form,
                cache: false,
                contentType: false,
                dataType: 'json',
                // contentType: 'application/json; charset=utf-8',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,
                beforeSend: function() {
                    $("#add_btn").html("<option>  {{__('front.Loading ...')}}</option>");
                    $("#add_btn").prop('disabled', true); // disable button
                },
                success: function(response) {
                 
                    // location.reload();
                        $("#add_btn").html("<option> {{__('front.Done')}}</option>");
                        $("#add_btn").prop('disabled', false); // disable button
                        $(".alert-danger").css("display", "none");
                        $(".alert-success-message3").css("display", "block");
                        $(".alert-success-message3").html('<P style="text-align:center">Thank you.').hide()
                            .fadeIn(1500, function() {
                                $('.alert-success-message3');
                            }).fadeOut(1500, function() {
                                $('.alert-success-message3');
                            }).reset();

                        $(".sliderimgItem").empty();

                        $("#gallary_imgs").empty();
                        document.getElementById("submitForm").reset();
                },
                error: function(response) {
                    $("#add_btn").html("<option> {{__('front.Add')}}</option>");
                    $("#add_btn").prop('disabled', false); // disable button

                    $(".alert-danger").css("display", "block");
                    $("#list").empty();
                        $.each(response.responseJSON.errors, function(key, value) {
                         
                            str = "<li>" + value + "</li>";
                              $("#list").append(str);
                        });
                },
            });
            // document.getElementById("submitForm").reset();

        });



        // CKEDITOR.replace( 'product_desc' );
        // $('#product_desc').ckeditor();
        $('.repeater').repeater({
            // (Optional)
            // start with an empty list of repeaters. Set your first (and only)
            // "data-repeater-item" with style="display:none;" and pass the
            // following configuration flag
            initEmpty: false,
            // (Optional)
            // "show" is called just after an item is added.  The item is hidden
            // at this point.  If a show callback is not given the item will
            // have $(this).show() called on it.
            show: function() {
                $(this).slideDown();
            },
            // (Optional)
            // "hide" is called when a user clicks on a data-repeater-delete
            // element.  The item is still visible.  "hide" is passed a function
            // as its first argument which will properly remove the item.
            // "hide" allows for a confirmation step, to send a delete request
            // to the server, etc.  If a hide callback is not given the item
            // will be deleted.
            hide: function(deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            },
            // (Optional)
            // Removes the delete button from the first list item,
            // defaults to false.
            isFirstItemUndeletable: true
        })

    });
    $(document).on('click', '#close-preview', function() {
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
            function() {
                $('.image-preview').popover('show');
            },
            function() {
                $('.image-preview').popover('hide');
            }
        );
    });

    $(function() {
        // Create the close button
        var closebtn = $('<button/>', {
            type: "button",
            text: 'x',
            id: 'close-preview',
            style: 'font-size: initial;',
        });
        closebtn.attr("class", "close pull-right");
        // Set the popover default content
        $('.image-preview').popover({
            trigger: 'manual',
            html: true,
            title: "<strong>Preview</strong>" + $(closebtn)[0].outerHTML,
            content: "There's no image",
            placement: 'bottom'
        });
        // Clear event
        $('.image-preview-clear').click(function() {
            $('.image-preview').attr("data-content", "").popover('hide');
            $('.image-preview-filename').val("");
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val("");
            $(".image-preview-input-title").text("{{__('front.Browse')}}");
        });
        // Create the preview image
        $(".image-preview-input input:file").change(function() {
            var img = $('<img/>', {
                id: 'dynamic',
                width: 250,
                height: 200
            });
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function(e) {
                $(".image-preview-input-title").text("{{__('front.Change')}}");
                $(".image-preview-clear").show();
                $(".image-preview-filename").val(file.name);
                img.attr('src', e.target.result);
                $(".image-preview").attr("data-content", $(img)[0].outerHTML).popover("show");
            }
            reader.readAsDataURL(file);
        });
    });


    // -------
    $("#first_page_keywrd_input").change(function() {

        var name = $(this).val();
        // var price_input = $(this).parents().find('.first_page_price');


        $.ajax({
            url: "keywords_details/" + name,
            type: "GET",

            success: function(response) {

                var first_date_from = new Date(response.keyword.date_from).toLocaleDateString("en-US");
                var first_date_to = new Date(response.keyword.date_to).toLocaleDateString("en-US");
                $('.first_page_from').val(first_date_from);

                // price_input.val(response.keyword.price);
                $('.first_page_price').val(response.keyword.price);
                $('.first_page_to').val(first_date_to);


            },
            error: function(response) {

                $(".alert-danger").css("display", "block");
                $(".alert-success-message").css("display", "none");


            },

        });



    });


    // $(".first_page_to_input").change(function() {
    //     alert('hi');

    // }
    //   function handler(e){
    // // //   alert(e.target.value);  first_page_from first_page_price_input
    //   var from_date= $(".first_page_from").val();
    //  var to_date= e.target.value;
    // var price=$('.first_page_price').val();
    //       $.ajax({
    //                 url: "{{route('keywordPrice')}}",
    //                 type: "POST",
    //                 data: {
    //                     "_token": "{{ csrf_token() }}",
    //                     from_date: from_date,
    //                     to_date: to_date,
    //                 price:price,
    //                 },
    //                 success: function(response) {
    //                       $('.first_page_price').val(response.keyword.price);

    //                 }

    //             });
    // }
    $("#dynamic_page_keywrd_input").change(function() {

        var id = $(this).val();

        $.ajax({
            url: "keywords_details/" + id,
            type: "GET",

            success: function(response) {
                var first_date_from = new Date(response.keyword.date_from).toLocaleDateString("en-US");
                var first_date_to = new Date(response.keyword.date_to).toLocaleDateString("en-US");
                $('.dynamic_page_from_input').val(first_date_from);

                $('.dynamic_page_price_input').val(response.keyword.price);
                $('.dynamic_page_to_input').val(first_date_to);


            },
            error: function(response) {
                $(".alert-danger").css("display", "block");
                $(".alert-success-message").css("display", "none");
            },

        });


    });
    //  $("#first_page_keywrd").change(function() {
    //         alert($(this).val());
    //         var id=$(this).val() ;
    //         if($(this).val() >=1){


    //             $.ajax({
    //                         url: "keywords_details/"+id,
    //                         type: "GET",

    //                         success: function(response) {
    //                             // alert(response.keyword.date_from);
    //                       var first_date_from= new Date(response.keyword.date_from).toLocaleDateString("en-US");
    //                       var first_date_to= new Date(response.keyword.date_to).toLocaleDateString("en-US");
    //                      $('#first_page_from').val(first_date_from);

    //                      $('#first_page_price').val(response.keyword.price);
    //                      $('#first_page_to').val(first_date_to);


    //                         },
    //                         error: function(response) {
    //                             $(".alert-danger").css("display", "block");
    //                             $(".alert-success-message").css("display", "none");
    //                         },

    //                     });


    //         }
    //     });
    //  $("#dynamic_page_keywrd").change(function() {
    //         // alert($(this).val());
    //         var id=$(this).val() ;
    //         if($(this).val() >=1){


    //             $.ajax({
    //                         url: "keywords_details/"+id,
    //                         type: "GET",

    //                         success: function(response) {
    //                             // alert(response.keyword.date_from);
    //                       var first_date_from= new Date(response.keyword.date_from).toLocaleDateString("en-US");
    //                       var first_date_to= new Date(response.keyword.date_to).toLocaleDateString("en-US");
    //                      $('#dynamic_page_from').val(first_date_from);

    //                      $('#dynamic_page_price').val(response.keyword.price);
    //                      $('#dynamic_page_to').val(first_date_to);


    //                         },
    //                         error: function(response) {
    //                             $(".alert-danger").css("display", "block");
    //                             $(".alert-success-message").css("display", "none");
    //                         },

    //                     });


    //         }
    //     });

    $('#preview_f_page').on('click', function(event) {
        event.preventDefault();

        $('.modalprivew').modal('show');
        // alert('hi');
    });

    function changePreview(e, k, v) {
        var files = e.target.files;
        // console.log(files)

        $.each(files, function(key, file) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(e) {
                $("#f_prev_img").attr("src", e.target.result);
                $("#s_prev_img").attr("src", e.target.result);
                // $("#f_prev_img2").css("display", "block");
                //   $("#f_prev_img2").attr("src",e.target.result);



                $html = "<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12 weyy' > <div class='formItemVendor'><a href='" + e.target.result + "' class='Itemmm'><div class='sliderimgItem'><img  src='" + e.target.result + "'><button " +
                    "type='button' class='Removee RemoveImg RemoveProductImage'><i class='far" +
                    " fa-trash-alt' aria-hidden='true'></i></button></div></a> </div></div>";
                $("#gallary_imgs").append($html);
            }
        });
    }


    function changeVideoPreview(e, k, v) {
        var files = e.target.files;
        // console.log(files)

        $.each(files, function(key, file) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(e) {

                $html = '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 weyy"> <div class="formItemVendor"><div class="sliderimgItem"> <video class="VedioPorUpload"  controls><source src="' + e.target.result + '" type="video/mp4"></video> <button type="button" class="Removee RemoveVideo RemoveSlide RemoveProductImage" ><i class="far fa-trash-alt"></i> </button></div> </div></div>  ';

                // $html="<img  src='"+e.target.result+"'>";
                $(".sliderimgItemV").append($html);


            }
        });
    }

    $(document).on('click', '.RemoveProductImage', function() {

        $(this).closest('.weyy').remove();
        $(".alert-danger").css("display", "none");;

    });
</script>


<script>
    $(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>

@endsection