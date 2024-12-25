@extends('website.layout.app')
@section('title', __('web.faqs'))
@section('content')

<!--Banner Section-->
<x-banner :title="__('web.faqs')" />

<!--Questions-->
<x-questions class="pt-120" :questions="$questions" />

@endsection