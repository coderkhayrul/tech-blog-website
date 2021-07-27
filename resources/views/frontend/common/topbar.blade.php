
@php
$admin_settings = App\Models\Admin::find(1);
@endphp

<div class="header-top section">
    <div class="container">
        <div class="row">

            <!-- Header Top Links Start -->
            <div class="header-top-links col-md-9 col-6">

                <!-- Header Links -->
                <ul class="header-links">
                    <li class="disabled block d-none d-md-block"><a href="#"><i class="fa fa-clock-o"></i>@if (session()->get('language') == 'bangla')২৫ মার্চ, ২০২১ রবিবার @else Sunday, March 25, 2021 @endif</a></li>
                    <li>
                        <a href="#"><i class="fa fa-info-circle"></i> @if (session()->get('language') == 'bangla')আমাদের সম্পর্কে @else About Us @endif</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comments"></i>@if (session()->get('language') == 'bangla')যোগাযোগ করুন @else Contact Us @endif</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-exclamation-triangle"></i>@if (session()->get('language') == 'bangla')ডিএমসিএ @else DMCA @endif</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-rss-square"></i>@if (session()->get('language') == 'bangla')ব্লগ @else Blog @endif</a>
                    </li>
                    @if (session()->get('language') == 'bangla')
                    <li>
                        <a href="{{ route('english.language') }}"><i class="fa fa-language"></i></i>English</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('bangla.language') }}"><i class="fa fa-language"></i>বাংলা</a>
                    </li>
                    @endif

                </ul>


            </div><!-- Header Top Links End -->

            <!-- Header Top Social Start -->
            <div class="header-top-social col-md-3 col-6">

                <!-- Header Social -->
                <div class="header-social">
                    <a target="_blank" href="{{ $admin_settings->facebook_url }}"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="{{ $admin_settings->youtube_url }}"><i class="fa fa-youtube-play"></i></a>
                    <a target="_blank" href="{{ $admin_settings->twitter_url }}"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="{{ $admin_settings->pinterest_url }}"><i class="fa fa-pinterest-p"></i></a>
                </div>

            </div><!-- Header Top Social End -->
        </div>
    </div>
</div>

<!-- Header Start -->
<div class="header-section section">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo -->
            <div class="header-logo col-md-4 d-none d-md-block">
                <a href="{{ url('/') }}" class="logo"><img src="{{ asset($admin_settings->title_image) }}" alt="Logo"></a>
            </div>

            <!-- Header Banner -->
            <div class="header-banner col-md-8 col-12">
                <div class="banner"><a href="#"><img src="{{ asset('frontend') }}/img/banner/header-banner-1.png" alt="Header Banner"></a></div>
            </div>

        </div>
    </div>
</div>
<!-- Header End -->
