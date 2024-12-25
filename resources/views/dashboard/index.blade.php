@extends('dashboard.layout.app')
@section('title', trans('web.home'))
@section('main_folder', __('main.dashboard'))
@section('sub_folder', __('web.home'))
@section('content')

    @include('dashboard.parts.statistics')

@endsection
@push('script')
    <script src="{{ asset('dashboard/js/plugins/threejs.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/orbit-controls.js') }}"></script>

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
