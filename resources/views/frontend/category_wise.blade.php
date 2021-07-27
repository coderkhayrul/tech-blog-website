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
                <div class="col-lg-8 col-12">
                    <div class="page-banner" style="background-image: url(@if($category->image == NULL) {{ asset('frontend') }}/img/bg/page-banner-sports.jpg  @else {{ asset($category->image) }} @endif )">
                        <h2>@if(session()->get('language') == 'bangla') ক্যাটাগরি @else Category @endif: <span class="category-sports">@if(session()->get('language') == 'bangla') {{ $category->name_ban }} @else {{ $category->name_en }}  @endif</span></h2>
                        <ol class="page-breadcrumb">
                            <li><a href="{{ url('/') }}">@if(session()->get('language') == 'bangla') হোম @else Home @endif</a></li>
                            <li class="active">@if(session()->get('language') == 'bangla') {{ $category->name_ban }} @else {{ $category->name_en }} @endif</li>
                        </ol>
                        <p>Vestibulum vulputate sit amet orci sed egestas. Integer lobortis metus in cursus moll condimentum arcu in diam pharetra, nec vehicula urna vehicula. Nullam iaculis odio orci, ut tristique nibh ultrices vitae. Praesent sit amet mauris iaculis, </p>
                    </div>
                </div><!-- Page Banner End -->

                <div class="page-banner-image col-lg-4 col-12 d-none d-lg-block"><img src="{{ asset('frontend') }}/img/banner/page-banner-sports.jpg" alt="Page Banner Image"></div>

            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Popular Section Start -->
    <div class="popular-section section bg-dark pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Popular Post Slider Start -->
                    <div class="popular-post-slider">

                        <!-- Overlay Post Start -->
                        <div class="post post-overlay gradient-overlay-2">
                            <div class="post-wrap">

                                <!-- Image -->
                                <div class="image"><img src="{{ asset('frontend') }}/img/post/post-121.jpg" alt="post"></div>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">Jets Name Alex Mccown starting quarter back.</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                    </div>

                                </div>

                            </div>
                        </div><!-- Overlay Post End -->

                        <!-- Overlay Post Start -->
                        <div class="post post-overlay gradient-overlay-6">
                            <div class="post-wrap">

                                <!-- Image -->
                                <div class="image"><img src="{{ asset('frontend') }}/img/post/post-122.jpg" alt="post"></div>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">Messi one of the greatest footballers off all time, If not the greatest.</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                    </div>

                                </div>

                            </div>
                        </div><!-- Overlay Post End -->

                        <!-- Overlay Post Start -->
                        <div class="post post-overlay gradient-overlay-5">
                            <div class="post-wrap">

                                <!-- Image -->
                                <div class="image"><img src="{{ asset('frontend') }}/img/post/post-123.jpg" alt="post"></div>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">Norkshire chosen as 2018 road word word champainship host.</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                    </div>

                                </div>

                            </div>
                        </div><!-- Overlay Post End -->

                        <!-- Overlay Post Start -->
                        <div class="post post-overlay gradient-overlay-3">
                            <div class="post-wrap">

                                <!-- Image -->
                                <div class="image"><img src="{{ asset('frontend') }}/img/post/post-122.jpg" alt="post"></div>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">Messi one of the greatest footballers off all time, If not the greatest.</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                    </div>

                                </div>

                            </div>
                        </div><!-- Overlay Post End -->

                    </div><!-- Popular Post Slider End -->

                </div>
            </div>
        </div>
    </div><!-- Popular Section End -->

    <!-- Post Section Start -->
    <div class="post-section section mt-50">
        <div class="container">

            <!-- Feature Post Row Start -->
            <div class="row">

                <div class="col-lg-8 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Body Start -->
                        <div class="body">
                            <div class="row">
                                @foreach ($productByCategory as $post)
                                <!-- Post Start -->
                                <div class="post sports-post post-separator-border col-md-6 col-12">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="@if(session()->get('language') == 'bangla') {{ route('post.show',$post->slug_en) }} @else {{ route('post.show',$post->slug_en) }} @endif"><img src="{{ asset($post->thambnail_image) }}" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="@if(session()->get('language') == 'bangla') {{ route('post.show',$post->slug_en) }} @else {{ route('post.show',$post->slug_en) }} @endif">@if(session()->get('language') == 'bangla') {{ Str::limit($post->name_ban, 45, $end='.') }} @else {{ Str::limit($post->name_en, 45, $end='.') }} @endif</a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i>Tech Tutorial</a>
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                                            </div>

                                            <!-- Description -->
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing  Curabitur venenatis suscipit rhoncus. Phasellus fermentum a nec finibus lacus bibendum non. Duis pulvinar lacus.</p>

                                            <!-- Read More -->
                                            <a href="@if(session()->get('language') == 'bangla') {{ route('post.show',$post->slug_en) }} @else {{ route('post.show',$post->slug_en) }} @endif" class="read-more">continue reading</a>

                                        </div>

                                    </div>
                                </div><!-- Post End -->
                                @endforeach




                                <div class="page-pagination text-center col-12">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>

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
                                    <h4 class="title">Follow Us</h4>

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
