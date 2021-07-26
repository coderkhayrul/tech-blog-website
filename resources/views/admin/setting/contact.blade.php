@extends('admin.admin_master')

@section('content')

<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">Contact Information </h2>

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
                    <div class="col-lg-12 col-sm-6 mt-2">
                        <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save Contact</button>
                    </div>
                    <!-- End of Form -->
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
