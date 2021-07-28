<!doctype html>
<html class="no-js" lang="en">

<head>
    @php
    $admin_settings = App\Models\Admin::find(1);
    @endphp
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@if(session()->get('language') == 'bangla'){{ $admin_settings->meta_description_ban }}@else{{ $admin_settings->meta_description_en }}@endif">
    <meta name="title" content="@if(session()->get('language') == 'bangla'){{ $admin_settings->meta_title_ban }}@else{{ $admin_settings->meta_title_en }}@endif">
    <meta name="author" content="@if(session()->get('language') == 'bangla'){{ $admin_settings->meta_author_ban }}@else{{ $admin_settings->meta_author_en }}@endif">
    <meta name="domain" content="@if(session()->get('language') == 'bangla')'coderkhayrul.xyz'@else'coderkhayrul.xyz'@endif">
    <meta name="keyword" content="@if(session()->get('language') == 'bangla'){{ $admin_settings->meta_keyword_ban }}@else{{ $admin_settings->meta_keyword_en }}@endif">
    <meta name="theme color" content="{{ $admin_settings->theme_color }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($admin_settings->fav_icon) }}">

    <!-- CSS
	============================================ -->

    @yield('custrom_style')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins.css">
    <!-- rypp -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/rypp.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/style.css">
    <!-- Modernizer JS -->
    <script src="{{ asset('frontend') }}/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>

    <!-- Main Wrapper -->
    <div id="main-wrapper">

        <!-- Header Top Start -->
        @include('frontend.common.topbar')
        <!-- Header Top End -->

        <!-- Menu Section Start -->
        @include('frontend.common.navbar')
        <!-- Menu Section End -->

        <!-- Hero Section Start -->
        @yield('content')

        <!-- Brand Section Start -->
        @include('frontend.common.brand')
        <!-- Brand Section End -->

        <!-- Footer Section Start -->
        @include('frontend.common.footer')
        <!-- Footer Section End -->

    </div>


    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="{{ asset('frontend') }}/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Popper JS -->
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('frontend') }}/js/plugins.js"></script>
    <!-- rypp JS -->
    <script src="{{ asset('frontend') }}/js/rypp.js"></script>
    <script src="{{ asset('frontend') }}/js/ytp-playlist.js"></script>
    <!-- Ajax Mail JS -->
    <script src="{{ asset('frontend') }}/js/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('frontend') }}/js/main.js"></script>
    @yield('custrom_script')

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60faff88f70dd811"></script>


</body>

</html>
