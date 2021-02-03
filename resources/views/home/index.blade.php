@php
  $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')
    @include('home._slider')
    @include('home._content')
@endsection
