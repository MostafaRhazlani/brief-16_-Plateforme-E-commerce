<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from www.webstrot.com/html/weapon/dark_version/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:03:34 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Theme Title-->
    <title>Weapon Store - Gun Shop HTML Template</title>
    <meta name="description" content="">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('images/icons/03.png') }}" />

    <!-- All css Here -->
    <!-- All plugins css -->
    <link rel="stylesheet" href="{{ asset('css/allplugins.css') }}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Customization css -->
    <!--If u need any change then use this css file-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Modernizr JavaScript -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
</head>

<body>
    <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
    <div id="preloader">
        <div id="status"><img src="{{ asset('images/logo/preloader.gif') }}" id="preloader_image" alt="loader">
        </div>
    </div>
    <!--Preloader area End-->

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
