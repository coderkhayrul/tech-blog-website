@extends('admin.admin_master')

@section('content')

<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">Setting </h2>
                </div>
                <div class="col text-right">
                    <a href="{{ url('/admin') }}" class="btn btn-sm btn-primary"><i
                            class="fas fa-angle-double-left"></i> Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row mb-4">
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Website Titel <i class="fas fa-signature"></i></label>
                        <input type="text" name="website_title" class="form-control  @error('website_title') is-invalid @enderror"
                            value="{{ old('website_title') }}" placeholder="Web App Title">
                        @error('website_title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Copyright <i class="fas fa-copyright"></i> </label>
                        <input type="text" name="copyright_text" class="form-control  @error('copyright_text') is-invalid @enderror"
                            value="{{ old('copyright_text') }}" placeholder="Copyright Text">
                        @error('copyright_text')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6 mt-2">
                        <!-- Form -->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Thambnail Image <i class="fas fa-image"></i></label>
                            <input name="thambnail_image" onChange="mainThamUrl(this)"
                                class="form-control @error('thambnail_image') is-invalid @enderror" type="file"
                                id="formFile">
                        </div>
                        @error('thambnail_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <img src="" id="mainThmb" alt="">
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6 mt-2">
                        <!-- Form -->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Banner Image <i class="fas fa-image"></i></label>
                            <input name="banner_image" onChange="mainBannerUrl(this)"
                                class="form-control @error('banner_image') is-invalid @enderror" type="file"
                                id="formFile">
                        </div>
                        @error('banner_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <img src="" id="mainBanner" alt="">
                        <!-- End of Form -->
                    </div>
                    <!-- Form -->
                    <div class="col-lg-12 col-sm-6 mt-2">
                        <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save Setting</button>
                    </div>
                    <!-- End of Form -->
                </div>
            </form>
        </div>
    </div>
<br><br>
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">Social Link </h2>
                </div>
                <div class="col text-right">
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row mb-4">
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Facebook Url <i class="fas fa-link"></i></label>
                        <input type="text" name="facebook_url" class="form-control  @error('facebook_url') is-invalid @enderror"
                            value="{{ old('facebook_url') }}" placeholder="https://www.facebook.com">
                        @error('facebook_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Youtube Url <i class="fas fa-link"></i></label>
                        <input type="text" name="youtube_url" class="form-control  @error('youtube_url') is-invalid @enderror"
                            value="{{ old('youtube_url') }}" placeholder="https://www.pinterest.com">
                        @error('youtube_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Twitter Url <i class="fas fa-link"></i></label>
                        <input type="text" name="twitter_url" class="form-control  @error('twitter_url') is-invalid @enderror"
                            value="{{ old('twitter_url') }}" placeholder="https://www.twitter.com">
                        @error('twitter_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Pinterest Url <i class="fas fa-link"></i></label>
                        <input type="text" name="pinterest_url" class="form-control  @error('pinterest_url') is-invalid @enderror"
                            value="{{ old('pinterest_url') }}" placeholder="https://www.pinterest.com">
                        @error('twitter_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <!-- Form -->
                    <div class="col-lg-12 col-sm-6 mt-2">
                        <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save Url</button>
                    </div>
                    <!-- End of Form -->
                </div>
            </form>
        </div>
    </div>

    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">Contact Information </h2>
                </div>
                <div class="col text-right">
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row mb-4">
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Address <i class="fas fa-home"></i></label>
                        <input type="text" name="address" class="form-control  @error('address') is-invalid @enderror"
                            value="{{ old('address') }}" placeholder="House No 08, Ro ad No 08 Araihazar, Dhaka, Bangladesh">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Email <i class="fas fa-at"></i></label>
                        <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" placeholder="Username@gmail.com">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Phone <i class="fas fa-mobile-alt"></i></label>
                        <input type="text" name="phone" class="form-control  @error('phone') is-invalid @enderror"
                            value="{{ old('phone') }}" placeholder="+8801835061968">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Pinterest Url <i class="fas fa-link"></i></label>
                        <input type="text" name="pinterest_url" class="form-control  @error('pinterest_url') is-invalid @enderror"
                            value="{{ old('pinterest_url') }}" placeholder="https://www.pinterest.com">
                        @error('twitter_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <!-- Form -->
                    <div class="col-lg-12 col-sm-6 mt-2">
                        <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save Contact</button>
                    </div>
                    <!-- End of Form -->
                </div>
            </form>
        </div>
    </div>

    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">SEO SETTING <i class="fas fa-leaf"></i> </h2>
                </div>
                <div class="col text-right">
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row mb-4">
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control  @error('meta_title') is-invalid @enderror"
                            value="{{ old('meta_title') }}" placeholder="House No 08, Ro ad No 08 Araihazar, Dhaka, Bangladesh">
                        @error('meta_title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Description</label>
                        <input type="text" name="meta_description" class="form-control  @error('meta_description') is-invalid @enderror"
                            value="{{ old('meta_description') }}" placeholder="Meta Description">
                        @error('meta_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Keywords</label>
                        <input type="text" name="meta_keyword" class="form-control  @error('meta_keyword') is-invalid @enderror"
                            value="{{ old('meta_keyword') }}" placeholder="Meta Keywords">
                        @error('meta_keyword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Theme Color</label>
                        <input type="text" name="them_color" class="form-control  @error('pinterest_url') is-invalid @enderror"
                            value="{{ old('pinterest_url') }}" placeholder="Color Code">
                        @error('twitter_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <!-- Form -->
                    <div class="col-lg-12 col-sm-6 mt-2">
                        <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save Seo Setting</button>
                    </div>
                    <!-- End of Form -->
                </div>
            </form>
        </div>
    </div>

</div>

<!-- Live Thumbnail Image Show -->
<script type="text/javascript">
    function mainThamUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#mainThmb').attr('src', e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function mainBannerUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#mainBanner').attr('src', e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
@endsection
