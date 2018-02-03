@extends('layouts.master-home')

@section('title', 'Login')

@section('custom-css')
	<link rel="stylesheet" href="{{ asset("css/login.css") }}">
@endsection

@section('main-content')
	{{-- Signup slides --}}
	@include('../includes/login-page/login-form')
@endsection
