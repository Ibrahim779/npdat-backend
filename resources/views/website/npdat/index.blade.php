@extends('website.layout.app')
@section('title', __('web.npdat'))
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/demo/start-hub-3/base.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/hub/hub-careers.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/company/company.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/LBI/products.css')}}" />
@endpush
@section('content')

    @include('website.npdat.components.banner')

    @include('website.npdat.components.box-images')

    @include('website.npdat.components.app1')

    @include('website.npdat.components.app2')

    @include('website.npdat.components.goals')

    @include('website.npdat.components.why')

    @include('website.npdat.components.gallery')

    @include('website.npdat.components.qoutes')
    
    @include('website.npdat.components.download')

@endsection