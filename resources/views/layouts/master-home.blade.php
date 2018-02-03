<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Socialize') }} - @yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">
        
        {{-- Animate CSS --}}
        <link rel="stylesheet" href="{{ asset("css/animate.min.css") }}">
        {{-- Bootstrap CSS --}}
        <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
        {{-- Font Awesome CSS --}}
        <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
        {{-- Google Font --}}
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>
        {{-- Swiper CSS --}}
        <link rel="stylesheet" href="{{ asset("css/swiper.min.css") }}">
        {{-- Custom CSS --}}
        @yield('custom-css')
        
    </head>
    <body>
        
        {{-- Navigation bar --}}
        @include('includes/home-nav')

        {{-- Main content --}}
        @yield('main-content')

        {{-- Footer --}}
        @include('includes/footer')

        <script src="{{ asset("js/jquery-3.2.1.min.js") }}"></script>
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("js/wow.min.js") }}"></script>
        <script src="{{ asset("js/custom.js") }}"></script>

        {{-- Load custom JS files for certain page --}}
        @yield('custom-js')

    </body>
</html>