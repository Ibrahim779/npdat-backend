@extends('website.layout.app')
@section('title', __('web.terms_policy'))
@section('content')

<!--Banner Section-->
<x-banner :title="__('web.terms_policy')" />

<!--Questions-->
{{--
<x-questions class="pt-120" :questions="$terms" /> --}}
<x-terms class="pt-120" :terms="$terms" />

@endsection