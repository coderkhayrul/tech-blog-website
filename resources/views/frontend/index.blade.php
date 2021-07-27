@extends('frontend.fronted_master')

@section('title')
Home - Tech Tutorial
@endsection

@section('content')

<!-- Post Section Start -->
<div class="post-section section mt-50">
    <div class="container">

        <!-- Feature Post Row Start -->
        <div class="row">

            <div class="col-lg-8 col-12 mb-50">

                <!-- Post Block Wrapper Start -->
                <div class="post-block-wrapper">

                    <!-- Post Block Head Start -->
                    <div class="head feature-head">

                        <!-- Title -->
                        <h4 class="title">@if (session()->get('language') == 'bangla')ফিচার্ড পোস্ট @else Featured post @endif</h4>


                    </div><!-- Post Block Head End -->

                    <!-- Post Block Body Start -->
                    <div class="body pb-0">

                        <!-- Tab Content Start-->
                        <div class="tab-content">

                            <!-- Tab Pane Start-->
                            <div class="tab-pane fade show active">

                                <div class="row">

                                    <!-- Post Wrapper Start -->
                                    <div class="col-md-12 col-12 mb-20">
                                        <!-- Post  Start -->
                                        <div class="post feature-post post-separator-border">
                                            <div class="post-wrap">
                                                <div class="row d-flex jusified-content">
                                                    <div class="col-lg-6 col-12">
                                                        <div>
                                                            <a href="#" >
                                                                <img class="img-thumbnail" src="{{ asset('frontend') }}/img/post/post-11.jpg" alt="post">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <span class="cat-links"><a href="" class="text-danger">IT &amp; Software</a></span>
                                                        <strong class="font-weight-bold" ><a href="">Tech Recruiting Foundations: 5 Waterfall, Agile, and DevOps for Recruiters</a></strong>
                                                        <div class="meta fix mt-2">
                                                            <p>Description Tech is one of those rare places where demand. With that in mind, With that in mind how can recruiters and … </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post End -->

                                        <!-- Post  Start -->
                                        <div class="post feature-post post-separator-border">
                                            <div class="post-wrap">
                                                <div class="row d-flex jusified-content">
                                                    <div class="col-lg-6 col-12">
                                                        <div>
                                                            <a href="#">
                                                                <img class="img-thumbnail" src="{{ asset('frontend') }}/img/post/post-11.jpg" alt="post">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <span class="cat-links"><a href="" class="text-danger">IT &amp; Software</a></span>
                                                        <strong class="title" ><a href="">Tech Recruiting Foundations: 5 Waterfall, Agile, and DevOps for Recruiters</a></strong>
                                                        <div class="meta fix mt-2">
                                                            <p>Description Tech is one of those rare places where demand. With that in mind, With that in mind how can recruiters and … </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post End -->

                                        <!-- Post  Start -->
                                        <div class="post feature-post post-separator-border">
                                            <div class="post-wrap">
                                                <div class="row d-flex jusified-content">
                                                    <div class="col-lg-6 col-12">
                                                        <div>
                                                            <a href="#">
                                                                <img class="img-thumbnail" src="{{ asset('frontend') }}/img/post/post-11.jpg" alt="post">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <span class="cat-links"><a href="" class="text-danger">IT &amp; Software</a></span>
                                                        <strong class="title" ><a href="">Tech Recruiting Foundations: 5 Waterfall, Agile, and DevOps for Recruiters</a></strong>
                                                        <div class="meta fix mt-2">
                                                            <p>Description Tech is one of those rare places where demand. With that in mind, With that in mind how can recruiters and … </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post End -->

                                        <!-- Post  Start -->
                                        <div class="post feature-post post-separator-border">
                                            <div class="post-wrap">
                                                <div class="row d-flex jusified-content">
                                                    <div class="col-lg-6 col-12">
                                                        <div>
                                                            <a href="#">
                                                                <img class="img-thumbnail" src="{{ asset('frontend') }}/img/post/post-11.jpg" alt="post">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <span class="cat-links"><a href="" class="text-danger">IT &amp; Software</a></span>
                                                        <strong class="title" ><a href="">Tech Recruiting Foundations: 5 Waterfall, Agile, and DevOps for Recruiters</a></strong>
                                                        <div class="meta fix mt-2">
                                                            <p>Description Tech is one of those rare places where demand. With that in mind, With that in mind how can recruiters and … </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post End -->

                                        <!-- Post  Start -->
                                        <div class="post feature-post post-separator-border">
                                            <div class="post-wrap">
                                                <div class="row d-flex jusified-content">
                                                    <div class="col-lg-6 col-12">
                                                        <div>
                                                            <a href="#">
                                                                <img class="img-thumbnail" src="{{ asset('frontend') }}/img/post/post-11.jpg" alt="post">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <span class="cat-links"><a href="" class="text-danger">IT &amp; Software</a></span>
                                                        <strong class="title" ><a href="">Tech Recruiting Foundations: 5 Waterfall, Agile, and DevOps for Recruiters</a></strong>
                                                        <div class="meta fix mt-2">
                                                            <p>Description Tech is one of those rare places where demand. With that in mind, With that in mind how can recruiters and … </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post End -->

                                        <!-- Post  Start -->
                                        <div class="post feature-post post-separator-border">
                                            <div class="post-wrap">
                                                <div class="row d-inline-flex justify-content">
                                                    <div class="col-lg-6 col-12">
                                                        <div>
                                                            <a href="#">
                                                                <img class="img-thumbnail" src="{{ asset('frontend') }}/img/post/post-11.jpg" alt="post">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <span class="cat-links"><a href="" class="text-danger">IT &amp; Software</a></span>
                                                        <strong class="title" ><a href="">Tech Recruiting Foundations: 5 Waterfall, Agile, and DevOps for Recruiters</a></strong>
                                                        <div class="meta fix mt-2">
                                                            <p>Description Tech is one of those rare places where demand. With that in mind, With that in mind how can recruiters and … </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post End -->

                                    </div><!-- Post Wrapper End -->

                                </div>

                            </div><!-- Tab Pane End-->

                        </div><!-- Tab Content End-->

                    </div><!-- Post Block Body End -->

                </div><!-- Post Block Wrapper End -->

            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4 col-12 mb-50">
                <div class="row">

                    <!-- Follow Us -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Sidebar Block Wrapper -->
                        <div class="sidebar-block-wrapper">

                            <!-- Sidebar Block Head Start -->
                            <div class="head feature-head">

                                <!-- Title -->
                                <h4 class="title">@if (session()->get('language') == 'bangla')আমাদের সাথে যোগ দান @else JOIN US ON @endif </h4>

                            </div><!-- Sidebar Block Head End -->

                            <!-- Sidebar Block Body Start -->
                            <div class="body">

                                <div class="sidebar-social-follow">
                                    <div>
                                        <a href="#" class="facebook">
                                            <i class="fa fa-facebook"></i>
                                            <h3>40,583</h3>
                                            <span>Fans</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="google-plus">
                                            <i class="fa fa-google-plus"></i>
                                            <h3>36,857</h3>
                                            <span>Followers</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="twitter">
                                            <i class="fa fa-twitter"></i>
                                            <h3>50,883</h3>
                                            <span>Followers</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="dribbble">
                                            <i class="fa fa-dribbble"></i>
                                            <h3>4,743</h3>
                                            <span>Followers</span>
                                        </a>
                                    </div>
                                </div>

                            </div><!-- Sidebar Block Body End -->

                        </div>

                    </div>

                    <!-- Make It Mordern -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Sidebar Block Wrapper -->
                        <div class="sidebar-block-wrapper">

                            <!-- Sidebar Block Head Start -->
                            <div class="head life-style-head">

                                <!-- Title -->
                                <h4 class="title">@if (session()->get('language') == 'bangla')পিসি & মোবাইল @else PC & MOBILE @endif</h4>

                            </div><!-- Sidebar Block Head End -->

                            <!-- Sidebar Block Body Start -->
                            <div class="body">

                                    <!-- Sidebar Post Slider Start -->
                                    <div class="sidebar-post-carousel post-block-carousel life-style-post-carousel">

                                        <!-- Post Start -->
                                        <div class="post life-style-post">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="{{ asset('frontend') }}/img/post/post-25.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="post-details.html">How group of rebel are talking on Banasree epidemic.</a></h4>

                                                    <!-- Read More Button -->
                                                    <a href="#" class="read-more">continue reading</a>

                                                </div>

                                            </div>
                                        </div><!-- Post End -->

                                        <!-- Post Start -->
                                        <div class="post life-style-post">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="{{ asset('frontend') }}/img/post/post-25.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="post-details.html">How group of rebel are talking on Banasree epidemic.</a></h4>

                                                    <!-- Read More Button -->
                                                    <a href="#" class="read-more">continue reading</a>

                                                </div>

                                            </div>
                                        </div><!-- Post End -->

                                    </div><!-- Sidebar Post Slider End -->

                            </div><!-- Sidebar Block Body End -->

                        </div>

                    </div>

                    <!-- 370 * 272 Ads Start -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Sidebar Banner -->
                        <a href="#" class="sidebar-banner"><img src="{{ asset('frontend') }}/img/banner/sidebar-banner-2.jpg" alt="Sidebar Banner"></a>

                    </div>
                    <!-- 370 * 272 Ads End -->

                    <!-- Latest And Popular Post -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head education-head">

                                    <!-- Tab List -->
                                    <div class="sidebar-tab-list education-sidebar-tab-list nav">
                                        <a class="active" data-toggle="tab" href="#latest-news">@if (session()->get('language') == 'bangla') সর্বশেষ পোস্ট @else LATEST POST @endif</a>
                                        <a data-toggle="tab" href="#popular-news">@if (session()->get('language') == 'bangla') জনপ্রিয় পোস্ট @else POPULAR POST @endif</a>
                                    </div>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">
                                    @php
                                        $posts = App\Models\Product::latest()->orderBy('id', 'DESC')->limit(5)->get();
                                    @endphp
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="latest-news">
                                            @foreach ($posts as $post)
                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list education-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="{{ asset($post->thambnail_image) }}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">@if (session()->get('language') == 'bangla') {{ Str::limit($post->name_ban, 50, $end='...') }} @else {{ Str::limit($post->name_en, 50, $end='...') }} @endif</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                            @endforeach
                                        </div>

                                        <div class="tab-pane fade" id="popular-news">

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list education-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="{{ asset('frontend') }}/img/post/post-35.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Home is not a place . . . . . . it’s a feeling.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list education-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="{{ asset('frontend') }}/img/post/post-36.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">How do you solve the local political page problem.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list education-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="{{ asset('frontend') }}/img/post/post-33.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health..</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list education-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="{{ asset('frontend') }}/img/post/post-34.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">How do you solve the IOS page problem.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                        </div>
                                    </div>

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                    </div>
                    <!-- Latest And Popular Post-->

                </div>
            </div><!-- Sidebar End -->

        </div>
        <!-- Feature Post Row End -->

        <!-- Banner Row Start -->
        <div class="row mb-50">
            <div class="col-12">
                <a href="#" class="post-middle-banner"><img src="{{ asset('frontend') }}/img/banner/post-middle-1.jpg" alt="Banner"></a>
            </div>
        </div>
        <!-- Banner Row End -->

    </div>
</div><!-- Post Section End -->
@endsection
