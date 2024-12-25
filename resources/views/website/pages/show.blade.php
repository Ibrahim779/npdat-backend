@extends('website.layout.app')
@section('title', $page->title)
@section('content')

<!--Banner Section-->
<x-banner :title="$page->title" />

<div class="privacy-policy">
   <div class="container">
      <div class="row  justify-content-center">
         <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="content">
               {!! $page->body !!}
            </div>
         </div>
      </div>
   </div>
</div>

@endsection