<div class="menu-section section bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="menu-section-wrap">

                    <!-- Main Menu Start -->
                    <div class="main-menu float-left d-none d-md-block">
                        @php
                            $categories = App\Models\Category::OrderBy('id', 'ASC')->get();
                            // dd($categories);
                        @endphp
                        <nav>
                            <ul>

                                <li><a href="{{ url('/') }}">@if (session()->get('language') == 'bangla')হোম @else Home @endif</a></li>
                                <li class="has-dropdown"><a href="#">@if (session()->get('language') == 'bangla')ক্যাটাগরি @else Category @endif</a>
                                    <!-- Submenu Start -->
                                    <ul class="sub-menu">
                                        @foreach ($categories as $category)
                                        <li><a href="{{ url('category/post/'.$category->id.'/'.$category->slug_en) }}">@if (session()->get('language') == 'bangla'){{ $category->name_ban }} @else {{ $category->name_en }} @endif</a></li>
                                        @endforeach
                                    </ul><!-- Submenu End -->
                                </li>

                                <li><a href="{{ url('category/post/'.$category->id.'/'.$category->slug_en) }}">@if (session()->get('language') == 'bangla')টেক নিউস @else Tech News @endif</a></li>
                            </ul>
                        </nav>
                    </div><!-- Main Menu Start -->
                    @php
                        $admin_settings = App\Models\Admin::find(1);
                    @endphp
                    <div class="mobile-logo d-none d-block d-md-none">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset($admin_settings->title_image) }}" alt="Logo">
                        </a>
                    </div>

                    <!-- Header Search -->
                    <div class="header-search float-right">

                        <!-- Search Toggle -->
                        <button class="header-search-toggle"><i class="fa fa-search"></i></button>

                        <!-- Header Search Form -->
                        <div class="header-search-form">
                            <form action="#">
                                <input type="text" placeholder=" @if(session()->get('language') == 'bangla') এখানে অনুসন্ধান করুন @else Search Here @endif ">
                            </form>
                        </div>

                    </div>





                    <!-- Mobile Menu Wrap -->
                    <div class="mobile-menu-wrap d-none">
                        <nav>
                            <ul>

                                <li><a href="{{ url('/') }}">@if (session()->get('language') == 'bangla')হোম @else Home @endif</a></li>
                                <li><a href="#">@if (session()->get('language') == 'bangla')ক্যাটাগরি @else Category @endif</a>

                                    <!-- Submenu Start -->
                                    <ul class="sub-menu">
                                        @foreach ($categories as $category)
                                        <li><a href="{{ url('category/post/'.$category->id.'/'.$category->slug_en) }}">@if (session()->get('language') == 'bangla'){{ $category->name_ban }} @else {{ $category->name_en }} @endif</a></li>
                                        @endforeach
                                    </ul><!-- Submenu End -->

                                </li>
                                <li><a href="{{ url('category/post/'.$category->id.'/'.$category->slug_en) }}">@if (session()->get('language') == 'bangla')টেক নিউস @else Tech News @endif</a></li>


                            </ul>
                        </nav>
                    </div>


                    <!-- Mobile Menu -->
                    <div class="mobile-menu"></div>

                </div>
            </div>
        </div>
    </div>
</div>
