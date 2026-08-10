@extends('admin.layouts.app')

@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->

            @include('admin.products.product-filters')

            @include('admin.layouts.alerts')

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
                @foreach($list as $key => $item)
                <div class="col">
                    <div class="card">
                        @php
                            $firstImage = $item->images->first();
                            $imageSrc = $firstImage ? route('product.image', ['product' => $item->id, 'filename' => $firstImage->filename]) : asset('assets/images/products/01.png');
                        @endphp
                        <img src="{{ $imageSrc }}" class="card-img-top" alt="{{ $item->name }}" style="height: 220px; object-fit: cover;">
                        <!-- <div class="">
                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                        </div> -->
                        <div class="card-body">
                            <h6 class="card-title cursor-pointer">{{ $item->name }}</h6>
                            <div class="clearfix">
                                <!-- <p class="mb-0 float-start"><strong>134</strong> Sales</p> -->
                                <!-- <p class="mb-0 float-end fw-bold"><span
                                        class="me-2 text-decoration-line-through text-secondary">AED 350</span><span>AED 240</span+>
                                </p> -->
                            </div>
                            <div class="d-flex align-items-center mt-3 fs-6">
                                <div class="cursor-pointer">
                                    <a href="{{ route('products.edit', $item->id) }}" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Product"><i class='bx bxs-edit text-warning'></i></a>
                                    <a href="{{ route('products.details', $item->id) }}" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View Details"><i class='bx bxs-detail text-primary'></i></a>
                                    <!-- <button type="button" class="btn btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Remove"><i class='bx bxs-trash text-danger'></i></button> -->
                                    <!-- <button type="button" class="btn btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Add Images"><i class='bx bxs-image-add text-primary'></i></button> -->
                                    <!-- <a href="{{ route('products.add.variants', $item->id) }}"><button type="button" class="btn btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Add Variants"><i class='bx bxs-book-add text-dark'></i></button></a> -->
                                    <a href="{{ route('products.variants.list', $item->id) }}"><button type="button" class="btn btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View Variants"><i class='bx bxs-package text-success'></i></button></a>
                                    <a href="{{ route('products.images.list', $item->id) }}"><button type="button" class="btn btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Manage Images"><i class='bx bxs-image text-info'></i></button></a>
                                    <form action="{{ route('products.featured.toggle', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{ $item->featured == 1 ? 'Remove from featured' : 'Mark as featured' }}">
                                            <i class="{{ $item->featured == 1 ? 'bx bxs-star text-warning' : 'bx bx-star text-secondary' }}"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- <p class="mb-0 ms-auto">4.2(182)</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div><!--end row-->

            {{ $list->appends(request()->query())->links() }}

        </div>
    </div>
    <!--end page wrapper -->

@endsection