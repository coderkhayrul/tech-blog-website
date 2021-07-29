@extends('frontend.fronted_master')

@section('title')
About - Trick It World
@endsection

@section('content')
<!-- Page Banner Section Start -->
<div class="page-banner-section section mt-30 mb-30">
    <div class="container">
        <div class="row row-1">

            <!-- Page Banner Start -->
            <div class="col-12">
                <div class="page-banner"
                    style="background-image: url({{ asset('frontend') }}/img/bg/page-banner-fashion.jpg)">
                    <h2>About us</h2>
                    <ol class="page-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">About</li>
                    </ol>
                </div>
            </div><!-- Page Banner End -->

        </div>
    </div>
</div><!-- Page Banner Section End -->

<!-- Post Section Start -->
<div class="post-section section">
    <div class="container">

        <!-- Feature Post Row Start -->
        <div class="row">

            <div class="col-lg-8 col-12 mb-50">

                <!-- Post Block Wrapper Start -->
                <div class="post-block-wrapper">

                    <!-- Post Block Head Start -->
                    <div class="head">

                        <!-- Title -->
                        <h4 class="title">About TRICK IT WORLD</h4>

                    </div><!-- Post Block Head End -->

                    <!-- Post Block Body Start -->
                    <div class="body">

                        <div class="contact-info row">

                            <div class="col-md-12">
                                <p>Founded in 2007, MUO has grown into one of the largest online technology publications
                                    on the web. Our expertise in all things tech has resulted in millions of visitors
                                    every month and hundreds of thousands of fans on social media. We believe that
                                    technology is only as useful as the one who uses it. Our aim is to equip readers
                                    like you with the know-how to make the most of today's tech, explained in simple
                                    terms that anyone can understand. We also encourage readers to use tech in
                                    productive and meaningful ways.
                                    <br><br>
                                    Not a tech expert yet? Every MUO article will bring you one step closer.</p>
                                <h2><strong>Technology, Simplified</strong></h2>
                                <br>
                                We're tech enthusiasts on a mission to teach the world how to use and understand the
                                tech in their lives. Phones, laptops, gadgets, apps, software, websites, services---if
                                it can make your life better, we'll show you all the tips, tricks, and techniques you
                                need to know to get the most out of what you have.

                            </div>

                        </div>

                    </div><!-- Post Block Body End -->

                </div><!-- Post Block Wrapper End -->

            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4 col-12 mb-50">
                <div class="row">

                    <!-- Single Sidebar Social Join Start -->
                    @include('frontend.size_widget.social_join')
                    <!-- Single Sidebar Social Join End -->

                    <!-- Single Sidebar Mid Ads 370 * 451  Start -->
                    @include('frontend.size_widget.mid_ads')
                    <!-- Single Sidebar Mid Ads 370 * 451  End -->

                    <!-- Single Sidebar Newsletter Start -->
                    @include('frontend.size_widget.newsletter')
                    <!-- Single Sidebar Newsletter End -->

                </div>
            </div><!-- Sidebar End -->

        </div><!-- Feature Post Row End -->

    </div>
</div><!-- Post Section End -->
@endsection
