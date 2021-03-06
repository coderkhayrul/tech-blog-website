@extends('admin.admin_master')

@section('title')
Admin Panel || Categories
@endsection

@section('content')


<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                <h2 class="h5">Categories</h2>
                </div>
                <div class="col text-right">
                    <a href="{{ route('category.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> New Category</a>
                </div>
            </div>
        </div>
        <div class="table-responsive mt-2">
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Name English</th>
                        <th>Name Bangla</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name_en }}</td>
                        <td>{{ $category->name_ban }}</td>
                        <td><img width="150px" height="75px" src="{{ asset($category->image) }}" alt=""></td>
                        <td>
                            <a href="{{ route('category.edit',$category->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <a id="delete" href="{{ route('category.destroy',$category->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
