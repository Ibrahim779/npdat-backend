<!--   Core JS Files   -->
<script src="{{ asset('dashboard/js/core/popper.min.js') }}"></script>
<script src="{{ asset('dashboard/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/choices.min.js') }}"></script>
<!-- Kanban scripts -->
<script src="{{ asset('dashboard/js/plugins/dragula/dragula.min.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/jkanban/jkanban.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/jquery/jquery.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/sweetalert.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
@stack('script')

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->

@include('sweetalert::alert')


<script src="{{ asset('dashboard/js/soft-ui-dashboard.min.js?v=1.0.7') }}"></script>