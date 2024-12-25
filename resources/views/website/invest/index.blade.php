@extends('website.layout.app')
@section('title', __('web.invest'))
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/demo/hub/base.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/hub/hub-careers.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/company/base.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/creative-services.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/LBI/real-estate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/asymmetric-agency/base.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/asymmetric-agency/asymmetric-agency.css')}}" />
@endpush
@section('content')

    @include('website.invest.components.banner')

    @include('website.invest.components.goals')
    
    @include('website.invest.components.gallery')
    
    @include('website.invest.components.box-images')

    @include('website.invest.components.products')

    @include('website.invest.components.plans')

    @include('website.invest.components.team')
    
    @include('website.invest.components.qoutes')

@endsection