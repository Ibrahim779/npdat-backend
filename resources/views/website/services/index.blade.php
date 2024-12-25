@extends('website.layout.app')
@section('title', __('web.about'))
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/demo/company/base.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/company/company-services-2')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/LBI/services.css')}}" />
@endpush
@section('content')

    <!-- start Banner -->
    @include('website.services.components.banner')
    <!-- end Bannar  -->

    <!-- Start Clients -->
    @include('website.services.components.services')
    <!-- End Clients -->

@endsection