<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="keywords"
      content="HTML Template, site template, seo, marketing, creative, corporate, modern, multipurpose, one page, business, responsive, minimal, saas, startup"
    />
    <meta name="author" content="LiquidThemes" />
    <meta
      name="description"
      content="Hub is a HTML template with high performance, and award-winning design collection."
    />
    <meta property="og:title" content="Hub HTML template" />
    <meta
      property="og:description"
      content="Hub is a HTML template with high performance, and award-winning design collection."
    />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{asset('assets/images/common/og-image.jpg')}}" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ $general_settings->getLogo() }}">

    <link
      rel="stylesheet"
      href="{{asset('assets/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/utility.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/classic.css')}}" />
    
    {{-- <link rel="stylesheet" href="{{asset('assets/css/demo/start-hub-3/base.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/hub/hub-careers.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo/company/company.css')}}" /> --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/css/LBI/products.css')}}" /> --}}
    
    @stack('css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&family=Rubik:wght@600&display=swap"
      rel="stylesheet"
    />

    <title> {{ __('web.LBI') }} | @yield('title')</title>
  </head>