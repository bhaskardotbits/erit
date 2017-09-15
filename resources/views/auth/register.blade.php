@extends('layouts.app')

@section('content')

    <div class="page-content">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 marginauto">
            <div class="v2 inlogin_wrps">
                <div class="logo">
                    <img src="{{ url('/images/logo.png') }}">
                    <h1>Enterprise Risk Intelligence Tool</h1>
                    <a href="http://www.dotbits.com" target="_blank">@ www.dotbits.com</a>
                </div>
                <div class="clearfix">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <fieldset>

                                <legend>Register</legend>

                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First name" value="{{ old('first_name') }}" required autofocus>

                                        @if ($errors->has('first_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last name" value="{{ old('last_name') }}" required>

                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('package_id') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <select class="form-control" name="package_id" id="package_id" required>
                                            <option value=""> Select Package </option>
                                            <option value="1" {{ old('package_id') == 1 ? ' selected="selected"' : '' }}> Basic Package</option>
                                            <option value="2" {{ old('package_id') == 2 ? ' selected="selected"' : '' }}> Advanced Package</option>
                                            <option value="3" {{ old('package_id') == 3 ? ' selected="selected"' : '' }}> Professional Package</option>
                                            <option value="4" {{ old('package_id') == 4 ? ' selected="selected"' : '' }}> Enterprise Package</option>
                                            <option value="5" {{ old('package_id') == 5 ? ' selected="selected"' : '' }}> MSSP Package</option>
                                        </select>

                                        @if ($errors->has('package_id'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('package_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('login_name') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                        <input id="login_name" type="text" class="form-control" name="login_name"
                                               placeholder="User Id" value="{{ old('login_name') }}" required
                                               >

                                        @if ($errors->has('login_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('login_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control" name="email"
                                               placeholder="E-Mail Address" value="{{ old('email') }}" required
                                        >
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control" name="password"
                                               placeholder="Password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <p>By clicking Create Profile, you agree to our <strong>User Agreement</strong>, <strong>Privacy Policy</strong> and <strong>Cookie Policy</strong></p>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary mar-l10">Create Profile</button>
                                    <a href="{{ url('/login') }}" class="btn btn-danger mar-l10">Cancel</a>
                                </div>

                            </fieldset>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
