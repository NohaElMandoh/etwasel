<form id="msform" method="post" action="{{ url('/vendorRegister') }}"  
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="type_vendor" name="type" value="vendor">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="fieldlabels">{{ __('front.Full Name') }}</label>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">

                        <select id='title' name='title' class='form-control select2'>
                            <option value='Mr'>Mr</option>
                            <option value='Mrs'>Mrs</option>
                            <option value='Miss'>Miss</option>
                            <option value='Ms'>Ms</option>
                        </select>

                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-8">
                        <input type="text" id="vendor_full_name" name="f_name" placeholder="{{ __('front.Write Your first Name') }}" re />
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-8">
                        <input type="text" id="vendor_full_name" name="l_name" placeholder="{{ __('front.Write Your last Name') }}" re />
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-12 col-md-12col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="fieldlabels">{{ __('front.Email') }}</label>
                <input type="email" id="vendor_email" value="{{ old('vendor_email') }}" name="vendor_email"
                    placeholder="Email Id" re />
            </div>
        </div>

        <div class="col-lg-12 col-md-12col-sm-12 col-xs-12" style="display:none">
            <div class="form-group">
                <label class="fieldlabels">Verification
                    Code</label>
                <div class="captcha-box">
                    <canvas id="canvas"></canvas>
                    <input name="code" class="form-control">
                    <button id="valid" type="button" class="btn btn-danger testrelod"><i
                            class="fas fa-sync"></i></button>
                </div>
                <span class="notee">Please enter the
                    characters you see in the image</span>
            </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="fieldlabels">{{ __('front.Password') }}</label>
                <input type="Password" id="vendor_password" name="vendor_password" placeholder="6-20 characters"
                    re />
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="fieldlabels">{{ __('front.Confirm Password') }}</label>
                <input type="Password" id="vendor_password_confirmation" name="vendor_password_confirmation"
                    placeholder="" re />
            </div>
        </div>
        <div class="col-lg-12 col-md-12col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="fieldlabels">{{ __('front.Phone Number') }}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">+20</span>
                    </div>
                    <input type="text" id='phone' name='phone' class="form-control" placeholder=""
                        aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="fieldlabels">{{ __('front.Company Name') }}</label>
                <input type="text" id='shop_name' name='shop_name' placeholder="" re />
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="fieldlabels">{{ __('front.city') }}</label>
                {{-- <input id='country' name='country' type="text" placeholder="{{__('front.Country/Region')}}" class="formcontrol"> --}}

                <select id='city_id' name='city_id' class="form-control select2">
                    @if ($Cities)
                        @foreach ($Cities as $city)
                            <option value="{{ $city->id }}"
                                @if (!empty($user->details)) @if ($city->id == $user->details->city_id) selected @endif
                                @endif
                                >{{ $city->name }}</option>
                        @endforeach
                    @endif

                </select>

            </div>
        </div>

        <div class="col-lg-12 col-md-12col-sm-12 col-xs-12">
            <div class="form-group">
                <input type="submit" id='vendor_register' class=" action-button btnuserlogin" value="Submit" />
            </div>
        </div>

    </div>








    <!--<form id="msform">-->
    <!-- progressbar -->
    {{-- <ul id="progressbar" style="display:none">
        <li class="active" id="account">
            <span>{{ __('front.Basic Info') }}</span>
        </li>
        <!--<li id="verification"><span>Verification</span></li>-->
        <li id="personal">
            <span>{{ __('front.Information') }}</span>
        </li>
        <li id="payment" style='display:none'>
            <span>{{ __('front.Complete') }}</span>
        </li>

        <!--                        <li id="confirm"><span>Finish</span></li>-->
    </ul>

    <fieldset style="display:none">
        <div class="form-card">
            <div class="row">
                <div class="col-lg-12 col-md-12col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="fieldlabels">{{ __('front.Email') }}</label>
                        <input type="email" id="vendor_email" value="{{ old('vendor_email') }}" name="vendor_email"
                            placeholder="Email Id" re />
                    </div>
                </div>

                <div class="col-lg-12 col-md-12col-sm-12 col-xs-12" style="display:none">
                    <div class="form-group">
                        <label class="fieldlabels">Verification
                            Code</label>
                        <div class="captcha-box">
                            <canvas id="canvas"></canvas>
                            <input name="code" class="form-control">
                            <button id="valid" type="button" class="btn btn-danger testrelod"><i
                                    class="fas fa-sync"></i></button>
                        </div>
                        <span class="notee">Please
                            enter the characters you see in the
                            image</span>
                    </div>
                </div>

            </div>




        </div>

        <input name="next" class="next action-button" value="{{ __('front.Next') }}" />
    </fieldset>




    <fieldset style="display:none">
        <div class="form-card">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="fieldlabels">{{ __('front.Password') }}</label>
                        <input type="Password" id="vendor_password" name="vendor_password" placeholder="6-20 characters"
                            re />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="fieldlabels">{{ __('front.Confirm Password') }}</label>
                        <input type="Password" id="vendor_password_confirmation" name="vendor_password_confirmation"
                            placeholder="" re />
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="fieldlabels">{{ __('front.Country/Region') }}</label>
                        <input id='country' name='country' type="text" placeholder="{{ __('front.Country/Region') }}"
                            class="formcontrol">

                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="fieldlabels">{{ __('front.Full Name') }}</label>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">

                                <select id='title' name='title' class='form-control select2'>
                                    <option value='Mr'>Mr
                                    </option>
                                    <option value='Mrs'>Mrs
                                    </option>
                                    <option value='Miss'>Miss
                                    </option>
                                    <option value='Ms'>Ms
                                    </option>
                                </select>

                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                <input type="text" id="vendor_full_name" name="vendor_full_name" placeholder=""
                                    re />

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="fieldlabels">{{ __('front.Company Name') }}</label>
                        <input type="text" id='shop_name' name='shop_name' placeholder="" re />
                    </div>
                </div>
                <div class="col-lg-12 col-md-12col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="fieldlabels">{{ __('front.Phone Number') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+20</span>
                            </div>
                            <input type="text" id='phone' name='phone' class="form-control" placeholder=""
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <input name="next" class="next action-button" value="{{ __('front.Next') }}" />
        <input type="button" name="previous" class="previous action-button-previous"
            value="{{ __('front.Previous') }}" />
    </fieldset>
    <fieldset style="display:none">
        <div class="form-card">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="fieldlabels">{{ __('front.Upload Photo') }}</label>
                        <input type="file" id='photo' name='photo' name="pic">
                    </div>
                </div>
            </div>

        </div>
        <input type="submit" id='vendor_register' class=" action-button" value="Submit" />
        <input type="button" name="previous" class="previous action-button-previous"
            value="{{ __('front.Previous') }}" />
    </fieldset> --}}

</form>
