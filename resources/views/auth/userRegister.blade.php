<form id="msform" method="post" action="{{ url('userRegister') }}" enctype="multipart/form-data">

    @csrf
    <input type="hidden" id="type_user" name="type" value="user">

    <div class="form-card">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                    <label class="fieldlabels">{{ __('front.Write Your first Name') }}</label>
                    <input type="text" name="f_name" id='full_name'
                        placeholder="{{ __('front.Write Your first Name') }}" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="form-group"> 
                <label class="fieldlabels">{{ __('front.Write Your last Name') }}</label>
                    <input type="text" name="l_name" id='full_name'
                        placeholder="{{ __('front.Write Your last Name') }}" />
                </div>
            </div>
            <div class="col-lg-12 col-md-12col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="fieldlabels">{{ __('front.Email') }}</label>
                    <input type="email" name="email" id='email' placeholder="{{ __('front.Enter Your Email') }}" />
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="fieldlabels">{{ __('front.Gender') }}</label>
                    <select id='gender' name='gender' class='form-control select2'>
                        <option value='male'>{{ __('front.Male') }}
                        </option>
                        <option value='female'>
                            {{ __('front.Femail') }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label class="fieldlabels">{{ __('front.Password') }}</label>
                    <input type="Password" name="password" id='password' placeholder="6-20 characters" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label class="fieldlabels">{{ __('front.Confirm Password') }}</label>
                    <input type="Password" name="password_confirmation" id='password_confirmation' placeholder="" />
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="submit" id='user_register' class=" btn btn-danger btnuserlogin  "
                        value="{{ __('front.Register') }}">
                </div>
            </div>

        </div>
    </div>
</form>
