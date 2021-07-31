
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Trick it World || Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Volt Premium Bootstrap Dashboard - 404 Not Found Page">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">


<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('upload/default/admin/apple_favicon_white.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('upload/default/admin/favicon_white.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('upload/default/admin/favicon_white.png') }}">
<link rel="mask-icon" href="{{ asset('upload/default/admin/favicon_white.png') }}" color="#ffffff">



<!-- Fontawesome -->
<link type="text/css" href="{{ asset('backend') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="{{ asset('backend') }}/vendor/notyf/notyf.min.css" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="{{ asset('backend') }}/css/volt.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
    <main>

        <!-- Section -->
        <section class="d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
            <div class="container">
                <p class="text-center"><a href="{{ url('/') }}" class="text-gray-700"><i class="fas fa-angle-left mr-2"></i> Back to homepage</a></p>
                <div class="row justify-content-center form-bg-image" data-background-lg="{{ asset('backend') }}/assets/img/illustrations/signin.svg">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Sign in to Admin Panel</h1>
                            </div>
                            <form method="POST" action="{{ route('login') }}" class="mt-4">
                                @csrf
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Your Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
                                        <input id="email" name="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="example@company.com" autofocus required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Your Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                            <input type="password" placeholder="Password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="d-flex justify-content-between align-items-top mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label mb-0" for="remember">
                                              Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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


</body>

</html>
