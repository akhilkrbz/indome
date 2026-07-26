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
                        <h5 class="card-title mb-0">Variants for {{ $product->name }}</h5>
                        <a href="{{ route('products.add.variants', $product->id) }}" class="btn btn-primary">Add Variant</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Variant Title</th>
                                    <th>Variant Code</th>
                                    <th>Price</th>
                                    <th>Offer Price</th>
                                    <th>Stock</th>
                                    <th>Colour</th>
                                    <th>Size</th>
                                    <th>Material</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($variants as $variant)
                                    <tr>
                                        <td>{{ $loop->iteration + ($variants->currentPage() - 1) * $variants->perPage() }}</td>
                                        <td>
                                            {{ $variant->variant_title ?? $variant->name ?? '-' }}
                                            <div class="mt-2">
                                                <a href="{{ route('variants.edit', $variant->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            </div>
                                        </td>
                                        <td>{{ $variant->variant_code ?? '-' }}</td>
                                        <td>{{ $variant->price ?? '-' }}</td>
                                        <td>{{ $variant->offer_price ?? '-' }}</td>
                                        <td>{{ $variant->stock ?? '-' }}</td>
                                        <td>{{ $variant->colour ?? '-' }}</td>
                                        <td>{{ $variant->size ?? '-' }}</td>
                                        <td>{{ $variant->material ?? '-' }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No variants found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        {{ $variants->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
