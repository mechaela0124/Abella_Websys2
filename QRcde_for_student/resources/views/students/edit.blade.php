@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-warning py-3">
                    <h5 class="mb-0 fw-bold text-dark"><i class="bi bi-pencil-square me-2"></i>Update Student Details</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="d-flex align-items-center mb-4 p-3 bg-light rounded">
                            <img src="{{ asset('storage/' . $student->profile_picture) }}" class="rounded-circle border border-3 border-white shadow-sm me-3" style="width: 70px; height: 70px; object-fit: cover;">
                            <div>
                                <h6 class="mb-0 fw-bold">Current Profile Picture</h6>
                                <small class="text-muted">Upload a new one to change it</small>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-muted">STUDENT ID</label>
                                <input type="text" name="student_id" class="form-control" value="{{ $student->student_id }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-muted">FULL NAME</label>
                                <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label fw-bold small text-muted">NEW PROFILE PICTURE</label>
                                <input type="file" name="profile_picture" class="form-control">
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top d-flex gap-2">
                            <button type="submit" class="btn btn-warning px-5 py-2 fw-bold shadow-sm">Update Record</button>
                            <a href="{{ route('students.index') }}" class="btn btn-outline-secondary px-4">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
