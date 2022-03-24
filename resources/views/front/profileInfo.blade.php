@extends('front.layouts.app')

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

                                                        <input id="cover" name="cover" oninput="this.className = ''" style="display:none" type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" />

                                                </div>
                                                <div class="profilrdev">
                                                    <div class="profileimg">
                                                    @if(Auth::user()->photo !=null)
                                                            <img id="photo_img" name="photo_img" src="{{Voyager::image(Auth::user()->photo)}}">
                                                            @else
                                                            <img id="photo_img" name="photo_img" src="{{Voyager::image('users/profile.png')}}">
                                                            @endif

                                                        <input id="photo" name="photo" oninput="this.className = ''" style="display:none" type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" />

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
                                                    <h2><span><i class="style_icoColor__1U_A_ fas fa-sliders-h mr-2"></i></span>Settings
                                                    </h2>
                                                </div>
                                                <div class="setingstaps">
                                                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                                        <ul id="myTab" class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active">
                                                                <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true" class="active show">Personal Information</a>
                                                            </li>
                                                            <li role="presentation">
                                                                <a href="#carl" role="tab" id="carl-tab" data-toggle="tab" aria-controls="carl">qutation
                                                                    Details</a>
                                                            </li>
                                                            <li role="presentation">
                                                                <a href="#james" role="tab" id="james-tab" data-toggle="tab" aria-controls="james">Change
                                                                    Password</a>
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
                                                                                    <input id='email' name='email'type="email" value="{{Auth::user()->email??''}}" placeholder="Your Email Address">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="setininpgroup">
                                                                                    <span>Phone</span>
                                                                                    <input id='phone' name='phone' type="text" value="{{Auth::user()->phone??''}}" placeholder="Your Phone number">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="setininpgroup">
                                                                                    <span>Wechat</span>
                                                                                    <input type="text" id='wechat' name='wechat' value="{{Auth::user()->details->wechat??''}}" placeholder="Your Wechat">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="setininpgroup">
                                                                                    <span>Country</span>

                                                                                    <input type="text" id='country' name='country' value="{{Auth::user()->details->country??''}}" placeholder="Your country">

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
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="setininpgroup">
                                                                                    <span>Address</span>
                                                                                    <input id='address' name='address' type="text" value="{{Auth::user()->details->address??''}}" placeholder="Your Address">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="setininpgroup">
                                                                                    <span>City</span>
                                                                                    <input id='city' name='city' type="text" value="{{Auth::user()->details->city??''}}" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="setininpgroup">
                                                                                    <span>Postal Code</span>
                                                                                    <input id='postal_code' name='postal_code' type="text" value="{{Auth::user()->details->postal_code??''}}" placeholder="Postal Code">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="setininpgroup">
                                                                                    <span>State</span>
                                                                                    <input id='state' name='state'  type="text" value="{{Auth::user()->details->state??''}}" placeholder="Your State">
                                                                                </div>
                                                                            </div>
                                                                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="setininpgroup">
                                                                                    <span>Country</span>


                                                                                    <select>
                                                                                        <option>egypt</option>
                                                                                        <option>egypt</option>
                                                                                        <option>egypt</option>
                                                                                        <option>egypt</option>
                                                                                    </select>
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
                                                            <div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
                                                                <div class="tabcontent-grids">
                                                                    <div class="setforms">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="setininpgroup">
                                                                                    <span>Current Password</span>
                                                                                    <input id='current_password' name='current_password'  type="password" value="" placeholder="Your  Password">
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