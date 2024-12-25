@extends('website.layout.app')
@section('title', __('web.about'))
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/demo/company/base.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/company/company-about.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/LBI/about.css')}}" />
@endpush
@section('content')

    <!-- start Banner -->
    @include('website.about.components.banner')
    <!-- end Bannar  -->

    <!-- Start Clients -->
    @include('website.about.components.box-images')
    <!-- End Clients -->
    <!-- Start Services -->
    @include('website.about.components.goals')
    <!-- End Services -->

    <!-- Satrt Napdat -->
    @include('website.about.components.icons')
    <!-- End Napdat -->
    <!-- Start Rova -->
    @include('website.about.components.counters')
    <!-- End Rova -->

    <!-- Start Invest -->
    @include('website.about.components.ceo')
    <!-- End Invest -->

    <!-- Start contact modal -->
    @include('website.about.components.partners')
    <!-- End contact modal -->
@endsection