@extends('frontend.fronted_master')

@section('title')
Home - Tech Tutorial
@endsection

@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1">

                <!-- Page Banner Start -->
                <div class="col-12">
                    <div class="page-banner" style="background-image: url({{ asset('frontend') }}/img/bg/page-banner-fashion.jpg)">
                        <h2>Contact us</h2>
                        <ol class="page-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contact us</li>
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
                            <h4 class="title">Contact Information.</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <div class="contact-info row">

                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-home"></i>
                                    <p>House No 08, Ro ad No 08 Din Bari, Dhaka, Bangladesh</p>
                                </div>

                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-envelope-open"></i>
                                    <p>Username@gmail.com <br>Damo@gmail.com</p>
                                </div>

                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-headphones"></i>
                                    <p>(+660 256 24857) <br>(+660 256 24857)</p>
                                </div>

                            </div>

                        </div><!-- Post Block Body End -->

                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->
                            <h4 class="title">Send us a Message.</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <form id="contact-form" action="mail.php" method="post">
                                <div class="contact-form row">

                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="name">Name <sup>*</sup></label>
                                        <input type="text" id="name" name="name">
                                    </div>

                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="text" id="email" name="email">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="website">Website <sup>*</sup></label>
                                        <input type="text" id="website" name="website">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="message">Message <sup>*</sup></label>
                                        <textarea id="message" name="message"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <input type="submit" value="send message">
                                    </div>

                                </div>
                            </form>
                            <p class="form-messege"></p>

                        </div><!-- Post Block Body End -->

                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->
                            <h4 class="title">find us on map.</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <div class="contact-map-wrap">
                                <div id="contact-map"></div>
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
