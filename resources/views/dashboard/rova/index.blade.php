@extends('dashboard.layout.app')
@section('title', trans('main.pages'))
@section('main_folder', __('main.website'))
@section('sub_folder', __('main.pages'))
@section('content')
<div class="row mb-5">
  <div class="col-lg-9 mt-lg-0">
    @include('dashboard.rova.components.first_section')
    @include('dashboard.rova.components.goals')
    @include('dashboard.rova.components.banner')
    @include('dashboard.rova.components.products')

  </div>
</div>
@endsection
@push('style')
<link rel="stylesheet" href="{{asset('dashboard/js/plugins/imageUpload/upload.css')}}" type="text/css">
@endpush
@push('script')
<script src="{{asset('dashboard/js/plugins/imageUpload/upload.js')}}"></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
@endpush