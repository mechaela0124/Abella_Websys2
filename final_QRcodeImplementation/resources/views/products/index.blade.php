@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="fw-bold mb-0 text-dark">Product Inventory</h3>
        <p class="text-muted small mb-0">Manage your products and generated QR codes</p>
    </div>
    <a href="{{ route('products.create') }}" class="btn btn-primary shadow-sm px-4">
        <i class="bi bi-plus-lg me-1"></i> Add New Product
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
        <div class="d-flex align-items-center">
            <i class="bi bi-check-circle-fill me-2"></i>
            <div>{{ session('success') }}</div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card shadow-sm border-0 overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light">
                <tr>
                    <th class="ps-4 py-3 text-uppercase small fw-bold text-muted">Product Details</th>
                    <th class="py-3 text-uppercase small fw-bold text-muted">Price</th>
                    <th class="py-3 text-uppercase small fw-bold text-muted text-center">QR Code</th>
                    <th class="pe-4 py-3 text-uppercase small fw-bold text-muted text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr>
                    <td class="ps-4">
                        <div class="fw-bold text-dark">{{ $product->name }}</div>
                        <div class="text-muted small text-truncate" style="max-width: 300px;">
                            {{-- Using native PHP to limit text instead of Str --}}
                            {{ mb_strimwidth($product->description, 0, 50, "...") }}
                        </div>
                    </td>

                    <td class="fw-semibold text-dark">
                        ₱{{ number_format($product->price, 2) }}
                    </td>

                    <td class="text-center">
                        <div class="p-2 bg-white d-inline-block rounded border shadow-sm qr-container">
                            {!! $product->qr !!}
                        </div>
                    </td>

                    <td class="text-end pe-4">
                        <div class="btn-group" role="group">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-secondary btn-sm" title="View">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-warning btn-sm" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this product?')" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-5 text-muted italic">
                        <i class="bi bi-box2 fs-2 d-block mb-2"></i>
                        No products available in the system.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<style>
    /* Ensures QR codes stay uniform in the table */
    .qr-container svg {
        width: 50px !important;
        height: 50px !important;
        display: block;
    }

    .table thead th {
        font-size: 0.75rem;
        letter-spacing: 0.05em;
    }
</style>
@endsection
