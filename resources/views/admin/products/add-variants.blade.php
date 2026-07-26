@extends('admin.layouts.app')

@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                @include('admin.layouts.breadcrumb')
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Add New Product Variant</h5>
                    <hr />
                    @include('admin.layouts.alerts')
                    <div class="form-body mt-4">
                        <form action="{{ route('products.variant.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="border border-3 p-4 rounded">

                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        

                                        <div class="mb-3">
                                            <label for="inputProductTitle" class="form-label">Variant Title</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Enter product title" value="{{ $product->name }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputProductCode" class="form-label">Variant Code</label>
                                            <input type="text" name="variant_code" class="form-control" id="variant_code"
                                                placeholder="Enter variant code" value="{{ old('variant_code') }}" required>
                                        </div>
                                        

                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="offer_price" class="form-label">Offer Price</label>
                                                <input type="text" name="offer_price" class="form-control" id="offer_price"
                                                    placeholder="Enter offer price" value="{{ old('offer_price') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="price" class="form-label">Price</label>
                                                <input type="text" name="price" class="form-control" id="price"
                                                    placeholder="Enter price" value="{{ old('price') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="size" class="form-label">Size</label>
                                                <input type="text" name="size" class="form-control" id="size"
                                                    placeholder="Enter size" value="{{ old('size') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="colour" class="form-label">Colour</label>
                                                <input type="text" name="colour" class="form-control" id="colour"
                                                    placeholder="Enter colour" value="{{ old('colour') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="material" class="form-label">Material</label>
                                                <input type="text" name="material" class="form-control" id="material"
                                                    placeholder="Enter material" value="{{ old('material') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="length" class="form-label">Length</label>
                                                <input type="text" name="length" class="form-control" id="length"
                                                    placeholder="Enter length" value="{{ old('length') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="height" class="form-label">Height</label>
                                                <input type="text" name="height" class="form-control" id="height"
                                                    placeholder="Enter height" value="{{ old('height') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="weight" class="form-label">Weight</label>
                                                <input type="text" name="weight" class="form-control" id="weight"
                                                    placeholder="Enter weight" value="{{ old('weight') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="stock" class="form-label">Stock</label>
                                                <input type="text" name="stock" class="form-control" id="stock"
                                                    placeholder="Enter stock" value="{{ old('stock') }}">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="inputProductDescription" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="description"
                                                rows="3">{{ old('description') }}</textarea>
                                        </div>

                                        <!-- <div class="mb-3">
                                                        <label for="inputProductDescription" class="form-label">Product Images</label>
                                                        <input id="image-uploadify" type="file"
                                                            accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                                            multiple>
                                                    </div> -->

                                        <div class="col-3 mt-3">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Save Product</button>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-4 d-none">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="inputPrice" class="form-label">Price</label>
                                                <input type="email" class="form-control" id="inputPrice"
                                                    placeholder="00.00">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputCompareatprice" class="form-label">Compare at Price</label>
                                                <input type="password" class="form-control" id="inputCompareatprice"
                                                    placeholder="00.00">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputCostPerPrice" class="form-label">Cost Per Price</label>
                                                <input type="email" class="form-control" id="inputCostPerPrice"
                                                    placeholder="00.00">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputStarPoints" class="form-label">Star Points</label>
                                                <input type="password" class="form-control" id="inputStarPoints"
                                                    placeholder="00.00">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputProductType" class="form-label">Product Type</label>
                                                <select class="form-select" id="inputProductType">
                                                    <option></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputVendor" class="form-label">Vendor</label>
                                                <select class="form-select" id="inputVendor">
                                                    <option></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputCollection" class="form-label">Collection</label>
                                                <select class="form-select" id="inputCollection">
                                                    <option></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputProductTags" class="form-label">Product Tags</label>
                                                <input type="text" class="form-control" id="inputProductTags"
                                                    placeholder="Enter Product Tags">
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="button" class="btn btn-primary">Save Product</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end row-->
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end page wrapper -->

@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
            $('#image-uploadify').imageuploadify();
        })
    </script>

@endsection