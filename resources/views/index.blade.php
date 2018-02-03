@extends('layouts.master-home')

@section('title', 'Home')

@section('custom-css')
	<link rel="stylesheet" href="{{ asset("css/homepage.css") }}">
@endsection

@section('main-content')
	{{-- Greeting --}}
	@include('includes/index-page/greeting-home')
    
@endsection

@section('custom-js')
	<script src="{{ asset('js/particles.min.js') }}"></script>
	<script src="{{ asset('js/particles-load.js') }}"></script>
@endsection
