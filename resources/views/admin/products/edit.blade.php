@extends('admin.layouts.app')

@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                @include('admin.layouts.breadcrumb')
            </div>

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Edit Product</h5>
                    <hr />
                    @include('admin.layouts.alerts')
                    <div class="form-body mt-4">
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="mb-3">
                                            <label for="category_id" class="form-label">Category</label>
                                            <select class="form-select" id="category_id" name="category_id">
                                                <option>Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                        {{ $category->category_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="sub_category_id" class="form-label">Sub Category</label>
                                            <select class="form-select" id="sub_category_id" name="sub_category_id">
                                                <option>Select Sub Category</option>
                                                @foreach($sub_categories as $subCategory)
                                                    <option value="{{ $subCategory->id }}" {{ $product->sub_category_id == $subCategory->id ? 'selected' : '' }}>
                                                        {{ $subCategory->sub_category_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Product Title</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Enter product title" value="{{ old('name', $product->name) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="product_code" class="form-label">Product Code</label>
                                            <input type="text" name="product_code" class="form-control" id="product_code"
                                                placeholder="Enter product code" value="{{ old('product_code', $product->product_code) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $product->description) }}</textarea>
                                        </div>

                                        <div class="col-3">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Update Product</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
