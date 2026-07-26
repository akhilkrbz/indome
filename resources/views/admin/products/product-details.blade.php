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
                            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4 border-end">
                        @php
                            $mainImage = $images->first();
                        @endphp
                        @if($mainImage)
                            <img src="{{ asset('uploads/products/' . $product->id . '/' . $mainImage->filename) }}" class="img-fluid" alt="{{ $product->name }}" style="width: 100%; max-height: 420px; object-fit: cover;">
                        @else
                            <img src="{{ asset('assets/images/products/01.png') }}" class="img-fluid" alt="{{ $product->name }}">
                        @endif

                        <div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
                            @foreach($images as $image)
                                <div class="col">
                                    <img src="{{ asset('uploads/products/' . $product->id . '/' . $image->filename) }}" width="70" class="border rounded cursor-pointer" alt="{{ $product->name }}" style="height: 70px; object-fit: cover;">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">{{ $product->name }}</h4>
                            <div class="mb-3">
                                <span class="price h4">{{ $product->product_code }}</span>
                            </div>
                            <p class="card-text fs-6">{{ $product->description ?: 'No description available.' }}</p>
                            <dl class="row">
                                <dt class="col-sm-3">Category</dt>
                                <dd class="col-sm-9">{{ $product->category->category_name ?? '-' }}</dd>

                                <dt class="col-sm-3">Sub Category</dt>
                                <dd class="col-sm-9">{{ $product->sub_category->sub_category_name ?? '-' }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="card-body">
                    <h5 class="mb-3">Variants</h5>
                    @if($variants->isNotEmpty())
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Variant Title</th>
                                        <th>Code</th>
                                        <th>Price</th>
                                        <th>Offer Price</th>
                                        <th>Stock</th>
                                        <th>Colour</th>
                                        <th>Size</th>
                                        <th>Material</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($variants as $variant)
                                        <tr>
                                            <td>{{ $variant->variant_title ?? '-' }}</td>
                                            <td>{{ $variant->variant_code ?? '-' }}</td>
                                            <td>{{ $variant->price ?? '-' }}</td>
                                            <td>{{ $variant->offer_price ?? '-' }}</td>
                                            <td>{{ $variant->stock ?? '-' }}</td>
                                            <td>{{ $variant->colour ?? '-' }}</td>
                                            <td>{{ $variant->size ?? '-' }}</td>
                                            <td>{{ $variant->material ?? '-' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-secondary mb-0">No variants found for this product.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection