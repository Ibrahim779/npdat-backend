<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 ms-3 {{ app()->getLocale() == 'ar' ? 'fixed-end' : 'fixed-start' }}"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('admin.index') }}">
            <img src="{{ $general_settings->getLogo() }}" class="navbar-brand-img h-100" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6
                    class="{{ app()->getLocale() == 'ar' ? 'pe-4' : 'ps-4' }}  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
                    @lang('main.dashboard')</h6>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#dashboardsExamples"
                    class="nav-link {{ request()->is('admin/dashboard/*') ? 'active collapsed' : '' }}"
                    aria-controls="dashboardsExamples" role="button"
                    aria-expanded="{{ request()->is('admin/dashboard/*') ? 'true' : 'false' }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  {{ app()->getLocale() == 'ar' ? 'ms-2' : 'me-2' }} {{ request()->is('admin/dashboard/*') ? 'show collapse' : '' }}">
                        <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>shop </title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(0.000000, 148.000000)">
                                            <path class="color-background"
                                                d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                opacity="0.598981585"></path>
                                            <path class="color-background"
                                                d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1" style="margin-left: 100%">@lang('main.management')</span>
                </a>
                <div class="collapse {{ request()->is('admin/dashboard/*') ? 'show' : '' }}" id="dashboardsExamples">
                    <ul class="nav ms-4 ps-3">
                        @can('browse role')
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->is('admin/dashboard/roles') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.roles.index') }}">
                                    <span class="sidenav-normal"> @lang('main.roles') </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('admin/dashboard/admins') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.admins.index') }}">
                                    <span class="sidenav-normal"> @lang('main.admins') </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#settingsExamples"
                    class="nav-link {{ request()->is('admin/settings/*') ? 'active collapsed' : '' }}"
                    aria-controls="settingsExamples" role="button"
                    aria-expanded="{{ request()->is('admin/settings/*') ? 'true' : 'false' }}">
                    <div
                        class="icon icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  {{ app()->getLocale() == 'ar' ? 'ms-2' : 'me-2' }} {{ request()->routeIs('admin.attributes.*') ? 'show collapse' : '' }}">
                        <i class="fas fa-cog"></i>
                    </div>
                    <span class="nav-link-text ms-1">@lang('main.settings')</span>
                </a>
                <div class="collapse {{ request()->is('admin/settings/*') ? 'show' : '' }}" id="settingsExamples">
                    <ul class="nav ms-4 ps-3">
                        @can('browse role')
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->is('admin/settings') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.settings.index') }}">
                                    <span class="sidenav-normal"> @lang('main.general') </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </li>
            <hr class="horizontal dark mt-0">

            

            <li class="nav-item mt-3">
                <h6
                    class="{{ app()->getLocale() == 'ar' ? 'pe-4' : 'ps-4' }}   ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
                    @lang('main.website')</h6>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pagesExamples"
                    class="nav-link {{ request()->is('admin/pages/*') ? 'active collapsed' : '' }}"
                    aria-controls="pagesExamples" role="button"
                    aria-expanded="{{ request()->is('admin/pages/*') ? 'true' : 'false' }}">
                    <div
                        class="icon icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  {{ app()->getLocale() == 'ar' ? 'ms-2' : 'me-2' }} {{ request()->routeIs('admin.attributes.*') ? 'show collapse' : '' }}">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <span class="nav-link-text ms-1">@lang('main.pages')</span>
                </a>
                <div class="collapse {{ request()->is('admin/pages/*') ? 'show' : '' }}" id="pagesExamples">
                    <ul class="nav ms-4 ps-3">
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->is('admin/pages/home') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.pages.home.index') }}">
                                    <span class="sidenav-normal"> @lang('main.home') </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->is('admin/pages/about') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.pages.about.index') }}">
                                    <span class="sidenav-normal"> @lang('main.about') </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->is('admin/pages/npdat') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.pages.npdat.index') }}">
                                    <span class="sidenav-normal"> @lang('main.npdat') </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->is('admin/pages/rova') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.pages.rova.index') }}">
                                    <span class="sidenav-normal"> @lang('main.rova') </span>
                                </a>
                            </li>
                    </ul>
                </div>
            </li>
            @can('browse partner')
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#partner"
                        class="nav-link {{ request()->routeIs('admin.partners.*') ? 'active collapsed' : '' }}"
                        aria-controls="web" role="button"
                        aria-expanded="{{ request()->routeIs('admin.partners.*') ? 'true' : 'false' }}">
                        <div
                            class="icon icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  {{ app()->getLocale() == 'ar' ? 'ms-2' : 'me-2' }} {{ request()->routeIs('admin.web.*') ? 'show collapse' : '' }}">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">@lang('main.partners')</span>
                    </a>
                    <div class="collapse {{ request()->routeIs('admin.partners.*') ? 'show' : '' }}" id="partner"
                        style="">
                        <ul class="nav nav-sm flex-column ms-4 ps-3">
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->routeIs('admin.partners.index') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.partners.index') }}">
                                    <span class="sidenav-mini-icon"> @lang('main.all') </span>
                                    <span class="sidenav-normal"> @lang('main.partners') </span>
                                </a>
                            </li>
                            @can('add partner')
                                <li class="nav-item ">
                                    <a class="nav-link {{ request()->routeIs('admin.partners.create') ? 'active collapsed' : '' }}"
                                        href="{{ route('admin.partners.create') }}">
                                        <span class="sidenav-mini-icon"> @lang('main.new') </span>
                                        <span class="sidenav-normal"> @lang('main.new_partner') </span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </li>
            @endcan
            @can('browse service')
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#service"
                        class="nav-link {{ request()->routeIs('admin.services.*') ? 'active collapsed' : '' }}"
                        aria-controls="web" role="button"
                        aria-expanded="{{ request()->routeIs('admin.services.*') ? 'true' : 'false' }}">
                        <div
                            class="icon icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  {{ app()->getLocale() == 'ar' ? 'ms-2' : 'me-2' }} {{ request()->routeIs('admin.web.*') ? 'show collapse' : '' }}">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <span class="nav-link-text ms-1">@lang('main.services')</span>
                    </a>
                    <div class="collapse {{ request()->routeIs('admin.services.*') ? 'show' : '' }}" id="service"
                        style="">
                        <ul class="nav nav-sm flex-column ms-4 ps-3">
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->routeIs('admin.services.index') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.services.index') }}">
                                    <span class="sidenav-mini-icon"> @lang('main.all') </span>
                                    <span class="sidenav-normal"> @lang('main.services') </span>
                                </a>
                            </li>
                            {{-- @can('add service')
                                <li class="nav-item ">
                                    <a class="nav-link {{ request()->routeIs('admin.services.create') ? 'active collapsed' : '' }}"
                                        href="{{ route('admin.services.create') }}">
                                        <span class="sidenav-mini-icon"> @lang('main.new') </span>
                                        <span class="sidenav-normal"> @lang('main.new_service') </span>
                                    </a>
                                </li>
                            @endcan --}}
                        </ul>
                    </div>
                </li>
            @endcan

            @can('browse aboutimage')
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#aboutImage"
                        class="nav-link {{ request()->routeIs('admin.aboutImages.*') ? 'active collapsed' : '' }}"
                        aria-controls="web" role="button"
                        aria-expanded="{{ request()->routeIs('admin.aboutImages.*') ? 'true' : 'false' }}">
                        <div
                            class="icon icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  {{ app()->getLocale() == 'ar' ? 'ms-2' : 'me-2' }} {{ request()->routeIs('admin.web.*') ? 'show collapse' : '' }}">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <span class="nav-link-text ms-1">@lang('main.aboutImages')</span>
                    </a>
                    <div class="collapse {{ request()->routeIs('admin.aboutImages.*') ? 'show' : '' }}" id="aboutImage"
                        style="">
                        <ul class="nav nav-sm flex-column ms-4 ps-3">
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->routeIs('admin.aboutImages.index') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.aboutImages.index') }}">
                                    <span class="sidenav-mini-icon"> @lang('main.all') </span>
                                    <span class="sidenav-normal"> @lang('main.aboutImages') </span>
                                </a>
                            </li>
                            {{-- @can('add aboutImage')
                                <li class="nav-item ">
                                    <a class="nav-link {{ request()->routeIs('admin.aboutImages.create') ? 'active collapsed' : '' }}"
                                        href="{{ route('admin.aboutImages.create') }}">
                                        <span class="sidenav-mini-icon"> @lang('main.new') </span>
                                        <span class="sidenav-normal"> @lang('main.new_aboutImage') </span>
                                    </a>
                                </li>
                            @endcan --}}
                        </ul>
                    </div>
                </li>
            @endcan

            @can('browse weoffer')
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#weOffer"
                        class="nav-link {{ request()->routeIs('admin.weOffers.*') ? 'active collapsed' : '' }}"
                        aria-controls="web" role="button"
                        aria-expanded="{{ request()->routeIs('admin.weOffers.*') ? 'true' : 'false' }}">
                        <div
                            class="icon icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  {{ app()->getLocale() == 'ar' ? 'ms-2' : 'me-2' }} {{ request()->routeIs('admin.web.*') ? 'show collapse' : '' }}">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <span class="nav-link-text ms-1">@lang('main.weOffers')</span>
                    </a>
                    <div class="collapse {{ request()->routeIs('admin.weOffers.*') ? 'show' : '' }}" id="weOffer"
                        style="">
                        <ul class="nav nav-sm flex-column ms-4 ps-3">
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->routeIs('admin.weOffers.index') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.weOffers.index') }}">
                                    <span class="sidenav-mini-icon"> @lang('main.all') </span>
                                    <span class="sidenav-normal"> @lang('main.weOffers') </span>
                                </a>
                            </li>
                            @can('add weoffer')
                                <li class="nav-item ">
                                    <a class="nav-link {{ request()->routeIs('admin.weOffers.create') ? 'active collapsed' : '' }}"
                                        href="{{ route('admin.weOffers.create') }}">
                                        <span class="sidenav-mini-icon"> @lang('main.new') </span>
                                        <span class="sidenav-normal"> @lang('main.new_weOffer') </span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </li>
            @endcan
            <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#rova"
                        class="nav-link {{ request()->routeIs('admin.rova.*') ? 'active collapsed' : '' }}"
                        aria-controls="web" role="button"
                        aria-expanded="{{ request()->routeIs('admin.rova.*') ? 'true' : 'false' }}">
                        <div
                            class="icon icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  {{ app()->getLocale() == 'ar' ? 'ms-2' : 'me-2' }} {{ request()->routeIs('admin.web.*') ? 'show collapse' : '' }}">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">@lang('main.rova')</span>
                    </a>
                    <div class="collapse {{ request()->routeIs('admin.rova.*') ? 'show' : '' }}" id="rova"
                        style="">
                        <ul class="nav nav-sm flex-column ms-4 ps-3">
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->routeIs('admin.rova.index') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.rova-products.index') }}">
                                    <span class="sidenav-mini-icon"> @lang('main.all') </span>
                                    <span class="sidenav-normal"> @lang('main.rova_products') </span>
                                </a>
                            </li>
                            {{-- @can('add partner') --}}
                                <li class="nav-item ">
                                    <a class="nav-link {{ request()->routeIs('admin.rova.create') ? 'active collapsed' : '' }}"
                                        href="{{ route('admin.rova-products.create') }}">
                                        <span class="sidenav-mini-icon"> @lang('main.new') </span>
                                        <span class="sidenav-normal"> @lang('main.rova_product') </span>
                                    </a>
                                </li>
                            {{-- @endcan --}}
                        </ul>
                    </div>
                </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#web"
                    class="nav-link {{ request()->routeIs('admin.web.*') ? 'active collapsed' : '' }}"
                    aria-controls="web" role="button"
                    aria-expanded="{{ request()->routeIs('admin.web.*') ? 'true' : 'false' }}">
                    <div
                        class="icon icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  {{ app()->getLocale() == 'ar' ? 'ms-2' : 'me-2' }} {{ request()->routeIs('admin.web.*') ? 'show collapse' : '' }}">
                        <i class="fas fa-globe"></i>
                    </div>
                    <span class="nav-link-text ms-1">@lang('main.web')</span>
                </a>
                <div class="collapse {{ request()->routeIs('admin.web.*') ? 'show' : '' }}" id="web"
                    style="">
                    <ul class="nav ms-4 ps-3">


                        @can('browse contact')
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->routeIs('admin.web.contacts.index') ? 'active' : '' }}"
                                    href="{{ route('admin.web.contacts.index') }}">
                                    <span class="sidenav-mini-icon text-xs"> @lang('main.contacts') </span>
                                    <span class="sidenav-normal">@lang('main.contacts')</span>
                                </a>
                            </li>
                        @endcan
{{-- 
                        @can('browse subscribe')
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->routeIs('admin.web.subscribes.index') ? 'active' : '' }}"
                                    href="{{ route('admin.web.subscribes.index') }}">
                                    <span class="sidenav-mini-icon text-xs"> @lang('main.subscribes') </span>
                                    <span class="sidenav-normal">@lang('main.subscribes')</span>
                                </a>
                            </li>
                        @endcan
                        @can('browse page')
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.web.pages.*') ? 'active' : '' }}"
                                    href="{{ route('admin.web.pages.index') }}">
                                    <span class="sidenav-mini-icon text-xs"> @lang('main.page') </span>
                                    <span class="sidenav-normal">@lang('main.pages')</span>
                                </a>
                            </li>
                        @endcan --}}
                    </ul>
                </div>
            </li>
            {{-- @can('browse question')
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#question"
                        class="nav-link {{ request()->routeIs('admin.questions.*') ? 'active collapsed' : '' }}"
                        aria-controls="web" role="button"
                        aria-expanded="{{ request()->routeIs('admin.questions.*') ? 'true' : 'false' }}">
                        <div
                            class="icon icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  {{ app()->getLocale() == 'ar' ? 'ms-2' : 'me-2' }} {{ request()->routeIs('admin.web.*') ? 'show collapse' : '' }}">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <span class="nav-link-text ms-1">@lang('web.faqs')</span>
                    </a>
                    <div class="collapse {{ request()->routeIs('admin.questions.*') ? 'show' : '' }}" id="question"
                        style="">
                        <ul class="nav nav-sm flex-column ms-4 ps-3">
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->routeIs('admin.questions.index') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.questions.index') }}">
                                    <span class="sidenav-mini-icon"> @lang('main.all') </span>
                                    <span class="sidenav-normal"> @lang('web.faqs') </span>
                                </a>
                            </li>
                            @can('add question')
                                <li class="nav-item ">
                                    <a class="nav-link {{ request()->routeIs('admin.questions.create') ? 'active collapsed' : '' }}"
                                        href="{{ route('admin.questions.create') }}">
                                        <span class="sidenav-mini-icon"> @lang('main.new') </span>
                                        <span class="sidenav-normal"> @lang('main.new_question') </span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </li>
            @endcan --}}
            {{-- @can('browse term')
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#term"
                        class="nav-link {{ request()->routeIs('admin.terms.*') ? 'active collapsed' : '' }}"
                        aria-controls="web" role="button"
                        aria-expanded="{{ request()->routeIs('admin.terms.*') ? 'true' : 'false' }}">
                        <div
                            class="icon icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  {{ app()->getLocale() == 'ar' ? 'ms-2' : 'me-2' }} {{ request()->routeIs('admin.web.*') ? 'show collapse' : '' }}">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <span class="nav-link-text ms-1">@lang('web.terms_policy')</span>
                    </a>
                    <div class="collapse {{ request()->routeIs('admin.terms.*') ? 'show' : '' }}" id="term"
                        style="">
                        <ul class="nav nav-sm flex-column ms-4 ps-3">
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->routeIs('admin.terms.index') ? 'active collapsed' : '' }}"
                                    href="{{ route('admin.terms.index') }}">
                                    <span class="sidenav-mini-icon"> @lang('main.all') </span>
                                    <span class="sidenav-normal"> @lang('web.terms_policy') </span>
                                </a>
                            </li>
                            @can('add term')
                                <li class="nav-item ">
                                    <a class="nav-link {{ request()->routeIs('admin.terms.create') ? 'active collapsed' : '' }}"
                                        href="{{ route('admin.terms.create') }}">
                                        <span class="sidenav-mini-icon"> @lang('main.new') </span>
                                        <span class="sidenav-normal"> @lang('main.new_term') </span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </li>
            @endcan

            @can('browse privacy')
                <li class="nav-item">
                    <a class="nav-link  {{ request()->routeIs('admin.privacy.*') ? 'active' : '' }}"
                        href="{{ route('admin.privacy.index') }}">
                        <div
                            class="icon icon-sm shadow border-radius-md bg-white text-center {{ app()->getLocale() == 'ar' ? 'ms-2' : 'me-2' }} d-flex align-items-center justify-content-center">
                            <i class="fas fa-user-lock"></i>
                        </div>
                        <span class="nav-link-text ms-1">@lang('main.privacy_policy')</span>
                    </a>
                </li>
            @endcan --}}

        </ul>
    </div>
</aside>
