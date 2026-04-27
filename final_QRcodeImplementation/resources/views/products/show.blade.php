@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('products.index') }}" class="btn btn-light border shadow-sm">
                <i class="bi bi-arrow-left me-1"></i> Back to Inventory
            </a>
            <div>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning shadow-sm">
                    <i class="bi bi-pencil me-1"></i> Edit Product
                </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-7">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 fw-bold text-primary">Product Information</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <label class="text-muted small text-uppercase fw-bold">Product Name</label>
                            <h2 class="fw-bold text-dark">{{ $product->name }}</h2>
                        </div>

                        <div class="mb-4">
                            <label class="text-muted small text-uppercase fw-bold">Price</label>
                            <h3 class="text-success fw-bold">₱{{ number_format($product->price, 2) }}</h3>
                        </div>

                        <hr class="text-muted opacity-25">

                        <div class="mb-0">
                            <label class="text-muted small text-uppercase fw-bold d-block mb-2">Description</label>
                            <p class="text-secondary lh-lg">
                                {{ $product->description ?: 'No description provided for this item.' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card shadow-sm border-0 h-100 text-center">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 fw-bold">Generated QR Code</h5>
                    </div>
                    <div class="card-body d-flex flex-column align-items-center justify-content-center p-5">
                        <div class="p-4 bg-white rounded shadow-sm border mb-4 qr-display">
                            {!! $qr !!}
                        </div>

                        <p class="text-muted small">
                            <i class="bi bi-info-circle me-1"></i>
                            Scan this code to view product details on a mobile device.
                        </p>

                        <button class="btn btn-outline-dark w-100 mt-3" onclick="window.print()">
                            <i class="bi bi-printer me-2"></i> Print Label
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    /* Professional QR sizing for the view page */
    .qr-display svg {
        width: 200px !important;
        height: 200px !important;
        display: block;
    }

    @media print {
        .btn, .navbar, .text-muted {
            display: none !important;
        }
        .card {
            border: none !important;
            box-shadow: none !important;
        }
        .qr-display svg {
            width: 300px !important;
            height: 300px !important;
        }
    }
</style>
@endsection
