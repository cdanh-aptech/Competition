@extends('layout.index')

@section('title')
    Trang chủ
@endsection

@section ('content')

    <!-- Slide--> 
    @include('layout.slide')
    <!-- End Slide-->

    <!-- Intro--> 
    @include('layout.intro')
    <!-- End Intro-->

    <!-- Dich vu -->
    @include('layout.service')
    <!-- End Dich vu -->

 @endsection

 
