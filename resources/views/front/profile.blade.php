@extends('front.layouts.app')
@section('styles')
<!--<link href="{{asset('frontUI/assets/Libs/wysiwyag/richtext.css')}}">-->
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
    
    
    
        .modalprivew{
            
        }
        .modalprivew{
            
        }
        .modalprivew .modal-body{
            padding: 0;
        }
        .centerside .addside{
                height: 250px;
    display: block;
        }
        .centerside .addside .addcontent{
            display: block;
    width: 100%;
    height: 100%;
        }
        .centerside .addside .addcontent img{
            display: block;
            width: 100%;
                height: 100%;
        }
        .ScondPriview{
    
}
.ScondPriview .modal-dialog{
    
}
.ScondPriview .modal-content{
    
}
.ScondPriview .modal-header{
    
}
.ScondPriview .modal-header .modal-title{
    
}
.ScondPriview .modal-header .btn-close{
    
}
.ScondPriview .modal-body{
    
}
.ScondPriview .secPriviewCont{
    
}
.ScondPriview .secPriviewCont .BoxSec{
        display: flex;
    height: 200px;
    align-items: center;
    justify-content: center;
    border: 1px dashed #3c79c7;
    background: #fff;
}
.ScondPriview .secPriviewCont .BoxSec h2{
    text-transform: capitalize;
    color: #ffffff;
    font-size: 45px;
    -webkit-text-stroke: 1px #3c79c7;
    text-transform: uppercase;
    letter-spacing: 15px;
    font-weight: revert;
}
.ScondPriview .secPriviewCont .ImgPrivew{
    
}
.ScondPriview .secPriviewCont .ImgPrivew .ImgCont{
        display: block;
    width: 100%;
    height: 300px;
    margin: 15px auto;
}
.ScondPriview .secPriviewCont .ImgPrivew .ImgCont img{
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
                                    <h2><span><i class="style_icoColor__1U_A_ fas fa-sliders-h mr-2"></i></span> {{__('front.Vendor Personal Info Upload')}}</h2>
                                </div>
                                <form action="{{route('vendor_update_profile')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                                    <div class="inputVendorr">
                                        <div class="row">
                                            <div class="col-lg-6 col-nd-6 col-sm-6 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.Company Name EN')}} *</span>
                                                    <input type="text" id='campany_name_en' name='campany_name_en' value='{{ $user->details->campany_name_en ?? ""}}' class="inputvendor" required placeholder="Your name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-nd-6 col-sm-6 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.Company Name AR')}} *</span>
                                                    <input type="text" id='campany_name_ar' name='campany_name_ar' value='{{ $user->details->campany_name_ar ?? ""}}' class="inputvendor" required placeholder="Your name">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                <div class="" >
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="formItemVendor ">
                                                    <span>{{__('front.Company Logo Upload')}} *</span>
                                                   
                                                    <div class="input-group image-preview image-preview_logo  fileuploaaad ">
                                                        <input type="text" class="form-control image-preview-filename image-preview-filename_logo" disabled="disabled">
                                                        <span class="input-group-btn">
                                                            <div class="btn btn-default image-preview-input image-preview-input_logo">

                                                                <span class="far fa-folder-open"></span>
                                                                <span class="image-preview-input-title image-preview-input-title_logo">{{__('front.Browse')}}</span>
                                                                <input id='logo_btn' oninput="this.className = ''" type="file" accept="all" id='logo' name='logo'  name="input-file-preview" onchange="changePreview2(event);"/>
                                                            </div>
                                                        </span>
                                                      
                                                    </div>
                                                   
                                                </div>
                                                        </div>
                                                      
                                                    </div>
                                                        
                                                
                                                </div>
                                            </div>
                                          
                                                
                                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                <div class="sliderUploadedImages">
                                                   
                                                    <div class="row"id='logo_imgs_div' >
                                                         @if($user->details )
                                                           @if($user->details->logo != null)
                                                     <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'><div class='formItemVendor'> <img src='{{Voyager::image($user->details->logo ?? "")}}'>  </div> </div>
                                                     @endif
                                                     @endif
                                                    </div>
                                                  
                                                </div>
                                                 
                                            </div>
                                          {{--  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 repeater">
                                                <div class="" data-repeater-list="sliders">
                                                        <div class="formItemVendor">
                                                       <button type="button" data-repeater-create class="addMore" title="Add More">
                                                            <i class="fas fa-plus iconpluss"></i>
                                                        </button>
                                                        </div>
                                                <div class="formItemVendor " data-repeater-item>
                                                    <span>{{__('front.company slider')}}</span>
                                                   
                                                    <div class="input-group image-preview fileuploaaad ">
                                                        <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                                        <span class="input-group-btn">
                                                            <div class="btn btn-default image-preview-input2">

                                                                <span class="far fa-folder-open"></span>
                                                                <span class="image-preview-input2-title">{{__('front.Browse')}}</span>
                                                                <input oninput="this.className = ''" type="file" accept="all" id='slide' name='slide' name="input-file-preview" />
                                                            </div>
                                                        </span>
                                                         <button data-repeater-delete type="button" class="btn btn-danger deleterepeat" title="Add Mor Emails">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>--}}
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                <div class="row" >
                                                      
                                                        
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="formItemVendor " >
                                                    <span>{{__('front.company slider')}} *</span>
                                                   
                                                    <div class="input-group image-preview image-preview_slider fileuploaaad ">
                                                        <input type="text" class="form-control image-preview-filename image-preview-filename_slider" disabled="disabled">
                                                        <span class="input-group-btn">
                                                            <div class="btn btn-default image-preview-input image-preview-input_slider">

                                                                <span class="far fa-folder-open"></span>
                                                                <span class="image-preview-input-title image-preview-input-title_slider">{{__('front.Browse')}}</span>
                                                                <input  oninput="this.className = ''" type="file" accept="image/*" multiple id='slide' name='slide[]'    onchange="changePreview(event);"/>
                                                            </div>
                                                        </span>
                                                   
                                                    </div>
                                                </div>
                                                        </div>
                                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                                                            <div class="formItemVendor">
                                                     
                                                    
    
                                                        <button type="button" style='display:none' class="addMore" title="Add Mor Emails">
                                                            <i class="fas fa-plus iconpluss"></i>
                                                        </button>
                                                    </div>
                                                        </div>
                                                
                                                </div>
                                            </div>
                                            <!--<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " id='slider_imgs_div' style='display:none'>-->
                                             <!--    <div class="formItemVendor" id='slider_imgs'> -->
                                             <!--<img id='prev_img' src="{{asset('frontUI/assets/img/cladreximg/media1.png')}}"> -->
                                             <!--    </div> -->
                                            <!--</div>-->
                                            <div id='count_img_error' style='display:none'><p>{{__('front.you select more than 5 images')}}</p></div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                <div class="sliderUploadedImages ">
                                                    <div id='all_img' style='display:  @if(count($user->sliders)>0)block  @endif' class="popup-gallery2">
                                                    <div class="row"id='slider_imgs_div' >
                                                            @if(count($user->sliders)>0)
                                            @foreach($user->sliders as $slide)
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 im_slide">
                                                            <div class="formItemVendor"> 
                                                                <a href="{{Voyager::image($slide->image)}}" class="Itemmm">
                                                                    <div class="sliderimgItem">
                                                                        <img src="{{Voyager::image($slide->image)}}"> 
                                                                        <button type="button" data-proid='{{$slide->id}}' class="Removee RemoveSlide" >
                                                                           <i class="far fa-trash-alt"></i>
                                                                        </button>
                                                                    </div>
                                                                </a>
                                                                
                                                                 
                                                             </div> 
                                                            </div>
                                               @endforeach
                                         @endif
                                                        <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
                                                        <!--    <div class="formItemVendor"> -->
                                                        <!--         <img src="{{asset('frontUI/assets/img/cladreximg/media1.png')}}"> -->
                                                        <!--     </div> -->
                                                            
                                                        <!--</div>-->
                                                        <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
                                                        <!--    <div class="formItemVendor"> -->
                                                        <!--         <img src="{{asset('frontUI/assets/img/cladreximg/media1.png')}}"> -->
                                                        <!--     </div> -->
                                                            
                                                        <!--</div>-->
                                                    </div>
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                          {{--  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.Company Category')}} </span>


                                                    <select id='category_id' name='category_id' class="form-control select2">
                                                        @if($categories)
                                                        @foreach($categories as $category)
                                                        <option value="{{$category->id}}" @if(!empty($user->details)) @if($category->id == $user->details->category_id) selected @endif @endif >{{$category->name}}</option>
                                                        @endforeach
                                                        @endif

                                                    </select>
                                                </div>
                                            </div>--}}
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.Company Category')}} </span>


                                                    <select id='campany_category_id' name='campany_category_id' class="form-control select2">
                                           @if($campany_categories)
                                                        @foreach($campany_categories as $category)
                                                           <option value="{{$category->id}}" @if(!empty($user->details)) @if($category->id == $user->details->campany_category_id) selected @endif @endif >{{$category->name}}</option>
                                                      
<!--<option value="Trader">Trader</option>-->
<!--<option value="Manufactuer">Manufactuer</option>-->
<!--<option value="Service Provider">Service Provider</option>-->
       @endforeach
                                                        @endif

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.Industry Fields')}}</span>


                                                    <select id='industry_field_id' name='industry_field_id' class="form-control select2">
                                                        @if($fields)
                                                        @foreach($fields as $field)
                                                        <option value="{{$field->id}}" @if(!empty($user->details))@if($field->id == $user->details->industry_field_id) selected @endif @endif>{{$field->name}}</option>
                                                        @endforeach
                                                        @endif

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-nd-6 col-sm-6 col-xs-12 repeater">
                                                <div class="formItemVendor">
                                                    <div class="" data-repeater-list="emails">

                                                        <button data-repeater-create type="button" class="addMore" title="Add Mor Emails">
                                                            <i class="fas fa-plus iconpluss"></i>
                                                        </button>

                                                        @if(count($user->emails)>0 )

                                                        @foreach($user->emails as $email)


                                                        <div class="repeterdev" data-repeater-item>
                                                            <span>{{__('front.Email')}}</span>
                                                            <input type="text" class="inputvendor" name="email" id='email' value='{{$email->email}}' placeholder="Your email">
                                                            <!--<input data-repeater-delete type="button" class="btn btn-danger" value="{{ __('Delete') }}" />-->
                                                            <button data-repeater-delete type="button" class="btn btn-danger deleterepeat" title="Add Mor Emails">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>


                                                        @endforeach
                                               
                                                        @else
                                                        <div class="repeterdev" data-repeater-item>
                                                            <span>{{__('front.Email')}}</span>
                                                            <input type="text" class="inputvendor" name="email" id='email' placeholder="Your email">
                                                            <!--<input data-repeater-delete type="button" class="btn btn-danger" value="{{ __('Delete') }}" />-->
                                                            <button data-repeater-delete type="button" class="btn btn-danger deleterepeat" title="Add Mor Emails">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>

                                                        @endif
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-nd-6 col-sm-6 col-xs-12 repeater">
                                                <div class="formItemVendor">
                                                    <div class="" data-repeater-list="contacts">
                                                        <button data-repeater-create type="button" class="addMore" title="Add Mor Contact Number">
                                                            <i class="fas fa-plus iconpluss"></i>
                                                        </button>
                                                       
                                                        @if(count($user->contacts)>0)

                                                        @foreach($user->contacts as $contact)
                                                        <div class="repeterdev" data-repeater-item>
                                                            <span>{{__('front.Contact Number')}}</span>
                                                            <input type="text" class="inputvendor" name="contact" id='contact' value='{{$contact->contact}}' placeholder="Your name">
                                                            <!--<input data-repeater-delete type="button" class="btn btn-danger" value="{{ __('Delete') }}" />-->
                                                            <button data-repeater-delete type="button" class="btn btn-danger deleterepeat" title="Add Mor Emails">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>



                                                        @endforeach
                                             
                                                        @else
                                                        <div class="repeterdev" data-repeater-item>
                                                            <span>{{__('front.Contact Number')}}</span>
                                                            <input type="text" class="inputvendor" name="contact" id='contact' placeholder="Your name">
                                                            <!--<input data-repeater-delete type="button" class="btn btn-danger" value="{{ __('Delete') }}" />-->
                                                            <button data-repeater-delete type="button" class="btn btn-danger deleterepeat" title="Add Mor Emails">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                        @endif
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style='display:none'>
                                                <div class="formItemVendor ">
                                                    <span>{{__('front.Company Picture')}} </span>
                                                    <div class="input-group image-preview fileuploaaad">
                                                        <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                                        <span class="input-group-btn">
                                                            <div class="btn btn-default image-preview-input">

                                                                <span class="far fa-folder-open"></span>
                                                                <span class="image-preview-input-title">Browse</span>
                                                                <input oninput="this.className = ''" id='location_img' name='location_img' type="file" accept="all" name="input-file-preview" />
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                           
                                            
                                            <div class="col-lg-6 col-nd-6 col-sm-6 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.Location Url')}}</span>
                                                    <input type="text" id='location_url' name='location_url' value='{{$user->details->location_url ?? "" }}' class="inputvendor" value="Location Name" placeholder="{{__('front.Location Url')}}">

                                                    <a class="btnInfoPopover addMore" data-toggle="popover" data-trigger="hover" data-content="من فضلك قم بكتابة الكود الخاص بالخريطه الخاصه بك من جوجل ماب "><i class="fas fa-info"></i> </a>
                                                    
                                                </div>
                                            </div>
                              
                                            <!--<div class="col-lg-6 col-nd-6 col-sm-6 col-xs-12">-->
                                            <!--    <div class="formItemVendor">-->
                                            <!--        <span>{{__('front.Location Show')}}</span>-->
                                            <!--        <input type="text" id='location_map' name='location_map' value='{{$user->details->location_map ?? ""}}' class="inputvendor" value="Location Name" placeholder="{{__('front.Location Show')}}">-->

                                            <!--        <button type="button" class="addMore" data-toggle="modal" data-target="#Popuplocation" title="Show Location">-->
                                            <!--            <i class="fas fa-map-marker-alt iconpluss"></i>-->
                                            <!--        </button>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                             <div class="col-lg-6 col-nd-6 col-sm-6 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.Company Address')}}</span>
                                                    <input type="text" id='address' name='address' value='{{ $user->details->address ?? ""}}' class="inputvendor" placeholder="{{__('front.Company Address')}}">
                                                </div>
                                            </div>
                                            
                                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.city')}}</span>


                                                    <select id='city_id' name='city_id' class="form-control select2">
                                                        @if($Cities)
                                                        @foreach($Cities as $city)
                                                        <option value="{{$city->id}}" @if(!empty($user->details))@if($city->id == $user->details->city_id) selected @endif @endif>{{$city->name}}</option>
                                                        @endforeach
                                                        @endif

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.Start Date Company')}}  </span>
                                                    <div class="input-group" id="datepicker2">
                                                        <input type="date" id='start_date' value='{{$user->details->start_date ?? ""}}' name='start_date' class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">

                                                        <span class="input-group-text bg_Brawen_iconinput"><i class="fas fa-calendar-alt"></i></span>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="formItemVendor ">
                                                    <span>{{__('front.Certification')}}</span>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="input-group image-preview fileuploaaad">
                                                        <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                                        <span class="input-group-btn">
                                                            <div class="btn btn-default image-preview-input">

                                                                <span class="far fa-folder-open"></span>
                                                                <span class="image-preview-input-title">{{__('front.Browse')}}</span>
                                                                <input oninput="this.className = ''" accept="image/*" id='certification' name='certification[]' type="file"name="input-file-preview"  accept="image/*" multiple  onchange="changePreviewCert(event);" />
                                                            </div>
                                                        </span>
                                                    </div>
                                                        </div>
                                                        <div class="col-lg-5 col-md-5 col-sm-11 col-xs-12" style='display:none'>
                                                            <div class="formItemVendor">
                                                     
                                                        <input type="text"  name='cert_title' id='cert_title' value='' class="inputvendor" value="Location Name" placeholder="certification Name">
    
                                                    </div>
                                                        </div>
                                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12" style="display:none">
                                                            <div class="formItemVendor">
                                                     
                                                    
    
                                                        <button type="button" id='add_cert'class="addMore" title="Add Mor Emails" style="top: 0">
                                                            <i class="fas fa-plus iconpluss"></i>
                                                        </button>
                                                    </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    <div class="CertificationPopUp">
                                                        <div class="row" id='cert_imgs'>
                                                        @if(count($user->certification)>0)
                                            @foreach($user->certification as $cert)
                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 cert_slide">
                                                            <div class="formItemVendor"> 
                                                            <a href="{{Voyager::image($cert->image)}}" class="iteamss">
                                                                <div class="CertificationItem">
                                                                <img src="{{Voyager::image($cert->image)}}"> 
                                                                <!--<p>CV Certi</p>-->
                                                                 <button type="button" data-proid='{{$cert->id}}' class="Removee RmoveCert" >
                                                                   <i class="far fa-trash-alt"></i>
                                                                </button>
                                                            </div>
                                                                
                                                            </a>
                                                            
                                                                 
                                                             </div> 
                                                            </div>
                                            @endforeach
                                            @endif
                                                     
                                                    </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-nd-12 col-sm-12 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.Company Brife / About Us')}}</span>
                                                   </div>
                                                
                                                 <textarea id='campany_about' name='campany_about' required class="textarea">{{$user->details->campany_about ?? ""}}</textarea>
                                                 
                                            </div>
                                            
                                            
                                            <div class="col-lg-12 col-nd-12 col-sm-12 col-xs-12">
                                                <div class="formItemVendor">
                                                    <span>{{__('front.Company Brife / About AR')}} </span>
                                                   </div>
                                                
                                                 <textarea id='campany_about_ar' name='campany_about_ar' required class="textarea">{{$user->details->campany_about_ar ?? ""}}</textarea>
                                                 
                                            </div>
                                            
                                          
              
                                        {{--    <div class="col-lg-12 col-nd-12 col-sm-12 col-xs-12 repeater" style='display:none'>

                                                <div class="formItemVendor">
                                                    <div class="" data-repeater-list="pmcs">
                                                        <button type="button" data-repeater-create class="addMore" title="Add More">
                                                            <i class="fas fa-plus iconpluss"></i>
                                                        </button>
                                                        
                                                       
                                                        
                                                        @if(count($user->pmcs)>0)

                                                        @foreach($user->pmcs as $pmc)
                                                        <div class="repeterdev" data-repeater-item>
                                                            <span>{{__('front.Product Main Category')}} (PMC) </span>
                                                            <input type="text" class="inputvendor" name="cat_name" value='{{$pmc->cat_name}}' id='cat_name' placeholder="">
                                                              <input type="hidden" id='cat_id' name='cat_id' value='{{$pmc->id}}'>
                                                            <!--<input data-repeater-delete type="button" class="btn btn-danger" value="{{ __('Delete') }}" />-->
                                                            <button data-repeater-delete type="button" class="btn btn-danger deleterepeat" title="Add Mor PMC">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>

                                                        </div>


                                                        @endforeach
                                                       
                                                        @else
                                                      
                                                        <div class="repeterdev" data-repeater-item>
                                                            <span>{{__('front.Product Main Category')}} (PMC) </span>
                                                            <input type="text" class="inputvendor" name="cat_name" id='cat_name' placeholder="">
                                                               <input type="hidden" id='cat_id' name='cat_id'>
                                                            <!--<input data-repeater-delete type="button" class="btn btn-danger" value="{{ __('Delete') }}" />-->
                                                            <button data-repeater-delete type="button" class="btn deleterepeat" title="Add Mor PMC">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                        @endif
                                                      
                                                    </div>
                                                </div>
                                            </div>

--}}
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="formItemVendor">
                                                    <button type="submit" class="btn btn-success ">
                                                        <i class="fas fa-check"></i> {{__('front.Add')}}
                                                    </button>

                                                    <a href="index.html" class="btn btn-danger " style="display: none">
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


@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>

<script src="{{asset('frontUI/assets/Libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontUI/assets/Libs/magnific-popup/lightbox.init.js')}}"></script>

<script>
	$(function(e) {
		$('#campany_about').richText();
        $('#campany_about_ar').richText();
	});
</script>


<script>
    $(document).ready(function() {
        
         
        $('#map_iframe_src').attr('src', $("#location_map").val());
        
        

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
      // ---------
     let certicications=[];
     let certicications_imgs=[];
    //   $(document).on('click', '#add_cert', function(){
    //       var cert_title= $('#cert_title').val();
    //       var TotalImages = $('#certification')[0].files.length;
    //         var images = $('#certification')[0];
            
    //           var files = $('#cert_title')[0].files;
               
    //       for (var i = 0; i < TotalImages; i++) {
    //         //   files[0]
    //           var row2 = {
    //                     "image": $('#certification')[0].files[i],
    //                     "title": cert_title,
                       
    //                 };
    //                 certicications.push(row2);
    //                 certicications_imgs.push($('#certification')[0].files[i]);
                    
    //           var reader = new FileReader();
    //         reader.readAsDataURL(images.files[i]);
    //          reader.onload = function(e) {
    //           $html='<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <div class="formItemVendor"> <div class="CertificationItem"><img src="'+e.target.result+'">  <p>'+cert_title+'</p><button type="button" class="Removee RemoveCert" >'+
    //                                                               '<i class="far fa-trash-alt"></i></button></div></div>  </div>'
                                                            
                                                            
                                                            
    //             $("#cert_imgs").append($html);
    //          }
    //     }
    //         //  changePreviewCert(e,k, v);
    //         });
        $('#add_btn').click(function() {
            event.preventDefault();

                            
            var form = new FormData();
            form.append('campany_name_en', $('#campany_name_en').val());
            form.append('campany_name_ar', $('#campany_name_ar').val());
            form.append('campany_category_id', $('#campany_category_id').val());
            form.append('industry_field_id', $('#industry_field_id').val());
            form.append('emails', $('#emails').val());
            form.append('contacts', $('#contacts').val());
            form.append('location_url', $('#location_url').val());
            form.append('location_map', $('#location_map').val());
            form.append('address', $('#address').val());
            form.append('start_date', $('#start_date').val());
            form.append('campany_about', $('#campany_about').val());
            
            form.append('certicications', JSON.stringify(certicications));
            form.append('certicications_imgs', certicications_imgs);
      



            // var images = $('#image')[0];


            // form.append('image', images.files[0]);

            $.ajax({
                url: "{{route('vendor_update_profile')}}",
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

                success: function(response) {
                    // location.reload();
                    // $(".alert-success-message3").css("display", "block");
                    // $(".alert-success-message3").html('<P style="text-align:center">Thank you.').hide()
                    //     .fadeIn(1500, function() {
                    //         $('.alert-success-message3');
                    //     }).fadeOut(1500, function() {
                    //         $('.alert-success-message3');
                    //     }).reset();
                },
            });

        });

     function changePreviewCert(e,k, v) {
        var files = e.target.files;
        // console.log(files)
        // $("#slider_imgs_div").empty();
        // $("#cert_imgs").css("display", "block");
        $.each(files, function(key, file) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(e) {
                // $html="  <div class='formItemVendor' id='slider_imgs'><img id='prev_img' src='"+e.target.result+"'></div> ";
                // $html=  " <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'><div class='formItemVendor'> <img src='"+e.target.result+"'>  </div> </div>";
                
                    $html='<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 cert_slide"> <div class="formItemVendor"> <a href="'+e.target.result+'" class="iteamss"> <div class="CertificationItem"><img src="'+e.target.result+'"> <button type="button" class="Removee RmoveCert" ><i class="far fa-trash-alt"></i></button></div> </a></div>  </div>'
                                                            
                                                            
                                                            
                $("#cert_imgs").append($html);
                // $("#prev_img").attr("src", e.target.result);
             

            }
        });
    };
    
       $(document).on('click', '.RmoveCert', function(){ 
   
        var id = $(this).data('proid');
            var btn=$(this);
              var url = "{{ route('deleteCert', ":id") }}";
        url = url.replace(':id', id);
 if(id>0){

        $.ajax({
        
            url:url ,
            type: "GET",

            success: function(response) {

btn.closest('.cert_slide').remove();
            },
            


    })}else{
  
btn.closest('.cert_slide').remove();
}
});
    // ---------
     function changePreview(e, k, v) {
        var files = e.target.files;
        console.log(files)
        
        var numItems = $('.im_slide').length;
        var  fileCount = files.length;
        var total_imgs=numItems+fileCount;
        // alert(total_imgs);
        // $("#slider_imgs_div").empty();
        // $("#slider_imgs_div").css("display", "block");
        $.each(files, function(key, file) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(e) {
                // $html="  <div class='formItemVendor' id='slider_imgs'><img id='prev_img' src='"+e.target.result+"'></div> ";
                if(total_imgs <=5){
                    $html=  " <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 im_slide'><div class='formItemVendor'> <a href='"+e.target.result+"' class='Itemmm'> <div class='sliderimgItem'> <img src='"+e.target.result+"'> <button type='button' class='Removee RemoveSlide' ><i class='far fa-trash-alt'></i> </button>  </div> </a> </div> </div>";
                $("#slider_imgs_div").append($html);
                }
                else    $("#count_img_error").css("display", "block");
                
                // $("#prev_img").attr("src", e.target.result);
             

            }
        });
    };
      $(document).on('click', '.RemoveSlide', function(){ 
   
        var id = $(this).data('proid');
        var btn=$(this);
        var url = "{{ route('deleteSlide', ":id") }}";
        url = url.replace(':id', id);
 if(id>0){

        $.ajax({
            url: url,
       
            type: "GET",

            success: function(response) {
// $(this).parent().find('.sliderimgItem').remove(); 
btn.closest('.im_slide').remove();
            },
            


    })}else{
    // alert('hi');
    $(this).closest('.im_slide').remove();
// $(this).parent().find('div.sliderimgItem').remove();
}
});
      function changePreview2(e, k, v) {
        var files = e.target.files;
        // console.log(files)
        $("#logo_imgs_div").empty();
        $("#logo_imgs_div").css("display", "block");
        $.each(files, function(key, file) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(e) {
                // $html="  <div class='formItemVendor' id='slider_imgs'><img id='prev_img' src='"+e.target.result+"'></div> ";
                $html=  " <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'><div class='formItemVendor'> <img src='"+e.target.result+"'>  </div> </div>";
                $("#logo_imgs_div").empty().append($html);
                // $("#prev_img").attr("src", e.target.result);
             

            }
        });
    };
    
         $(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear_logo').click(function(){
        $('.image-preview_logo').attr("data-content","").popover('hide');
        $('.image-preview-filename_logo').val("");
        $('.image-preview-clear_logo').hide();
        $('.image-preview-input_logo input:file').val("");
        $(".image-preview-input-title_logo").text("Browse"); 
    }); 
    // Create the preview image
    $("#logo_btn").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title_logo").text("Change");
            $(".image-preview-clear_logo").show();
            $(".image-preview-filename_logo").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview_logo").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
    
    // --slider--
    // Clear event
    $('.image-preview-clear_slider').click(function(){
        $('.image-preview_slider').attr("data-content","").popover('hide');
        $('.image-preview-filename_slider').val("");
        $('.image-preview-clear_slider').hide();
        $('.image-preview-input_slider input:file').val("");
        $(".image-preview-input-title_slider").text("Browse"); 
    }); 
    // Create the preview image
    $("#slider_btn").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title_slider").text("Change");
            $(".image-preview-clear_slider").show();
            $(".image-preview-filename_slider").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview_slider").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
// ---------    
    $("#location_map").change(function (){  
        $('#map_iframe_src').attr('src',$(this).val());
        // alert('hi');
        
    });
  
 
});
</script>

<script>
    $(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>
@endsection