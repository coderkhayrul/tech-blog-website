<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Volt - Free Bootstrap 5 Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">
    <meta name="description"
        content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('backend') }}/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend') }}/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend') }}/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('backend') }}/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="{{ asset('backend') }}/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome -->
    <link type="text/css" href="{{ asset('backend') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('backend') }}/vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('backend') }}/css/volt.css" rel="stylesheet">

    <!-- JQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- DataTable CDN --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

    {{-- Toster Notification CDN --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />



    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>


    {{-- NAVBAR --}}
    @include('admin.common.sidebar')




    <main class="content">

        @include('admin.common.navbar')

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-3">

        </div>

        <div class="row justify-content-md-center">

            @yield('content')

        </div>
        {{-- @include('admin.common.footer') --}}
    </main>

    <!-- Core -->
    <script src="{{ asset('backend') }}/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ asset('backend') }}/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('backend') }}/vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="{{ asset('backend') }}/vendor/nouislider/distribute/nouislider.min.js"></script>

    <!-- Jarallax -->
    <script src="{{ asset('backend') }}/vendor/jarallax/dist/jarallax.min.js"></script>

    <!-- Smooth scroll -->
    <script src="{{ asset('backend') }}/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Count up -->
    <script src="{{ asset('backend') }}/vendor/countup.js/dist/countUp.umd.js"></script>

    <!-- Notyf -->
    <script src="{{ asset('backend') }}/vendor/notyf/notyf.min.js"></script>

    <!-- Charts -->
    <script src="{{ asset('backend') }}/vendor/chartist/dist/chartist.min.js"></script>

    <script src="{{ asset('backend') }}/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="{{ asset('backend') }}/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Simplebar -->
    <script src="{{ asset('backend') }}/vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="{{ asset('backend') }}/assets/js/volt.js"></script>

    {{-- sweetalert2 Scrites --}}
    <script src="{{ asset('backend') }}/js/code.js"></script>


    {{-- Data Table --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js">
    </script>

    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();
        });

    </script>

    {{-- DATA TABLE --}}


    {{-- Notifications --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script type="text/javascript">
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>

    {{-- sweetalert2 cdn --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('custrom_script')


</body>

</html>
