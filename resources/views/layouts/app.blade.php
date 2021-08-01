<!DOCTYPE html>
<html lang="{{(App::getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>DIETCLUBEG - @yield('title')</title>
    <meta name="description" content="@yield('meta-description')">
    <meta name="keywords" content="@yield('meta-keywords')">
    <meta name="author" content="dietclubeg">

    <!-- ==============================================
		FAVICON
		=============================================== -->  
        <link rel="shortcut icon" href="{{asset('public/assets/img/master/favicon.png')}}">
             
		<!-- ==============================================
		CSS
		=============================================== -->  
        <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/assets/css/navbar.css')}}">
        <link rel="stylesheet" href="{{asset('public/assets/css/stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('public/assets/fonts/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/assets/css/animate.min.css')}}">

        @if(App::isLocale('ar'))
        <link rel="stylesheet" href="{{asset('public/assets/css/stylesheet.ar.css')}}">
        @endif

        @yield('custom-css')

        <script src="{{asset('public/assets/js/modernizr-custom.js')}}"></script>

</head>
<body>
    <!-- LOADER -->
    <div id="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!-- LOADER -->

    @include('layouts.header',['mode' => $mode])
    
    @yield('body')

    @include('layouts.footer')
    
    <a href="#0" class="cd-top">Top</a>

    <!-- ==============================================
	JAVASCRIPTS
	=============================================== -->
    <script src="{{asset('public/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/js/loader.js')}}"></script>
    <script src="{{asset('public/assets/js/flickity.pkgd.min.js')}}"></script> 
    <script src="{{asset('public/assets/js/testimonials.js')}}"></script>
    <script src="{{asset('public/assets/js/top.js')}}"></script>
    <script src="{{asset('public/assets/js/counter.js')}}"></script>    
    <script src="{{asset('public/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.counterup.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.isotope.pkgd.js')}}"></script>
    <script src="{{asset('public/assets/js/filter.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/assets/js/magnific.popup.gallery.js')}}"></script>
    <script src="{{asset('public/assets/js/app.js')}}"></script>
    @yield('custom-js')
</body>
</html>