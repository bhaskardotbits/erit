<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Enterprise Risk Intelligence Tool</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

@yield('extra-css')

<!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                                                    'csrfToken' => csrf_token(),
                                                ]); ?>
    </script>
</head>

<body>
<!-- navbar start here -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="dashboard.php"><img src="{{ url('/images/logo.png') }}"/></a></div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><h3 style="font-size: 1.2em; margin-top: 15px;">{{ Auth::user()->account->company_name }}<br/><small>Expires on 9/15/2018</small></h3></li>

                <li class="dropdown msgqueriestp"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                     role="button" aria-haspopup="true" aria-expanded="false"><i
                                class="fa fa-envelope"></i></a>
                    <div class="dropdown-menu">
                        <h3>Alerts &amp; Notification</h3>
                        <ul class="list-unstyled">
                            <li><a href="it_corp_security_raised_query.php">
                                    <div class="msgjquries_blk"><img src="images/profilepic_img.png"
                                                                     class="img-responsive img-circle img-msgprfle"/>
                                        RequestECC20160500001:IT Corp Security has raised a query<br>
                                        Requestor Notification <span class="msgjquriesblk_ago">1min ago</span></div>
                                </a></li>
                            <li><a href="notification_manager1.php">
                                    <div class="msgjquries_blk"><img src="images/profilepic_img.png"
                                                                     class="img-responsive img-circle img-msgprfle"/>
                                        Request ECC20160500001: IT Corp Security has responded <br>
                                        Manager 1 Notification <span class="msgjquriesblk_ago">2min ago</span></div>
                                </a></li>
                            <li><a href="ecc_firewall_team.php">
                                    <div class="msgjquries_blk"><img src="images/profilepic_img.png"
                                                                     class="img-responsive img-circle img-msgprfle"/>
                                        Request ECC20160500001: ECC Firewall Team <br>
                                        Notification to requestor <span class="msgjquriesblk_ago">3min ago</span></div>
                                </a></li>
                            <li><a href="ecc_firewall_team_not_frm_req.php">
                                    <div class="msgjquries_blk"><img src="images/profilepic_img.png"
                                                                     class="img-responsive img-circle img-msgprfle"/>
                                        Request ECC20160500001: ECC Firewall Team receive <br>
                                        notification from requestor <span class="msgjquriesblk_ago">4min ago</span>
                                    </div>
                                </a></li>
                            <li><a href="eccrequest_form_notification_ifsnc.php">
                                    <div class="msgjquries_blk"><img src="images/profilepic_img.png"
                                                                     class="img-responsive img-circle img-msgprfle"/>
                                        Request ECC20160500001: Create change Management ticket was created and status
                                        is complete since 15 days<span class="msgjquriesblk_ago">5min ago</span></div>
                                </a></li>
                            <li><a href="wfcr_noti_it_corp_security_team.php">
                                    <div class="msgjquries_blk"><img src="images/profilepic_img.png"
                                                                     class="img-responsive img-circle img-msgprfle"/>
                                        Request WFCR20160500001: WFCR-Notification to IT Corp Security Team <br>
                                        <span class="msgjquriesblk_ago">1min ago</span></div>
                                </a></li>
                            <li><a href="wfcr_requestor_notification.php">
                                    <div class="msgjquries_blk"><img src="images/profilepic_img.png"
                                                                     class="img-responsive img-circle img-msgprfle"/>
                                        Request WFCR20160500001: Notification to Requestor <br>
                                        <span class="msgjquriesblk_ago">2min ago</span></div>
                                </a></li>
                            <li><a href="eccrequest_form_notification_ifsnc.php">
                                    <div class="msgjquries_blk"><img src="images/profilepic_img.png"
                                                                     class="img-responsive img-circle img-msgprfle"/>
                                        Request WFCR20160500001: Create change Management ticket was created and status
                                        is complete since 15 days<span class="msgjquriesblk_ago">5min ago</span></div>
                                </a></li>

                        </ul>
                        <div class="msgjquriesblk_btn"><a href="#" class="btn btn-warning btn-block">See all</a></div>
                    </div>
                </li>
                <li class="dropdown welcome_profile"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                        role="button" aria-haspopup="true" aria-expanded="false"> <span
                                class="usertxt">Welcome {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }} <br><b> {{ Auth::user()->role->name }} </b></span> <span
                                class="userprofilepic"><img.  src="{{ url('/images/profilepic_img.png') }}"
                                                            class="img-responsive"/></span> </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/admin-profile') }}"><i class="fa fa-user"></i> Profile </a></li>
                        <li><a href="#"><i class="fa fa-calendar"></i> Calender <?php echo date("M d"); ?> </a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> Messages 10 </a></li>
                        <li><a href="#"><i class="fa fa-check-circle"></i> Status </a></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-power-off"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar end here -->

<div class="main-container mainconta_ops">

    <div class="container-fluid">

    @include('layouts.partials.error')


    @yield('content')
    <!-- Container Fluid close -->
    </div>
    <!-- Main container close -->
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

@yield('extra-js')

</body>
</html>
