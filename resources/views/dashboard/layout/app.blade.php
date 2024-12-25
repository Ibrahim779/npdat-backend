<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ session('dir') }}">
@include('dashboard.layout.head')

<body class="g-sidenav-show  bg-gray-100 {{ session('dir') }}">

    @include('dashboard.layout.aside')

    <main class="main-content border-radius-lg">

        @include('dashboard.layout.header')

        <div class="container-fluid py-4 min-vh-85">

            @yield('content')

        </div>
        @include('dashboard.layout.footer')
    </main>
    {{-- @include('dashboard.layout.fixed-plugin') --}}

    @include('dashboard.layout.script')
</body>

</html>
