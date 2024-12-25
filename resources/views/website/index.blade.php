@extends('website.layout.app')
@section('title', __('web.home'))
@push('css')
<link rel="stylesheet" href="{{asset('assets/css/LBI/home.css')}}" />
@endpush
@section('content')

    <!-- start Banner -->
    @include('website.home.banner')
    <!-- end Bannar  -->

    <!-- Start Clients -->
    @include('website.home.partners')
    <!-- End Clients -->
    <!-- Start Services -->
    @include('website.home.services')
    <!-- End Services -->

    <!-- Satrt Napdat -->
    @include('website.home.napdat')
    <!-- End Napdat -->
    <!-- Start Rova -->
    @include('website.home.rova')
    <!-- End Rova -->

    <!-- Start Invest -->
    @include('website.home.invest')
    <!-- End Invest -->

    <!-- Start contact modal -->
    @include('website.home.contact-us')
    <!-- End contact modal -->
@endsection

