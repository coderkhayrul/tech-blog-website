@extends('admin.admin_master')

@section('content')

<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                <h2 class="h5">Sub Category Create</h2>
                </div>
                <div class="col text-right">
                    <a href="{{ route('subcategory.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-angle-double-left"></i> Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-sm-6">
                    <form action="{{ route('subcategory.store') }}" method="post">
                        @csrf
                        <!-- Form -->
                        <div class="mb-4">
                            <label class="my-1 mr-2" for="country">Select Category</label>
                            <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id" aria-label="Default select example">
                                <option selected disabled>Open this select menu</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_en }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="name">Name English</label>
                            <input type="text" name="name_en" class="form-control  @error('name_en') is-invalid @enderror"
                            value="{{ old('name_en') }}" id="name_en" aria-describedby="nameHelp" placeholder="Enter the sub category name">
                            @error('name_en')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="name">Name Bangla</label>
                            <input type="text" name="name_ban" class="form-control  @error('name_ban') is-invalid @enderror"
                            value="{{ old('name_ban') }}" id="name_en" aria-describedby="nameHelp" placeholder="সাব ক্যাটাগরি নাম লিখুন">
                            @error('name_ban')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="mb-4">
                            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save</button>
                        </div>
                        <!-- End of Form -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
