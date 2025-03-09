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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

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
</head>

<body>
    <div id="preloader">
        <div id="status"><img src="{{ asset('images/logo/preloader.gif') }}" id="preloader_image" alt="loader">
        </div>
    </div>
    <!--Preloader area End-->

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
