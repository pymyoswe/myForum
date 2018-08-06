<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('colid-template/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/ico" href="{{asset('colid-template/images/favicon.ico')}}" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{asset('colid-template/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('colid-template/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('colid-template/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('colid-template/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('colid-template/css/animate.css')}}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{asset('colid-template/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('colid-template/style.css')}}">
    <link rel="stylesheet" href="{{asset('colid-template/css/responsive.css')}}">
    <script src="{{asset('colid-template/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <style>

    </style>

</head>

<body data-spy="scroll" data-target="#primary-menu">

@include('layouts.navBar')

@yield('content')

@include('layouts.footer')

<!--Vendor-JS-->
<script src="{{asset('colid-template/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('colid-template/js/vendor/bootstrap.min.js')}}"></script>
<!--Plugin-JS-->
<script src="{{asset('colid-template/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('colid-template/js/contact-form.js')}}"></script>
<script src="{{asset('colid-template/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('colid-template/js/scrollUp.min.js')}}"></script>
<script src="{{asset('colid-template/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('colid-template/js/wow.min.js')}}"></script>
<!--Main-active-JS-->
<script src="{{asset('colid-template/js/main.js')}}"></script>
</body>

</html>
