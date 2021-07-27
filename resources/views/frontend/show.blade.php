@extends('frontend.fronted_master')

@section('title')
Home - Tech Tutorial
@endsection

@section('content')

<!-- Post Header Section Start -->
    <div class="post-header-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1">

                <!-- Page Banner Start -->
                <div class="col-12">
                    <div class="post-header" style="background-image: url({{ asset($post->banner_image) }})">

                        <!-- Title -->
                        <h3 class="title">@if(session()->get('language') == 'bangla') {{ $post->name_ban }} @else {{ $post->name_en }} @endif </h3>

                        <!-- Meta -->
                        <div class="meta fix">
                            <a href="{{ url('category/post/'.$post->category->id.'/'.$post->category->slug_en) }}" class="meta-item category sports">@if(session()->get('language') == 'bangla') {{ $post->category->name_ban }} @else {{ $post->category->name_en }} @endif</a>
                            <a href="#" class="meta-item author"><img src="{{ asset('frontend') }}/img/post/post-author-1.jpg" alt="post author">Tech Tutorial</a>
                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                        </div>

                    </div>
                </div><!-- Post Header Section End -->

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
                    <div class="post-block-wrapper mb-50">

                        <!-- Post Block Body Start -->
                        <div class="body">
                            <div class="row">

                                <div class="col-12">

                                    <!-- Single Post Start -->
                                    <div class="single-post">
                                        <div class="post-wrap">

                                            <!-- Content -->
                                            <div class="content">
                                                <!-- Description -->
                                                @if(session()->get('language') == 'bangla'){!! $post->long_description_ban !!} @else {!! $post->long_description_en !!} @endif

                                            </div>

                                            <div class="tags-social float-left">

                                                <div class="tags float-left">
                                                    <i class="fa fa-tags"></i>
                                                    <a href="#">@if(session()->get('language') == 'bangla') {!! $post->category->name_ban !!} @else {!! $post->category->name_en !!} @endif,</a>
                                                    <a href="#">@if(session()->get('language') == 'bangla') {!! $post->subcategory->name_ban !!} @else {!! $post->subcategory->name_en !!} @endif</a>

                                                </div>

                                                <div class="post-social float-right">
                                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                    <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
                                                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Single Post End -->

                                </div>

                            </div>
                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                    <!-- Previous & Next Post Start -->
                    <div class="post-nav mb-50">
                        @if ($previous == NULL)
                        <a class="previous-post">
                            <span>previous post</span>
                            No More Previous Post
                        </a>
                        @else
                        <a href="{{ URL::to( 'post/'. $previous->slug_en ) }}" class="prev-post disabled"><span>previous post</span>
                            @if(session()->get('language') == 'bangla') {{ $previous->name_ban }} @else {{ $previous->name_en }} @endif
                        </a>
                        @endif


                        @if ($next == NULL)
                        <a class="next-post">
                            <span>next post</span>
                             No More Next Post
                        </a>
                        @else
                        <a href="{{ URL::to( 'post/'. $next->slug_en ) }}" class="next-post"><span>next post</span>
                            @if(session()->get('language') == 'bangla') {{ $next->name_ban }} @else {{ $next->name_en }} @endif
                        </a>
                        @endif
                    </div><!-- Previous & Next Post End -->

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper mb-50">

                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->
                            <h4 class="title">You might also like!</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <div class="two-column-post-carousel column-post-carousel post-block-carousel row">
                                @foreach ($allposts as $post)
                                <div class="col-md-6 col-12">

                                    <!-- Overlay Post Start -->
                                    <div class="post post-overlay hero-post">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <div class="image"><img src="{{ asset($post->thambnail_image) }}" alt="post"></div>

                                            <!-- Category -->
                                            <a href="#" class="category politic">@if(session()->get('language') == 'bangla') {{$post->category->name_ban }} @else {{ $post->category->name_en }}Featured post @endif</a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a href="post-details.html">@if(session()->get('language') == 'bangla') {{ Str::limit($post->name_ban, 40, $end='.') }} @else {{ Str::limit($post->name_en, 40, $end='.') }}@endif</a></h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Overlay Post End -->

                                </div>
                                @endforeach

                            </div>

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->



                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head feature-head">

                                    <!-- Title -->
                                    <h4 class="title">@if(session()->get('language') == 'bangla') আমাদের সাথে যোগ দান @else JOIN US ON @endif</h4>

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

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{ asset('frontend') }}/img/banner/sidebar-banner-1.jpg" alt="Sidebar Banner"></a>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{ asset('frontend') }}/img/banner/sidebar-banner-2.jpg" alt="Sidebar Banner"></a>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <div class="sidebar-subscribe">
                                <h4>Subscribe To <br>Our <span>Update</span> News</h4>
                                <p>Adipiscing elit. Fusce sed mauris arcu. Praesent ut augue imperdiet, semper lorem id.</p>
                                <!-- Newsletter Form -->
                                <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <label for="mce-EMAIL" class="d-none">Subscribe to our mailing list</label>
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button">submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Feature Post Row End -->

        </div>
    </div><!-- Post Section End -->
@endsection
