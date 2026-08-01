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
                    <h5 class="card-title">Add New Product</h5>
                    <hr />
                    @include('admin.layouts.alerts')
                    <div class="form-body mt-4">
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="mb-3">
                                            <label for="inputProductTitle" class="form-label">Category</label>
                                            <select class="form-select" id="category_id" name="category_id">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $ck => $cv)
                                                    <option value="{{ $cv->id }}" {{ old('category_id') == $cv->id ? 'selected' : '' }}>
                                                        {{ $cv->category_name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="mb-3">
                                            <label for="inputProductTitle" class="form-label">Sub Category</label>
                                            <select class="form-select" id="sub_category_id" name="sub_category_id">
                                                <option value="">Select Sub Category</option>
                                                @foreach($sub_categories as $sk => $sv)
                                                    <option value="{{ $sv->id }}" {{ old('sub_category_id') == $sv->id ? 'selected' : '' }}>
                                                        {{ $sv->sub_category_name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>


                                        <div class="mb-3">
                                            <label for="inputProductTitle" class="form-label">Product Title</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Enter product title" value="{{ old('name') }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputProductCode" class="form-label">Product Code</label>
                                            <input type="text" name="product_code" class="form-control" id="product_code"
                                                placeholder="Enter product code" value="{{ old('product_code') }}" required>
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

                                        <div class="col-3">
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