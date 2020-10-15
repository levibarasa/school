<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@pdp">
    <meta name="twitter:creator" content="@pdp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PDP">
    <meta name="twitter:description" content="People's Democratic Party">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="DashForge">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="People's Democratic Party">
    <meta name="author" content="PDP">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <title>People's Democratic Party</title>

    <!-- vendor css -->
    <link href="{{asset('lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <link href="{{asset('lib/prismjs/themes/prism-vs.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ion-rangeslider/css/ion.rangeSlider.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/select2/css/select2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/dashforge.demo.css')}}">


    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/dashforge.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dashforge.landing.css')}}">

</head>
<body class="home-body">

<header class="navbar navbar-header navbar-header-fixed bd-b-0">
    <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
    <div class="navbar-brand">
        <a href="/" class="df-logo">pd<span>p</span></a>
    </div><!-- navbar-brand -->
    <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
            <a href="/" class="df-logo">pd<span>p</span></a>
            <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
        </div><!-- navbar-menu-header -->
        <ul class="nav navbar-menu">
            <li class="nav-label pd-l-15 pd-lg-l-25 d-lg-none">Main Navigation</li>
            <li class="nav-item with-sub">
                <a href="#" class="nav-link"><i data-feather="pie-chart"></i> Membership</a>
                <ul class="navbar-menu-sub">
                   <li class="nav-sub-item"><a href="/verify" class="nav-sub-link"><i data-feather="user-check"></i>Verify Membership</a></li>

                </ul>
            </li>
            <li class="nav-item with-sub">
                <a href="#" class="nav-link"><i data-feather="package"></i> Events</a>
                <ul class="navbar-menu-sub">
                    <li class="nav-sub-item"><a href="#" class="nav-sub-link"><i data-feather="calendar"></i>Calendar</a></li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="/donate" class="nav-link"><i data-feather="package"></i> Donations</a>
            </li>


            <li class="nav-item">
                <a href="/donate" class="nav-link"><i data-feather="package"></i> Get involved</a>
            </li>

           <!-- <li class="nav-item"><a href="components/" class="nav-link"><i data-feather="box"></i> Components</a></li>
            <li class="nav-item"><a href="collections/" class="nav-link"><i data-feather="archive"></i> Collections</a></li>-->
        </ul>
    </div><!-- navbar-menu-wrapper -->
    <div class="navbar-right">
        <a href="#" class="btn btn-social"><i class="fab fa-facebook"></i></a>
        <a href="#" class="btn btn-social"><i class="fab fa-instagram"></i></a>
        <a href="#" class="btn btn-social"><i class="fab fa-twitter"></i></a>
<!--        <a href="https://themeforest.net/item/dashforge-responsive-admin-dashboard-template/23725961" class="btn btn-buy"><i data-feather="shopping-bag"></i> <span>Buy Now</span></a>
-->    </div><!-- navbar-right -->
</header><!-- navbar -->

<div class="app-container">



    @yield("content")
</div>




<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('lib/parsleyjs/parsley.min.js')}}"></script>
<script src="{{asset('lib/prismjs/prism.js')}}"></script>
<script src="{{asset('lib/jqueryui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/dashforge.js')}}"></script>




@stack('custom-scripts')

<script>
    $(document).ready(function() {
        'use strict'

        $('[data-toggle="tooltip"]').tooltip()


    });
</script>



</body>
</html>
