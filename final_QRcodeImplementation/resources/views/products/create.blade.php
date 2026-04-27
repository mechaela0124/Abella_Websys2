@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="mb-3">
            <a href="{{ route('products.index') }}" class="text-decoration-none text-muted">
                <i class="bi bi-arrow-left"></i> Back to Product List
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="card-title mb-0 fw-bold">
                    <i class="bi bi-plus-circle me-2 text-primary"></i>Add New Product
                </h5>
            </div>

            <div class="card-body p-4">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Product Name</label>
                        <input type="text"
                               name="name"
                               id="name"
                               class="form-control @error('name') is-invalid @enderror"
                               placeholder="Enter product name"
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
                                  rows="4"
                                  placeholder="Brief details about the product"></textarea>
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
                                   placeholder="0.00"
                                   required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('products.index') }}" class="btn btn-light px-4">Cancel</a>
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="bi bi-save me-2"></i>Save Product
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
