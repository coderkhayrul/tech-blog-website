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
                        <h4 class="title"> @if(session()->get('language') == 'bangla') ফিচার্ড পোস্ট @else Featured post @endif </h4>

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
                                        @foreach ($posts as $post)
                                        <!-- Post  Start -->
                                        <div class="post feature-post post-separator-border">
                                            <div class="post-wrap">
                                                <div class="row d-flex jusified-content">
                                                    <div class="col-lg-6 col-12">
                                                        <div>
                                                            <a href="@if(session()->get('language') == 'bangla') {{ route('post.show',$post->slug_en) }} @else {{ route('post.show',$post->slug_en) }} @endif ">
                                                                <img class="img-thumbnail"
                                                                    src="{{ asset($post->thambnail_image) }}"
                                                                    alt="post">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <span class="cat-links"><a href="{{ url('category/post/'.$post->category->id.'/'.$post->category->slug_en) }}" class="text-danger">@if(session()->get('language') == 'bangla') {{ $post->category->name_ban }} @else {{ $post->category->name_en }} @endif</a></span><br>
                                                        <strong class="font-weight-bold"><a href="@if(session()->get('language') == 'bangla') {{ route('post.show',$post->slug_en) }} @else {{ route('post.show',$post->slug_en) }} @endif ">@if(session()->get('language') == 'bangla') {{ $post->name_ban }} @else {{ $post->name_en }} @endif</a></strong>
                                                        <div class="meta fix mt-2">
                                                            <p>
                                                                @if(session()->get('language') == 'bangla')
                                                                {{ Str::limit($post->short_description_ban, 150, $end='...') }} @else
                                                                {{ Str::limit($post->short_description_en, 150, $end='...') }}
                                                                @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post End -->
                                        @endforeach
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

                    <!-- Follow Us On Start -->
                    @include('frontend.size_widget.social_join')
                    <!-- Follow Us On End -->

                    <!-- Make It Mordern Start -->
                    @include('frontend.size_widget.slide_post')
                    <!-- Make It Mordern End -->

                    <!-- 370 * 272 Ads Start -->
                    @include('frontend.size_widget.mini_ads')
                    <!-- 370 * 272 Ads End -->

                    <!-- Latest And Popular Post -->
                    @include('frontend.size_widget.latest_and_popular_post')
                    <!-- Latest And Popular Post-->

                </div>
            </div><!-- Sidebar End -->

        </div>
        <!-- Feature Post Row End -->

        <!--1173 * 282 Banner Ads Start -->
        @include('frontend.size_widget.footer_big_ads')
        <!-- 1173 * 282 Banner Ads Start -->

    </div>
</div><!-- Post Section End -->
@endsection
