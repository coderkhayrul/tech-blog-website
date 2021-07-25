@extends('admin.admin_master')

@section('content')


<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                <h2 class="h5">Sub Categories</h2>
                </div>
                <div class="col text-right">
                    <a href="{{ route('subcategory.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> New Sub Category</a>
                </div>
            </div>
        </div>
        <div class="table-responsive mt-2">
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Name English</th>
                        <th>Name Bangla</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subcategories as $subcategory)
                    <tr>
                        <td>{{ $subcategory->category->name_en }}</td>
                        <td>{{ $subcategory->name_en }}</td>
                        <td>{{ $subcategory->name_ban }}</td>
                        <td>
                            @if ($subcategory->status == 1)
                            <a href="">
                                <span class="badge bg-success">Active</span>
                            </a>
                            @else
                            <a href="">
                                <span class="badge bg-danger">InActive</span>
                            </a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('subcategory.edit',$subcategory->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <a id="delete" href="{{ route('subcategory.destroy',$subcategory->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
