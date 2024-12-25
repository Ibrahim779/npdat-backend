@extends('dashboard.layout.app')
@section('title', trans('main.settings'))
@section('main_folder', __('main.website'))
@section('sub_folder', __('main.settings'))
@section('content')
<div class="row mb-5">
  @include('dashboard.settings.components.fixed')
  <div class="col-lg-9 mt-lg-0">
    @include('dashboard.settings.components.general')
    @include('dashboard.settings.components.socialmedia')
    @include('dashboard.settings.components.app')
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