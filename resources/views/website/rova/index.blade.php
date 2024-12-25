@extends('website.layout.app')
@section('title', __('web.rova'))
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/demo/start-hub-4/start-hub-4.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/start-hub-4/start-hub-4-about.cs')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/company/base.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/restaurant.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/LBI/brand.css')}}" />
@endpush
@section('content')

    @include('website.rova.components.banner')

    @include('website.rova.components.partners')
    
    @include('website.rova.components.reviews')
    
    @include('website.rova.components.goals')
    
    @include('website.rova.components.box-images')

    @include('website.rova.components.products')

    @include('website.rova.components.gallery')

    @include('website.rova.components.partners')

@endsection