@extends('website.layout.app')
@section('title', __('web.contacts'))
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/demo/company/base.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/company/company-contact.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/LBI/contact-us.css')}}" />
@endpush
@section('content')

    @include('website.contacts.components.banner')

    @include('website.contacts.components.contact')
 
@endsection