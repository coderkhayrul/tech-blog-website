@extends('admin.admin_master')

@section('content')

<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                <h2 class="h5">Category Edit</h2>
                </div>
                <div class="col text-right">
                    <a href="{{ route('category.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-angle-double-left"></i> Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-sm-6">
                    <form action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="old_image" value="{{ $category->image }}">
                        @csrf
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="formFile" class="form-label">Category Image</label>
                            <input name="image" onChange="mainThamUrl(this)"
                                class="form-control @error('image') is-invalid @enderror" type="file"
                                id="formFile">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                            <img width="150px" height="75px" src="{{ asset($category->image) }}" id="mainThmb" alt="">
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="mb-4 mt-2">
                            <label for="name">Name English</label>
                            <input type="text" name="name_en" class="form-control  @error('name_en') is-invalid @enderror"
                            value="{{ $category->name_en }}" id="name_en" aria-describedby="nameHelp" placeholder="Enter the category name">
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
                            value="{{ $category->name_ban }}" id="name_en" aria-describedby="nameHelp" placeholder="ক্যাটাগরি নাম লিখুন">
                            @error('name_ban')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="mb-4">
                            <button class="btn btn-success" type="submit"><i class="fas fa-sync-alt"></i> Update</button>
                        </div>
                        <!-- End of Form -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Live Thumbnail Image Show -->
<script type="text/javascript">
    function mainThamUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#mainThmb').attr('src', e.target.result).width(150).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
@endsection
