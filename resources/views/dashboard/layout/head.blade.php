<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dashboard/img/apple-icon.svg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ $general_settings->getLogo() }}">
    <title>{{ __('main.dashboard') }} | @yield('title')</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('dashboard/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('dashboard/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('dashboard/fonts/tajawal/tajawal.css') }}">
    @stack('style')

    <link id="pagestyle" href="{{ asset('dashboard/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('dashboard/css/soft-ui-dashboard-rtl.css') }}">
    @endif
</head>
