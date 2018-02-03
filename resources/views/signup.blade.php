@extends('layouts.master-home')

@section('title', 'Sign up')

@section('custom-css')
	<link rel="stylesheet" href="{{ asset("css/signup.css") }}">
@endsection

@section('main-content')
	{{-- Signup slides --}}
	@include('includes/signup-page/swiper')
@endsection

@section('custom-js')
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          pagination: '.swiper-pagination',
          paginationType: 'progress'
        });
    </script>

    <script>
        $('#Basic').on('click', function() {
          $('.Ultimate').slideUp(250);
          $('.Standard').slideUp(250);
          $('.Basic').slideDown(250);
        });
        $('#Standard').on('click', function() {
          $('.Basic').slideUp(250);
          $('.Ultimate').slideUp(250);
          $('.Standard').slideDown(250);
        });
        $('#Ultimate').on('click', function() {
          $('.Basic').slideUp(250);
          $('.Standard').slideUp(250);
          $('.Ultimate').slideDown(250);
        });
    </script>
@endsection