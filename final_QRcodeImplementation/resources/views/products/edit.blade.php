@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="mb-3">
            <a href="{{ route('products.index') }}" class="text-decoration-none text-muted">
                <i class="bi bi-arrow-left"></i> Back to Product List
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-white py-3 border-bottom">
                <h5 class="card-title mb-0 fw-bold">
                    <i class="bi bi-pencil-square me-2 text-warning"></i>Edit Product Details
                </h5>
            </div>

            <div class="card-body p-4">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Product Name</label>
                        <input type="text"
                               name="name"
                               id="name"
                               class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name', $product->name) }}"
                               required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label fw-semibold">Description</label>
                        <textarea name="description"
                                  id="description"
                                  class="form-control"
                                  rows="4">{{ old('description', $product->description) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="price" class="form-label fw-semibold">Price (₱)</label>
                        <div class="input-group">
                            <span class="input-group-text">₱</span>
                            <input type="number"
                                   step="0.01"
                                   name="price"
                                   id="price"
                                   class="form-control"
                                   value="{{ old('price', $product->price) }}"
                                   required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 border-top pt-3">
                        <a href="{{ route('products.index') }}" class="btn btn-light px-4">Cancel Changes</a>
                        <button type="submit" class="btn btn-warning px-4 fw-bold">
                            <i class="bi bi-arrow-repeat me-2"></i>Update Product
                        </button>
                    </div>

                </form>
            </div>
        </div>

        <div class="mt-4 p-3 bg-white rounded shadow-sm border-start border-warning border-4">
            <small class="text-muted">
                <i class="bi bi-info-circle me-1"></i>
                <strong>Note:</strong> Updating these details will reflect immediately across all generated QR codes linked to this product ID.
            </small>
        </div>
    </div>
</div>
@endsection
