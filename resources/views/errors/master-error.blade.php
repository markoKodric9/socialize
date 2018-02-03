
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Simplify') }} - @yield('title')</title>
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
        {{-- Vendor CSS --}}
        <link rel="stylesheet" href="{{ asset("css/vendor.css") }}">
        {{-- App CSS --}}
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        {{-- Custom CSS --}}
        @yield('custom-css')
        
  </head>

  <body>
      {{-- Navigation bar --}}
      @include('../includes/dashboard/dashboard-nav')

      {{-- Main content --}}
      @yield('main-content')

      {{-- Footer --}}
      @include('../includes/dashboard/dashboard-footer')

      <script src="{{ asset("js/jquery.js") }}"></script>
      <script src="{{ asset("js/wow.min.js") }}"></script>
      <script src="{{ asset("js/vendor.js") }}"></script>
      <script src="{{ asset("js/app.js") }}"></script>

      {{-- Load custom JS files for certain page --}}
      @yield('custom-js')

  </body>
</html>