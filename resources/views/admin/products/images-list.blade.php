@extends('admin.layouts.app')

@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                @include('admin.layouts.breadcrumb')
            </div>

            @include('admin.layouts.alerts')

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title mb-0">Images for {{ $product->name }}</h5>
                    </div>

                    <form action="{{ route('products.image.store', $product->id) }}" method="POST" enctype="multipart/form-data" class="mb-4">
                        @csrf
                        <div class="row g-3 align-items-end">
                            <div class="col-md-6">
                                <label for="image" class="form-label">Upload New Image</label>
                                <input type="file" name="image" id="image" class="form-control" required>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                    </form>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                        @forelse($images as $image)
                            <div class="col">
                                <div class="card h-100">
                                    <img src="{{ asset('uploads/products/' . $product->id . '/' . $image->filename) }}" class="card-img-top" alt="Product image" style="height: 220px; object-fit: cover;">
                                    <div class="card-body">
                                        <p class="mb-0 text-muted">{{ $image->filename }}</p>
                                        <form action="{{ route('products.image.delete', ['productId' => $product->id, 'imageId' => $image->id]) }}" method="POST" class="mt-3">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this image?')">
                                                <i class='bx bx-trash'></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="alert alert-secondary mb-0">No images uploaded yet.</div>
                            </div>
                        @endforelse
                    </div>

                    <div class="mt-3">
                        {{ $images->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
