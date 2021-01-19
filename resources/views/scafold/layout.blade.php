<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="School Management System">
    <meta name="author" content="School Management System">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <title>School Management System</title>

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

        
        <h6 class="home-headline" style="margineleft:10px; margintop:10px;"><span>NETIMA MAGNET EDUCATIONAL CENTER</span></h6>
    </div><!-- navbar-brand -->
    <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
            <a href="/" class="df-logo">SM<span>S</span></a>
            
            <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
        </div><!-- navbar-menu-header -->
        
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
