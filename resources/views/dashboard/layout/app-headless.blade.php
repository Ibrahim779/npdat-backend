<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ session('dir') }}">
@include('dashboard.layout.head')

<body class="g-sidenav-show  bg-gray-100 {{ session('dir') }}">

    <main class="main-content border-radius-lg">

        @yield('content')
    </main>
    @include('dashboard.layout.script')
</body>

</html>
