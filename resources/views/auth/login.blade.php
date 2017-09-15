@extends('layouts.app')

@section('content')

    <div class="page-content">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 marginauto">
            <div class="v2 inlogin_wrps">
                <div class="logo">
                    <img src="{{ url('/images/logo.png') }}">
                    <h1>Enterprise Risk Intelligence Tool</h1>
                    <a href="http://www.dotbits.com" target="_blank">@ www.dotbits.com</a>
                </div>
                <div class="clearfix">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <fieldset>

                                <legend>Sign into your account</legend>

                                <div class="form-group{{ $errors->has('login_name') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                        <input id="login_name" type="text" class="form-control" name="login_name"
                                               placeholder="User Id" value="{{ old('login_name') }}" required
                                               autofocus>

                                        @if ($errors->has('login_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('login_name') }}</strong>
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

                                <div class="form-group">
                                    <div class="col-lg-5 col-xs-12">
                                        <div class="checkbox mar-b10">
                                            <label><input type="checkbox" name="remember"> Keep me signed in</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-xs-12 pull-right">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block mar-b20">Login
                                        </button>

                                        <a href="{{ url('/password/reset') }}">
                                            Forgot User Id?
                                        </a>
                                        <a class="pull-right" href="{{ url('/password/reset') }}">
                                            Forgot Password?
                                        </a>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 register_box">
                        <p class="mar-t20">Enterprise Risk Intelligence Tool is our flagship product for identifying
                            &amp; managing risk. It has been used by numerous large and mid-sized organizations for
                            solving their key management problems. It is at least two years ahead of the competition in
                            real-world deployments in large environments.</p>
                        <p> It handles the entire life cycle for risk management providing a centralized landscape view
                            of organization risk posture as well workflows and assessments to manage, remediate &amp;
                            control. </p>
                        <p>Our custom-developed scanning and reporting software comes with wide-ranging experience with
                            thousands of customers providing a service that is fast, efficient, and effective. </p>
                        <p>You get actionable information that is packaged for the C-Suite and backed up by the details
                            and data your technical staff needs to plan for any needed remediations. </p>

                        <div class="col-lg-8 col-xs-12 marginauto">
                            <a class="btn btn-warning btn-lg btn-block" href="{{ url('/register') }}">
                                Signup Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
