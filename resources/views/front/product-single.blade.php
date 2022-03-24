@extends('front.layouts.app')

@section('content')
@php
$user=Auth::user();
@endphp

@section('content')

<div class="sectionfixd fixedsecotherpage">
    <div class="overlay">
        <div class="row">

            <div class="col-lg-12 col-md-12">

                <div class="centerside">
                    <div class="centersidecont">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: none;">
                                <div class="addside">
                                    <div class="addcontent">
                                        <p>Adds</p>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="productDetails">
                                    <div class="prodcdetcont">
                                        <div class="row">

                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">





                                                <div class="card NewSliderProduct">
                                                    <div class="card-body">



                                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                                                            <div class="carousel-inner popup-gallery2" role="listbox">
                                                                @if(!empty($product->media))
                                                                @foreach($product->media as $media)
                                                                @if($media->type == 'video')
                                                                <div class="carousel-item @if($loop->first) active @endif">
                                                                    <div class="Vifeosss">
                                                                        <video class="VedioPorUpload d-block img-fluid" controls>
                                                                            <source src="{{Voyager::image($media->video)}}" type="video/mp4">
                                                                        </video>
                                                                    </div>



                                                                </div>
                                                                @elseif($media->type == 'image')
                                                                <div class="carousel-item @if($loop->first) active @endif">
                                                                    <a class="imagesss" href="{{Voyager::image($media->image)}}">
                                                                        <img class="d-block img-fluid" src="{{Voyager::image($media->image)}}" alt="First slide">
                                                                    </a>
                                                                </div>

                                                                @endif
                                                                @endforeach
                                                                @else
                                                                <div class="carousel-item">
                                                                    <a class="imagesss" href="{{asset('frontUI/assets/img/cladreximg/slide-img1.jpg')}}">
                                                                        <img class="d-block img-fluid" src="{{asset('frontUI/assets/img/cladreximg/slide-img1.jpg')}}" alt="First slide">
                                                                    </a>
                                                                </div>
                                                                @endif

                                                            </div>
                                                            <ol class="carousel-indicators">
                                                                @if(!empty($product->media))
                                                                @foreach($product->media as $k=>$media)
                                                                @if($media->type == 'image')


                                                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$k}}" class="@if($loop->first) active @endif">
                                                                    <img class="d-block img-fluid" src="{{Voyager::image($media->image)}}" alt="First slide">
                                                                </li>
                                                                @else($media->type == 'video')
                                                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$k}}" class="@if($loop->first) active @endif">
                                                                    <img class="d-block img-fluid" src="{{asset('frontUI/assets/img/cladreximg/video-camera.png')}}" alt="First slide">
                                                                </li>
                                                                @endif

                                                                @endforeach

                                                                @endif
                                                                <!-- <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1">
                                                                    <img class="d-block img-fluid" src="{{asset('frontUI/assets/img/cladreximg/slide-img1.jpg')}}" alt="First slide">
                                                                </li> -->
                                                                <!-- <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2">
                                                                    <img class="d-block img-fluid" src="{{asset('frontUI/assets/img/cladreximg/slide-img1.jpg')}}" alt="First slide">
                                                                </li> -->

                                                            </ol>
                                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">{{__('front.Previous')}}</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">{{__('front.Next')}}</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="sharfavor">
                                                    <ul>
                                                        <li><a href="#" class="pppp"><i class="far fa-star"></i> {{__('front.Favorites')}}</a></li>
                                                        <li>
                                                            <div class="dropdown">
                                                                <button class=" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-share-alt"></i> {{__('front.Share')}}
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item facebook" href="#"><i class="fab fa-facebook-square"></i></a>
                                                                    <a class="dropdown-item twitter" href="#"><i class="fab fa-twitter-square"></i></a>
                                                                    <a class="dropdown-item pinterest" href="#"><i class="fab fa-pinterest-square"></i></a>
                                                                    <a class="dropdown-item linkedin" href="#"><i class="fab fa-linkedin"></i></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="deataatapro">


                                                    <div class="name">
                                                        <h2>{{$product->product_name ?? ''}}</h2>
                                                    </div>
                                                    <hr>
                                                    <!--<div class="lastchat">-->
                                                    <!--    <div class="row">-->
                                                    <!--        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
                                                    <!--            <div class="lastPrice">-->
                                                    <!--                <button type="button" class="btn_lastprice" data-toggle="modal" data-target="#modallastprice">-->
                                                    <!--                  {{__('front.Get Latest Price')}} <i class="fas fa-chevron-right"></i>-->
                                                    <!--                </button>-->
                                                    <!--            </div>-->
                                                    <!--        </div>-->
                                                    <!--        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
                                                    <!--            <div class="chatwith">-->
                                                    <!--                <button type="button" class="btn_Chate" data-toggle="modal" data-target="#modalchatee">-->
                                                    <!--                  <i class="fab fa-rocketchat"></i>  {{__('front.Chat with Supplier')}}. -->
                                                    <!--                </button>-->
                                                    <!--            </div>-->
                                                    <!--        </div>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->


                                                    <div class="NewPrice">
                                                        <h2 class="Tilte">{{__('front.Price')}} : </h2>
                                                        <div class="PriCont">
                                                            <h2 class="Priceeeee"><span class="Currency">{{$product->currency->name ?? ''}}</span><span class="price">{{$product->min_price}}</span> - <span class="Currency">{{$product->currency->name ?? ''}}</span><span class="price">{{$product->max_price}}</span> / <span class="Unites">{{$product->unit->name ?? ''}}</span> </h2>
                                                            <h2 class="Priceeeee MINORDER"> {{__('front.Min')}} {{__('front.Order')}} {{__('front.Qty')}} = <span class="Currency">{{$product->min_order}}</span><span class="price">{{$product->unit->name ?? ''}}</span> </h2>
                                                        </div>
                                                    </div>

                                                    <div class="copanyDetails">

                                                        <a href="{{route('vendor_website',['vendor_id'=>$product->user->id ?? null,'vendor_name'=>$product->user->name ?? ''])}}" class="companyname">
                                                            <div class="imgcomp">
                                                                <img src="{{Voyager::image($product->user->details->logo ?? $product->user->avatar ?? '')}} ">
                                                            </div>
                                                            <div class="Namecompany">
                                                                <img src="http://etwasel.com/public/frontUI/assets/img/cladreximg/jewels.png">

                                                                <h2>{{$product->user->details->campany_name ?? 'Campany Name'}}</h2>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="table_backg" style='display:none'>
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <th colspan="2">{{__('front.Min. Order/ Reference FOB Price')}}
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td width="150" style="display:none">{{$product->min_order}} {{$product->unit->name ?? ''}}</td>
                                                                    <td>
                                                                        <strong class="red">{{__('front.Min')}} {{$product->min_price}} {{$product->currency->name ?? ''}} </strong>{{$product->min_order}} {{$product->unit->name ?? ''}}
                                                                        <strong class="red">{{__('front.Max')}} {{$product->max_price}} {{$product->currency->name ?? ''}} </strong>{{$product->max_order}} {{$product->unit->name ?? ''}}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <!--        <div class="table_nonbg">-->
                                                    <!--            <table>-->
                                                    <!--                <tbody>-->
                                                    <!--                    <tr>-->
                                                    <!--                        <td colspan="2">-->
                                                    <!--                       {{$product->product_description}} </td>-->
                                                    <!--                    </tr>-->
                                                    <!--                   <tr>-->
                                                    <!--                        <th width="160" class="th-label">{{__('front.Port')}}:</th>-->
                                                    <!--                        <td> {{$product->port}} </td>-->
                                                    <!--                    </tr>-->
                                                    <!--                    <tr>-->
                                                    <!--                        <th width="160" class="th-label">{{__('front.Production Capacity')}}:</th>-->
                                                    <!--                        <td>{{$product->capacity}} </td>-->
                                                    <!--                    </tr>-->
                                                    <!--                    <tr>-->
                                                    <!--                        <th width="160" class="th-label">{{__('front.Payment Terms')}}:</th>-->
                                                    <!--                        <td>{{$product->payment_terms}}</td>-->
                                                    <!--                    </tr>-->
                                                    <!--                </tbody>-->
                                                    <!--</table>-->
                                                    <!--        </div>-->

                                                    <div class="underlinr"></div>


                                                    <div class="addcontact">
                                                        <a href="#ContactSUPP" class="btn_addcont"><i class="far fa-envelope"></i> {{__('front.Contact Now')}}</a>
                                                    </div>





                                                </div>
                                            </div>


                                            <div lang="col-lg-12 col-md-12 col-sm-12 col-xs-12" style='display:none'>
                                                <div class="basicinfo">
                                                    <h2>Basic Info.</h2>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="basicItemsss">
                                                                <div class="itemdark">
                                                                    <p>Model NO.</p>
                                                                </div>
                                                                <div class="itemwight">
                                                                    <p>{{$product->model_num}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="basicItemsss">
                                                                <div class="itemdark">
                                                                    <p>Clock Function.</p>
                                                                </div>
                                                                <div class="itemwight">
                                                                    <p>{{$product->clock_function}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="basicItemsss">
                                                                <div class="itemdark">
                                                                    <p>Pedometer</p>
                                                                </div>
                                                                <div class="itemwight">
                                                                    <p>{{$product->pedometer}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="basicItemsss">
                                                                <div class="itemdark">
                                                                    <p>ECG Monitoring</p>
                                                                </div>
                                                                <div class="itemwight">
                                                                    <p>{{$product->ecg_monitoring}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="basicItemsss">
                                                                <div class="itemdark">
                                                                    <p>SpO2 Monitoring</p>
                                                                </div>
                                                                <div class="itemwight">
                                                                    <p>{{$product->spo_monitoring}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="basicItemsss">
                                                                <div class="itemdark">
                                                                    <p>Trademark</p>
                                                                </div>
                                                                <div class="itemwight">
                                                                    <p>{{$product->trademark}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="basicItemsss">
                                                                <div class="itemdark">
                                                                    <p>Transport Package</p>
                                                                </div>
                                                                <div class="itemwight">
                                                                    <p>{{$product->transport_package}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="basicItemsss">
                                                                <div class="itemdark">
                                                                    <p>Specification</p>
                                                                </div>
                                                                <div class="itemwight">
                                                                    <p>{{$product->specification}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="basicItemsss">
                                                                <div class="itemdark">
                                                                    <p>Origin</p>
                                                                </div>
                                                                <div class="itemwight">
                                                                    <p>{{$product->origin}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="basicItemsss">
                                                                <div class="itemdark">
                                                                    <p>HS Code</p>
                                                                </div>
                                                                <div class="itemwight">
                                                                    <p>{{$product->hs_code}}</p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <div class="tapessrev">
                                                    <div class="col-md-12">

                                                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                                            <ul id="myTab" class="nav nav-tabs" role="tablist">

                                                                <li role="presentation" class="active">
                                                                    <a href="#carl" role="tab" id="carl-tab" data-toggle="tab" aria-controls="carl">{{__('front.Specification')}}</a>
                                                                </li>

                                                            </ul>
                                                            <div id="myTabContent" class="tab-content">

                                                                <div role="tabpanel" class="tab-pane fadeIn active" id="carl" aria-labelledby="carl-tab">
                                                                    <div class="tabcontent-grids">
                                                                        <div class="disctap">
                                                                            <h2>{{__('front.Product Information')}}</h2>
                                                                            <div class="specifcat">
                                                                                <p>
                                                                                    {!! html_entity_decode($product->product_desc) !!} </p>
                                                                                <div class="sepcitemss">
                                                                                    <div class="sepcitm" style='display:none'>
                                                                                        <h3>Fabric & care</h3>
                                                                                        <div class="liss">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <p>Faux suede fabric</p>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <p>Gold tone metal hoop handles.</p>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <p>RI branding</p>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <p>Snake print trim interior</p>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <p>Adjustable cross body strap</p>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <p>Height : 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</p>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--<div class="sepcitm">-->
                                                                                    <!--    <h3>Available Sizes</h3>-->
                                                                                    <!--    <div class="liss">-->
                                                                                    <!--        <ul>-->
                                                                                    <!--            <li>-->
                                                                                    <!--                <p>One size</p>-->
                                                                                    <!--            </li>-->


                                                                                    <!--        </ul>-->
                                                                                    <!--    </div>-->
                                                                                    <!--</div>-->
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



                                            <div lang="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="basicinfo" id="ContactSUPP">
                                                    <h2>{{__('front.Send your message to this supplier')}} </h2>
                                                    <div class="formmessage">
                                                        <form action="#" method="post">
                                                            @csrf
                                                            <div class="alert alert-success alert-success-message" style="display:none">
                                                                {{ Session::get('success') }}
                                                            </div>
                                                            <div class="alert alert-danger " style="display:none">
                                                                {{__('front.please fill all records')}}
                                                            </div>
                                                            <input type="hidden" id='user_id' name='user_id' value='{{$product->user_id ?? ''}}'>
                                                            <div class="row">

                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="formitem">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                                                                <span class="tititle">{{__('front.from')}} :</span>
                                                                            </div>

                                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                <div class="inpuyss">
                                                                                    <input type="email" id='email' name='email' placeholder=" {{__('front.Enter Your Email')}}" class="inputformmd">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="formitem">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                                                                <span class="tititle">{{__('front.to')}} :</span>
                                                                            </div>

                                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                <div class="inpuyss">
                                                                                    <img src="{{Voyager::image($product->user->details->logo ?? '')}}"> <span class="name">{{$product->user->details->campany_name ??''}}</span>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="formitem">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                                                                <span class="tititle">{{__('front.Message')}}</span>
                                                                            </div>
                                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                <div class="inpuyss">
                                                                                    <textarea class="inputetxtsts" id='message' name='message' placeholder="{{__('front.message2')}}"></textarea>
                                                                                    <!--<span class="notes">Enter between 20 to 4,000 characters.</span>-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="formitem">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">

                                                                            </div>
                                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                                                <div class="inpuyss">
                                                                                    <button type="submit" class="Btn_sassa contact_form ">{{__('front.Send')}}</button>
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

                                            <div class="col-lg-12">
                                                <div class="productOwl PopuProd">
                                                    <div class="title">
                                                        <!--<span>Product</span>-->
                                                        <h2>{{__('front.You Also May Like')}} </h2>
                                                    </div>
                                                    <div class="Products PopuProdtemsss">
                                                        <div class="owl-carousel owl-theme prprprOwlDetals">
                                                            @if(!empty($like_produts))
                                                            @foreach($like_produts as $like_produt)
                                                            <div class="item">
                                                                <div class="PopuProdItem">
                                                                    <div class="imges">
                                                                    @if(count($product->media) >0)
                                                               
                                                               @foreach($like_produt->media as $key=>$media)
                                                               @if($loop->first)                                       
                                                               @if($media->type == 'image'  )
                                                           
                                                                 <img src="{{Voyager::image($media->image ?? 'default_product.png')}}">
                                                                @endif
                                                                 @if($media->type == 'video'  )
                                                             
                                                                 <video src="{{Voyager::image($media->video ?? 'default_product.png')}}">
                                                                @endif
                                                                
                                                                 @endif
                                                                
                                                               @endforeach
                                                               
                                                               @else 
                                                             
                                                               <img src="{{Voyager::image($like_produt->image)}}" onerror="this.onerror=null;this.src='{{asset("frontUI/assets/img/cladreximg/Product/26.png")}}';">
                                                               @endif
                                                               
                                                                 {{--       <img src="{{asset('frontUI/assets/img/cladreximg/Product/26.png')}}">--}}
                                                                    </div>
                                                                    <div class="buttonsssRight">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-sync"></i>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="details">
                                                                        <div class="categoru">
                                                                            <a href="#" class="catlinl">{{$like_produt->product_name ?? ''}}</a>
                                                                        </div>
                                                                        <div class="nameprod">
                                                                            <a href="NewProductdetails.html" class="namlink">  {!! html_entity_decode($like_produt->product_description) !!}</a>
                                                                        </div>
                                                                        <div class="price">
                                                                            <div class="prod_price" title="FOB Price: {{$like_produt->currency->name ?? ''}} {{$product->min_price}}-{{$product->max_price}} / {{$like_produt->unit->name ?? ''}}">
                                                                                <!--<span class="label">FOB Price: </span>-->
                                                                                <span class="value">{{$like_produt->currency->name ?? ''}} {{$product->min_price}}-{{$product->max_price}}</span>
                                                                                <!--<span class="unit">/ Piece</span>-->
                                                                            </div>
                                                                        </div>
                                                                        <div class="min_order" title="Min. Order: 1 Piece">
                                                                            <span class="label">{{__('front.Min')}}. {{__('front.Order')}}: </span>
                                                                            <span class="value">{{$like_produt->min_order}} {{$like_produt->unit->name ?? ''}}</span>
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                            @endforeach
                                                            @endif
                                                            <div class="item">
                                                                <div class="PopuProdItem">
                                                                    <div class="imges">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/26.png')}}">
                                                                    </div>
                                                                    <div class="buttonsssRight">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-sync"></i>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="details">
                                                                        <div class="categoru">
                                                                            <a href="#" class="catlinl">zara official</a>
                                                                        </div>
                                                                        <div class="nameprod">
                                                                            <a href="NewProductdetails.html" class="namlink">Contec Tp500 Infrarrojo Digital Non Contact Body </a>
                                                                        </div>
                                                                        <div class="price">
                                                                            <div class="prod_price" title="FOB Price: US $300-450 / Piece">
                                                                                <!--<span class="label">FOB Price: </span>-->
                                                                                <span class="value">US $300-450 </span>
                                                                                <!--<span class="unit">/ Piece</span>-->
                                                                            </div>
                                                                        </div>
                                                                        <div class="min_order" title="Min. Order: 1 Piece">
                                                                            <span class="label">Min. Order: </span>
                                                                            <span class="value">1 Piece</span>
                                                                        </div>
                                                                        <!-- 

                                                                        <div class="finshlinks">
                                                                            <ul>
                                                                                <li>
                                                                                    <p class="text-muted mt-3">
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star"></i>
                                                                                    </p>
                                                                                </li>

                                                                                <li class="addbuton">
                                                                                    <button type="button" class="cart" data-toggle="modal" data-target="#exampleModalCenterquotaion">
                                                                                        <i class="bx bx-basket"></i>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div> -->
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <!-- <div class="item">
                                                                <div class="PopuProdItem">
                                                                    <div class="imges">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/27.png')}}">
                                                                    </div>
                                                                    <div class="buttonsssRight">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-sync"></i>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="details">
                                                                        <div class="categoru">
                                                                            <a href="#" class="catlinl">zara official</a>
                                                                        </div>
                                                                        <div class="nameprod">
                                                                            <a href="NewProductdetails.html" class="namlink">Contec Tp500 Infrarrojo Digital Non Contact Body </a>
                                                                        </div>
                                                                        <div class="price">
                                                                            <div class="prod_price" title="FOB Price: US $300-450 / Piece">
                                                                                <span class="label">FOB Price: </span>
                                                                                <span class="value">US $300-450 </span>
                                                                                <span class="unit">/ Piece</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="min_order" title="Min. Order: 1 Piece">
                                                                            <span class="label">Min. Order: </span>
                                                                            <span class="value">1 Piece</span>
                                                                        </div>


                                                                        <div class="finshlinks">
                                                                            <ul>
                                                                                <li>
                                                                                    <p class="text-muted mt-3">
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star "></i>
                                                                                        <i class="bx bxs-star"></i>
                                                                                    </p>
                                                                                </li>
                                                                                <li class="addbuton">
                                                                                    <button type="button" class="cart" data-toggle="modal" data-target="#exampleModalCenterquotaion">
                                                                                        <i class="bx bx-basket"></i>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div class="item">
                                                                <div class="PopuProdItem">
                                                                    <div class="imges">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/28.png')}}">
                                                                    </div>
                                                                    <div class="buttonsssRight">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-sync"></i>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="details">
                                                                        <div class="categoru">
                                                                            <a href="#" class="catlinl">zara official</a>
                                                                        </div>
                                                                        <div class="nameprod">
                                                                            <a href="NewProductdetails.html" class="namlink">Contec Tp500 Infrarrojo Digital Non Contact Body </a>
                                                                        </div>
                                                                        <div class="price">
                                                                            <div class="prod_price" title="FOB Price: US $300-450 / Piece">
                                                                                <span class="label">FOB Price: </span>
                                                                                <span class="value">US $300-450 </span>
                                                                                <span class="unit">/ Piece</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="min_order" title="Min. Order: 1 Piece">
                                                                            <span class="label">Min. Order: </span>
                                                                            <span class="value">1 Piece</span>
                                                                        </div>


                                                                        <div class="finshlinks">
                                                                            <ul>
                                                                                <li>
                                                                                    <p class="text-muted mt-3">
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star "></i>
                                                                                        <i class="bx bxs-star "></i>
                                                                                        <i class="bx bxs-star"></i>
                                                                                    </p>
                                                                                </li>
                                                                                <li class="addbuton">
                                                                                    <button type="button" class="cart" data-toggle="modal" data-target="#exampleModalCenterquotaion">
                                                                                        <i class="bx bx-basket"></i>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div class="item">
                                                                <div class="PopuProdItem">
                                                                    <div class="imges">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/29.png')}}">
                                                                    </div>
                                                                    <div class="buttonsssRight">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-sync"></i>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="details">
                                                                        <div class="categoru">
                                                                            <a href="#" class="catlinl">zara official</a>
                                                                        </div>
                                                                        <div class="nameprod">
                                                                            <a href="NewProductdetails.html" class="namlink">Contec Tp500 Infrarrojo Digital Non Contact Body </a>
                                                                        </div>
                                                                        <div class="price">
                                                                            <div class="prod_price" title="FOB Price: US $300-450 / Piece">
                                                                                <span class="label">FOB Price: </span>
                                                                                <span class="value">US $300-450 </span>
                                                                                <span class="unit">/ Piece</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="min_order" title="Min. Order: 1 Piece">
                                                                            <span class="label">Min. Order: </span>
                                                                            <span class="value">1 Piece</span>
                                                                        </div>


                                                                        <div class="finshlinks">
                                                                            <ul>
                                                                                <li>
                                                                                    <p class="text-muted mt-3">
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star"></i>
                                                                                        <i class="bx bxs-star "></i>
                                                                                        <i class="bx bxs-star"></i>
                                                                                    </p>
                                                                                </li>
                                                                                <li class="addbuton">
                                                                                    <button type="button" class="cart" data-toggle="modal" data-target="#exampleModalCenterquotaion">
                                                                                        <i class="bx bx-basket"></i>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div class="item">
                                                                <div class="PopuProdItem">
                                                                    <div class="imges">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/26.png')}}">
                                                                    </div>
                                                                    <div class="buttonsssRight">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-sync"></i>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="details">
                                                                        <div class="categoru">
                                                                            <a href="#" class="catlinl">zara official</a>
                                                                        </div>
                                                                        <div class="nameprod">
                                                                            <a href="NewProductdetails.html" class="namlink">Contec Tp500 Infrarrojo Digital Non Contact Body </a>
                                                                        </div>
                                                                        <div class="price">
                                                                            <div class="prod_price" title="FOB Price: US $300-450 / Piece">
                                                                                <span class="label">FOB Price: </span>
                                                                                <span class="value">US $300-450 </span>
                                                                                <span class="unit">/ Piece</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="min_order" title="Min. Order: 1 Piece">
                                                                            <span class="label">Min. Order: </span>
                                                                            <span class="value">1 Piece</span>
                                                                        </div>


                                                                        <div class="finshlinks">
                                                                            <ul>
                                                                                <li>
                                                                                    <p class="text-muted mt-3">
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star"></i>
                                                                                        <i class="bx bxs-star "></i>
                                                                                        <i class="bx bxs-star"></i>
                                                                                    </p>
                                                                                </li>
                                                                                <li class="addbuton">
                                                                                    <button type="button" class="cart" data-toggle="modal" data-target="#exampleModalCenterquotaion">
                                                                                        <i class="bx bx-basket"></i>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div class="item">
                                                                <div class="PopuProdItem">
                                                                    <div class="imges">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/27.png')}}">
                                                                    </div>
                                                                    <div class="buttonsssRight">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="bx bx-sync"></i>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="details">
                                                                        <div class="categoru">
                                                                            <a href="#" class="catlinl">zara official</a>
                                                                        </div>
                                                                        <div class="nameprod">
                                                                            <a href="NewProductdetails.html" class="namlink">Contec Tp500 Infrarrojo Digital Non Contact Body </a>
                                                                        </div>
                                                                        <div class="price">
                                                                            <div class="prod_price" title="FOB Price: US $300-450 / Piece">
                                                                                <span class="label">FOB Price: </span>
                                                                                <span class="value">US $300-450 </span>
                                                                                <span class="unit">/ Piece</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="min_order" title="Min. Order: 1 Piece">
                                                                            <span class="label">Min. Order: </span>
                                                                            <span class="value">1 Piece</span>
                                                                        </div>


                                                                        <div class="finshlinks">
                                                                            <ul>
                                                                                <li>
                                                                                    <p class="text-muted mt-3">
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star text-warning"></i>
                                                                                        <i class="bx bxs-star "></i>
                                                                                        <i class="bx bxs-star"></i>
                                                                                    </p>
                                                                                </li>
                                                                                <li class="addbuton">
                                                                                    <button type="button" class="cart" data-toggle="modal" data-target="#exampleModalCenterquotaion">
                                                                                        <i class="bx bx-basket"></i>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div> -->

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
            <div class="col-lg-3 col-md-3" style="display:none">
                <div class="fixedright">
                    <div class="rightsidecont">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display:none">
                                <div class="addside">
                                    <div class="addcontent">
                                        <p>Adds</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="sponserd">
                                    <div class="title">
                                        <h2 class="tititle">Sponserd</h2>
                                        <div class="line"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sponserditem">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="imgsponser">
                                                            <img src="{{asset('frontUI/assets/img/cladreximg/spon1.jpg')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="details">
                                                            <div class="dropdawenss">
                                                                <div class="dropdown">
                                                                    <button class=" dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span></span>
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                        <button class="dropdown-item" type="button">Action</button>
                                                                        <button class="dropdown-item" type="button">Another action</button>
                                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h2 class="name">Sale up to 50 %</h2>
                                                            <p class="des">Check Zara Officials Store on Mr1China</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="sponlink">
                                                            <a href="#" class="lisss">
                                                                See more
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sponserditem">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="imgsponser">
                                                            <img src="{{asset('frontUI/assets/img/cladreximg/spon2.png')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="details">
                                                            <div class="dropdawenss">
                                                                <div class="dropdown">
                                                                    <button class=" dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span></span>
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                        <button class="dropdown-item" type="button">Action</button>
                                                                        <button class="dropdown-item" type="button">Another action</button>
                                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h2 class="name">Sale up to 50 %</h2>
                                                            <p class="des">Check Zara Officials Store on Mr1China</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="sponlink">
                                                            <a href="#" class="lisss">
                                                                See more
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="addside">
                                    <div class="addcontent">
                                        <p>Adds</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="events">
                                    <div class="title">
                                        <h2 class="tititle">Upcoming Events</h2>
                                        <div class="line"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="eventItem">
                                                <div class="images">
                                                    <img src="{{asset('frontUI/assets/img/cladreximg/event1.png')}}">
                                                </div>
                                                <div class="details">
                                                    <a href="#" class="eventit">
                                                        Join China Now <span>Feb 18</span>
                                                    </a>
                                                    <p class="desp">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                                    <div class="imgessnum">
                                                        <div class="imgessasd">
                                                            <ul>
                                                                <li>
                                                                    <a class="imgitem" href="#">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/img1.png')}}">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="imgitem" href="#">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/img2.png')}}">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="imgitem" href="#">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/img3.png')}}">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="imgitem" href="#">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/img4.png')}}">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="imgitem" href="#">
                                                                        <i class="style_face5__44lk7 fas fa-plus-circle"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="numcom">
                                                            <p>11 Other Vendors are interested</p>
                                                        </div>
                                                    </div>
                                                    <div class="readlink">
                                                        <a href="#" class="lisss">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="eventItem">
                                                <div class="images">
                                                    <img src="{{asset('frontUI/assets/img/cladreximg/event1.png')}}">
                                                </div>
                                                <div class="details">
                                                    <a href="#" class="eventit">
                                                        Join China Now <span>Feb 18</span>
                                                    </a>
                                                    <p class="desp">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                                    <div class="imgessnum">
                                                        <div class="imgessasd">
                                                            <ul>
                                                                <li>
                                                                    <a class="imgitem" href="#">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/img1.png')}}">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="imgitem" href="#">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/img2.png')}}">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="imgitem" href="#">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/img3.png')}}">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="imgitem" href="#">
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/img4.png')}}">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="imgitem" href="#">
                                                                        <i class="style_face5__44lk7 fas fa-plus-circle"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="numcom">
                                                            <p>11 Other Vendors are interested</p>
                                                        </div>
                                                    </div>
                                                    <div class="readlink">
                                                        <a href="#" class="lisss">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="News">
                                    <div class="title">
                                        <h2 class="tititle">News</h2>
                                        <div class="line"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="NewsItem">
                                                <div class="headers">
                                                    <div class="iconNews">
                                                        <img src="{{asset('frontUI/assets/img/cladreximg/newsicon.jpg')}}">
                                                    </div>
                                                    <div class="Namenes">
                                                        <a href="#">China Airport </a>
                                                    </div>
                                                    <div class="time">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="newsbody">
                                                    <h6>News 1</h6>
                                                    <p class=" contnew">content of news 1</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="NewsItem">
                                                <div class="headers">
                                                    <div class="iconNews">
                                                        <img src="{{asset('frontUI/assets/img/cladreximg/newsicon.jpg')}}">
                                                    </div>
                                                    <div class="Namenes">
                                                        <a href="#">China Airport </a>
                                                    </div>
                                                    <div class="time">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="newsbody">
                                                    <h6>News 2</h6>
                                                    <p class=" contnew">content of news 2</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="NewsItem">
                                                <div class="headers">
                                                    <div class="iconNews">
                                                        <img src="{{asset('frontUI/assets/img/cladreximg/newsicon.jpg')}}">
                                                    </div>
                                                    <div class="Namenes">
                                                        <a href="#">China Airport </a>
                                                    </div>
                                                    <div class="time">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="newsbody">
                                                    <h6>News 3</h6>
                                                    <p class=" contnew">content of news 3</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="NewsItem">
                                                <div class="headers">
                                                    <div class="iconNews">
                                                        <img src="{{asset('frontUI/assets/img/cladreximg/newsicon.jpg')}}">
                                                    </div>
                                                    <div class="Namenes">
                                                        <a href="#">China Airport </a>
                                                    </div>
                                                    <div class="time">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="newsbody">
                                                    <h6>News 4</h6>
                                                    <p class=" contnew">content of news 4</p>
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

<div class="modal fade popupqutaions" id="exampleModalCenterquotaion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Category Name</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="qutpopupbody">
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
            <div class="modal-footer">
                <!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                <button type="submit" class="btn_savess">submit</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modallastprice  bd-example-modal-lg" id="modallastprice" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enter your detailed requirements to receive an accurate quote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modallastpricebody">
                    <div class="forms">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="formitem">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <span class="tititle">Purchase Quantity</span>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="inpuyss">
                                                    <input type="text" class="inputformmd">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="inpuyss">
                                                    <select class="inputformmd">
                                                        <option class="option" value="1">Pieces</option>
                                                        <option class="option" value="2">Bags</option>
                                                        <option class="option" value="3">Boxes</option>
                                                        <option class="option" value="4">Foot</option>
                                                        <option class="option" value="5">Meter</option>
                                                        <option class="option" value="6">Pairs</option>
                                                        <option class="option" value="7">Reams</option>
                                                        <option class="option" value="8">Rolls</option>
                                                        <option class="option" value="9">Sets</option>
                                                        <option class="option" value="10">Square Meters</option>
                                                        <option class="option" value="11">Square Feet</option>
                                                        <option class="option" value="12">Tons</option>
                                                        <option class="option" value="13">Yard</option>
                                                        <option class="option" value="99">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="formitem">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <span class="tititle">Content</span>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="inpuyss">
                                                    <textarea class="inputetxtsts"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="formitem">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <span class="tititle">Country/Region</span>
                                            </div>

                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="inpuyss">
                                                    <select class="inputformmd">
                                                        <option class="option" value="1">Egypt</option>
                                                        <option class="option" value="2">Bags</option>
                                                        <option class="option" value="3">Boxes</option>
                                                        <option class="option" value="4">Foot</option>
                                                        <option class="option" value="5">Meter</option>
                                                        <option class="option" value="6">Pairs</option>
                                                        <option class="option" value="7">Reams</option>
                                                        <option class="option" value="8">Rolls</option>
                                                        <option class="option" value="9">Sets</option>
                                                        <option class="option" value="10">Square Meters</option>
                                                        <option class="option" value="11">Square Feet</option>
                                                        <option class="option" value="12">Tons</option>
                                                        <option class="option" value="13">Yard</option>
                                                        <option class="option" value="99">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="formitem">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                <span class="tititle">Full Name</span>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                                                <div class="inpuyss">
                                                    <select class="inputformmd">
                                                        <option class="option" value="1">Mr</option>
                                                        <option class="option" value="2">Mrs</option>
                                                        <option class="option" value="3">Boxes</option>
                                                        <option class="option" value="4">Foot</option>
                                                        <option class="option" value="5">Meter</option>
                                                        <option class="option" value="6">Pairs</option>
                                                        <option class="option" value="7">Reams</option>
                                                        <option class="option" value="8">Rolls</option>
                                                        <option class="option" value="9">Sets</option>
                                                        <option class="option" value="10">Square Meters</option>
                                                        <option class="option" value="11">Square Feet</option>
                                                        <option class="option" value="12">Tons</option>
                                                        <option class="option" value="13">Yard</option>
                                                        <option class="option" value="99">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-9 col-xs-8">
                                                <div class="inpuyss">
                                                    <input type="text" class="inputformmd">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="formitem">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                <span class="tititle">Email Address</span>
                                            </div>

                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                <div class="inpuyss">
                                                    <input type="email" class="inputformmd">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="formitem">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                <span class="tititle">Company Name</span>
                                            </div>

                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                <div class="inpuyss">
                                                    <input type="text" class="inputformmd">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="formitem">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                <span class="tititle">Telephone</span>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                                                <div class="inpuyss">
                                                    <input type="text" class="inputformmd" placeholder="country">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                                <div class="inpuyss">
                                                    <input type="text" class="inputformmd" placeholder="Area Code">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-4">
                                                <div class="inpuyss">
                                                    <input type="text" class="inputformmd" placeholder=" Number">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="formitem">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                <div class="inpuyss">
                                                    <button type="submit" class="Btn_sassa">Send</button>
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
        </div>
    </div>
</div>


<div class="modal fade modallastprice" id="modalchatee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chat with Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modallastpricebody">
                    <div class="forms">
                        <form action="#" method="post">
                            <div class="row">






                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="formitem">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                <span class="tititle">Full Name</span>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                                                <div class="inpuyss">
                                                    <select class="inputformmd">
                                                        <option class="option" value="1">Mr</option>
                                                        <option class="option" value="2">Mrs</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-9 col-xs-8">
                                                <div class="inpuyss">
                                                    <input type="text" class="inputformmd">
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="formitem">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                <span class="tititle">Email Address</span>
                                            </div>

                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                <div class="inpuyss">
                                                    <input type="email" class="inputformmd">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>




                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="formitem">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                <div class="inpuyss">
                                                    <button type="submit" class="Btn_sassa">Start Online Chate</button>
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

        </div>
    </div>
</div>


@endsection
@section('scripts')
<script src="{{asset('frontUI/assets/Libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontUI/assets/Libs/magnific-popup/lightbox.init.js')}}"></script>







<script type="text/javascript">
    $('.contact_form').on('click', function(event) {
        event.preventDefault();

        let email = $('#email').val();
        let message = $('#message').val();
        let user_id = $('#user_id').val();
        $.ajax({
            url: "{{route('contactUs')}}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",

                email: email,
                message: message,
                user_id: user_id
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
</script>






<script>
    $('.prprprOwlDetals').owlCarousel({

        margin: 10,
        nav: true,
        loop: false,
        autoplay: false,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: true
            },
            1000: {
                items: 5,
                nav: true,
                loop: false
            }
        }




    })
</script>
@endsection