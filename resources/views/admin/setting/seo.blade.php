@extends('admin.admin_master')

@section('content')

<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">SEO SETTING <i class="fas fa-leaf"></i> </h2>
                </div>
                <div class="col text-right">
                    <div class="col text-right">
                        <a href="{{ url('/admin') }}" class="btn btn-sm btn-primary"><i
                                class="fas fa-angle-double-left"></i> Back</a>
                    </div>
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
                            value="{{ old('meta_title') }}" placeholder="Meta Title">
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
                        <label for="name">Meta Author</label>
                        <input type="text" name="meta_author" class="form-control  @error('meta_author') is-invalid @enderror"
                            value="{{ old('meta_author') }}" placeholder="Meta Author">
                        @error('meta_author')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Theme Color</label>
                        <input type="text" name="theme_color" class="form-control  @error('theme_color') is-invalid @enderror"
                            value="{{ old('theme_color') }}" placeholder="Color Code">
                        @error('theme_color')
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
@endsection
