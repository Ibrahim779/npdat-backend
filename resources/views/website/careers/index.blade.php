@extends('website.layout.app')
@section('title', __('web.careers'))
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/demo/company/base.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/hub/base.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/hub/hub-careers.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/LBI/careers.css')}}" />
@endpush
@section('content')

    @include('website.careers.components.banner')

    @include('website.careers.components.jobs')
 
@endsection