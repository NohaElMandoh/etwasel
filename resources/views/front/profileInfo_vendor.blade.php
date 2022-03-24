@extends('front.layouts.app')
@section('styles')
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

                <div class="centerside">
                    <div class="centersidecont">
                        <div class="row">

                            <div class="col-lg-21 col-md-12 col-sm-12 col-xs-12">
                                <div class="profilepage">
                                    <form action="{{route('vendor_update_info')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="coverpropot">
                                                    <div class="colverimg">
                                                        @if(Auth::user()->cover !=null)
                                                        <img id="cover_img" name="cover_img" src="{{Voyager::image(Auth::user()->cover)}}">
                                                        @else
                                                        <img id="cover_img" name="cover_img" src="{{asset('frontUI/assets/img/cladreximg/bigimg.png')}}">
                                                        @endif
                                                    </div>
                                                    <div class="profilrdev">
                                                        <div class="profileimg">
                                                            @if(Auth::user()->photo !=null)
                                                            <img id="photo_img" name="photo_img" src="{{Voyager::image(Auth::user()->photo)}}">
                                                            @else
                                                            <img id="photo_img" name="photo_img" src="{{Voyager::image('users/profile.png')}}">
                                                            @endif
                                                            <h2>{{Auth::user()->name??''}}</h2>
                                                        </div>
                                                        <div class="edididtes">
                                                            <div class="edites">
                                                                <div class="dropdown">
                                                                    <button class=" dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span><i class="icofont icofont-ui-edit"></i></span>
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

                                                                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#editProfileModal">
                                                                            Edit Profile Image
                                                                        </button>
                                                                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#editCoverModal">
                                                                            Edit Cover Image
                                                                        </button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="profsittengs">
                                                    <div class="title">
                                                        <h2><span><i class="style_icoColor__1U_A_ fas fa-sliders-h mr-2"></i></span>
                                                            Vendors Settings</h2>
                                                    </div>
                                                    <div class="setingstaps">
                                                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                                            <ul id="myTab" class="nav nav-tabs" role="tablist">
                                                                <li role="presentation" class="active">
                                                                    <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true" class="active show">My
                                                                        Profile</a>
                                                                </li>
                                                                <li style='display:none'role="presentation">
                                                                    <a href="#carl" role="tab" id="carl-tab" data-toggle="tab" aria-controls="carl">Store
                                                                        Info</a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a href="#Contact" role="tab" id="Contact-tab" data-toggle="tab" aria-controls="Contact">Contact</a>
                                                                </li>
                                                                <li style='display:none' role="presentation">
                                                                    <a href="#certificatio" role="tab" id="certificatio-tab" data-toggle="tab" aria-controls="certificatio">Certificate</a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a href="#james" role="tab" id="james-tab" data-toggle="tab" aria-controls="james">
                                                                        Password</a>
                                                                </li>
                                                                <li style='display:none' role="presentation">
                                                                    <a href="#packges" role="tab" id="packges-tab" data-toggle="tab" aria-controls="packges">
                                                                        Packages</a>
                                                                </li>

                                                            </ul>
                                                            <div id="myTabContent" class="tab-content">
                                                                <div role="tabpanel" class="tab-pane fadeIn active" id="home" aria-labelledby="home-tab">
                                                                    <div class="tabcontent-grids">
                                                                        <div class="setforms">
                                                                            <div class="row">
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <span>First Name</span>
                                                                                        <input id='f_name' name='f_name' type="text" value="{{Auth::user()->f_name??''}}" placeholder="Your name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <span>Last Name</span>
                                                                                        <input id='s_name' name='s_name' type="text" value="{{Auth::user()->s_name??''}}" placeholder="Your name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <span>Email Address</span>
                                                                                        <input id='email' name='email' type="email" value="{{Auth::user()->email??''}}" placeholder="Your Email Address">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <span>Phone</span>
                                                                                        <input id='phone' name='phone' type="text" value="{{Auth::user()->phone??''}}" placeholder="Your Phone number">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <button type="submit" class="btnsum">
                                                                                            update
                                                                                        </button>
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
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                                    <div class="setininpgroup">
                                                                                        <span>Shop Name</span>
                                                                                        <input id='shop_name' name='shop_name'type="text" value="{{Auth::user()->details->shop_name ??''}}" placeholder="Your Address">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <span>Employes</span>


                                                                                        <select id="employees" name='employees'>
                                                                                            <option value='1 - 10'>1 - 10</option>
                                                                                            <option value='10 - 100'>10 - 100</option>
                                                                                            <option value='100 - 500'>100 - 500</option>
                                                                                            <option value='500 - 1000'>500 - 1000</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <span>Categorires</span>


                                                                                        <select id="category_id" name='category_id'>
                                                                                        @if($categories)
                                  @foreach($categories as $category)
                                                                                            <option value='{{$category->id}}'>{{$category->name}}</option>
                                                                                            @endforeach
                                                                                            @endif
                                                                                            <!-- <option>egypt</option>
                                                                                            <option>egypt</option>
                                                                                            <option>egypt</option> -->
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <span>Country</span>

                                                                                        <input id='country' name='country'type="text" value="{{Auth::user()->details->country??''}}" placeholder="Your country">

                                                                                        <!-- <select>
                                                                                            <option>egypt</option>
                                                                                            <option>egypt</option>
                                                                                            <option>egypt</option>
                                                                                            <option>egypt</option>
                                                                                        </select> -->
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <span>Shop info</span>
                                                                                        <textarea id='shop_info' name='shop_info' placeholder="My Info">{{Auth::user()->details->shop_info??''}}</textarea>
                                                                                    </div>
                                                                                </div>



                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <button type="submit" class="btnsum">
                                                                                            update
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane fade" id="Contact" aria-labelledby="Contact-tab">
                                                                    <div class="tabcontent-grids">
                                                                        <div class="setforms">
                                                                            <div class="row">
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                                    <div class="setininpgroup">
                                                                                        <span>Address</span>
                                                                                        <input id='address' name='address' type="text" value="{{Auth::user()->details->address??''}}" placeholder="Your  Address">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <span>Phone</span>
                                                                                        <input id='phone2' name='phone2' type="text" value="{{Auth::user()->details->phone2 ??''}}" placeholder="158525442">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                    <div class="qoutstepform ">
                                                                                        <span>Whats App QR</span>
                                                                                        <div class="input-group image-preview fileuploaaad">
                                                                                            <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                                                                            <span class="input-group-btn">
                                                                                                <div class="btn btn-default image-preview-input">

                                                                                                    <span class="far fa-folder-open"></span>
                                                                                                    <span class="image-preview-input-title">Browse</span>
                                                                                                    <input id='wechat' name='wechat' oninput="this.className = ''" type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" />
                                                                                                </div>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>




                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <button type="submit" class="btnsum">
                                                                                            update
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane fade" id="certificatio" aria-labelledby="certificatio-tab">
                                                                    <div class="tabcontent-grids">
                                                                        <div class="setforms">
                                                                            <div class="row">

                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                    <div class="qoutstepform ">
                                                                                        <span>National Id</span>
                                                                                        <div class="input-group image-preview fileuploaaad">
                                                                                            <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                                                                            <span class="input-group-btn">
                                                                                                <div class="btn btn-default image-preview-input">

                                                                                                    <span class="far fa-folder-open"></span>
                                                                                                    <span class="image-preview-input-title">Browse</span>
                                                                                                    <input id='national_id' name='national_id' oninput="this.className = ''" type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" />
                                                                                                </div>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>

                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                    <div class="qoutstepform ">
                                                                                        <span>Commerical
                                                                                            Registration</span>
                                                                                        <div class="input-group image-preview fileuploaaad">
                                                                                            <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                                                                            <span class="input-group-btn">
                                                                                                <div class="btn btn-default image-preview-input">

                                                                                                    <span class="far fa-folder-open"></span>
                                                                                                    <span class="image-preview-input-title">Browse</span>
                                                                                                    <input id='commerical' name='commerical' oninput="this.className = ''" type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" />
                                                                                                </div>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>

                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                    <div class="qoutstepform ">
                                                                                        <span>Tax Card</span>
                                                                                        <div class="input-group image-preview fileuploaaad">
                                                                                            <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                                                                            <span class="input-group-btn">
                                                                                                <div class="btn btn-default image-preview-input">

                                                                                                    <span class="far fa-folder-open"></span>
                                                                                                    <span class="image-preview-input-title">Browse</span>
                                                                                                    <input id='tax_card' name='tax_card' oninput="this.className = ''" type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" />
                                                                                                </div>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>




                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <button type="submit" class="btnsum">
                                                                                            update
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
                                                                    <div class="tabcontent-grids">
                                                                        <div class="setforms">
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <span>Current Password</span>
                                                                                        <input id='current_password' name='current_password' type="password" value="" placeholder="Your  Password">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <span>New Password</span>
                                                                                        <input id='new_password' name='new_password' type="text" value="" placeholder="Your Password">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <span>Confirm NEW
                                                                                            Password</span>
                                                                                        <input id='new_password_confirmation' name='new_password_confirmation' type="password" value="" placeholder="Your password">
                                                                                    </div>
                                                                                </div>



                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <button type="submit" class="btnsum">
                                                                                            update
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <div role="tabpanel" class="tab-pane fade" id="packges" aria-labelledby="packges-tab">
                                                                    <div class="tabcontent-grids">
                                                                        <div class="setforms">
                                                                            <div class="row">
                                                                                @if(!empty($packages))
                                                                                @foreach($packages as $key=>$package)
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="bg">
                                                                                        <div class="chiller_cb">
                                                                                            <label for="myCheckbox{{$key}}">{{$package->name_en}} 
                                                                                </label> <input id="myCheckbox{{$key}}"  type="radio" value="{{$package->id ?? ''}}" name="package_id" @if(Auth::user()->details->package_id ?? '' == $package->id) checked @endif >
                                                                                            <span></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                @endforeach
                                                                                @endif
                                                                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="bg">
                                                                                        <div class="chiller_cb">
                                                                                            <label for="myCheckbox3">Goolg
                                                                                            </label> <input id="myCheckbox3" type="radio" name="price">
                                                                                            <span></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="bg">
                                                                                        <div class="chiller_cb">
                                                                                            <label for="myCheckbox2">Platanum
                                                                                            </label> <input id="myCheckbox2" type="radio" name="price">
                                                                                            <span></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div> -->
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="setininpgroup">
                                                                                        <button type="submit" class="btnsum">
                                                                                            update
                                                                                        </button>
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
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
<script>
    $(document).ready(function() {

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
</script>
@endsection