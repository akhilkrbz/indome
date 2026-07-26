@extends('admin.layouts.app')

@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">eCommerce</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Variant</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Edit Variant for {{ $product->name ?? '-' }}</h5>
                    <hr />
                    @include('admin.layouts.alerts')
                    <div class="form-body mt-4">
                        <form action="{{ route('variants.update', $variant->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $variant->product_id }}">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Variant Title</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Enter variant title" value="{{ old('name', $variant->variant_title) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="variant_code" class="form-label">Variant Code</label>
                                            <input type="text" name="variant_code" class="form-control" id="variant_code"
                                                placeholder="Enter variant code" value="{{ old('variant_code', $variant->variant_code) }}" required>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="offer_price" class="form-label">Offer Price</label>
                                                <input type="text" name="offer_price" class="form-control" id="offer_price"
                                                    value="{{ old('offer_price', $variant->offer_price) }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="price" class="form-label">Price</label>
                                                <input type="text" name="price" class="form-control" id="price"
                                                    value="{{ old('price', $variant->price) }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="size" class="form-label">Size</label>
                                                <input type="text" name="size" class="form-control" id="size"
                                                    value="{{ old('size', $variant->size) }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="colour" class="form-label">Colour</label>
                                                <input type="text" name="colour" class="form-control" id="colour"
                                                    value="{{ old('colour', $variant->colour) }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="material" class="form-label">Material</label>
                                                <input type="text" name="material" class="form-control" id="material"
                                                    value="{{ old('material', $variant->material) }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="length" class="form-label">Length</label>
                                                <input type="text" name="length" class="form-control" id="length"
                                                    value="{{ old('length', $variant->length) }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="height" class="form-label">Height</label>
                                                <input type="text" name="height" class="form-control" id="height"
                                                    value="{{ old('height', $variant->height) }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="weight" class="form-label">Weight</label>
                                                <input type="text" name="weight" class="form-control" id="weight"
                                                    value="{{ old('weight', $variant->weight) }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="stock" class="form-label">Stock</label>
                                                <input type="text" name="stock" class="form-control" id="stock"
                                                    value="{{ old('stock', $variant->stock) }}">
                                            </div>
                                        </div>

                                        <div class="mb-3 mt-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $variant->description) }}</textarea>
                                        </div>

                                        <div class="col-3 mt-3">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Update Variant</button>
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
