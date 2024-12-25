@extends('website.layout.app')
@section('title', __('main.privacy_policy'))
@section('content')

<!--Banner Section-->
<x-banner :title="__('main.privacy_policy')" />

<div class="privacy-policy">
   <div class="container">
      <div class="row  justify-content-center">
         <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="content">
               {!! $privacy->body !!}
            </div>
         </div>
      </div>
   </div>
</div>

@endsection