@extends('admin.admin_master')

@section('content')


<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                <h2 class="h5">Products</h2>
                </div>
                <div class="col text-right">
                    <a href="{{ route('product.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> New Product</a>
                </div>
            </div>
        </div>
        <div class="table-responsive mt-2">
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Category Name</th>
                        <th>SubCategory Name</th>
                        <th>Name English</th>
                        <th>Name Bangla</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="text-center">
                        <td width="10%"><img style=" width:60px; height: 50px;" src="{{ asset($product->thambnail_image) }}" alt=""></td>
                        <td width="10%">{{ $product->category->name_en }}</td>
                        <td width="10%">{{ $product->subcategory->name_en }}</td>
                        <td width="25%">{{ $product->name_en }}</td>
                        <td width="25%">{{ $product->name_ban }}</td>
                        <td width="5%">
                            @if ($product->status == 1)
                            <a href="">
                                <span class="badge bg-success">Active</span>
                            </a>
                            @else
                            <a href="">
                                <span class="badge bg-danger">InActive</span>
                            </a>
                            @endif
                        </td>
                        <td width="15%">
                            <a href="{{ route('product.view',$product->id) }}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('product.edit',$product->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                            <a id="delete" href="{{ route('product.destroy',$product->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
