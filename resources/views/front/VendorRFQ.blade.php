@extends('front.layouts.app')
<style>
    .sectionfixd{
        overflow: hidden;
    }
</style>
@section('content')
@php
$user=Auth::user();
@endphp
@section('content')
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
                    <h2><span><i class="style_icoColor__1U_A_ fas fa-sliders-h mr-2"></i></span> RFQ {{__('front.Fill-Up')}}</h2>
                </div>
      
                <div class="inputVendorr">
                <form action="{{route('Vendor_RFQ_Post')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                    <input type="hidden" id="user_id" name="user_id" value="{{$user->id}}">
                    <div class="row">

                        <div class="col-lg-12 col-nd-12 col-sm-12 col-xs-12">
                            <div class="formItemVendor">
                                <span>{{__('front.Product Name EN')}}</span>
                                <textarea placeholder="" id='product_name_en' name='product_name_en' required class="TextInputt"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-nd-12 col-sm-12 col-xs-12">
                            <div class="formItemVendor">
                                <span>{{__('front.Product Name AR')}}   </span>

                                <textarea placeholder="" id='product_name_ar' name='product_name_ar' required class="TextInputt"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="formItemVendor">
                                <span>IF</span>


                                <select id='industry_field_id' name='industry_field_id' class='form-control select2' required>
                                    @if($fields)
                                    @foreach($fields as $field)
                                    <option value="{{$field->id}}" @if($user->details) @if($field->id == $user->details->industry_field_id) selected @endif @endif>{{$field->name}}</option>
                                    @endforeach
                                    @endif

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="formItemVendor">
                                <span>{{__('front.Product Prief EN')}}</span>
                                <textarea placeholder="{{__('front.write here')}}" id='product_desc_en' name='product_desc_en' required class="textarea"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="formItemVendor">
                                <span>{{__('front.Product Prief AR')}}</span>
                                <textarea placeholder="{{__('front.write here')}}" id='product_desc_ar' name='product_desc_ar'required class="textarea"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="formItemVendor">
                                <span>{{__('front.Select Location Region')}}</span>


                                <select id='region_id' name='region_id' class='form-control select2' required>
                                    @if($regions)
                                    @foreach($regions as $region)
                                    <option value="{{$region->id}}">{{$region->name}}</option>
                                    @endforeach
                                    @endif

                                </select>
                            </div>
                        </div>
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
                </form>
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