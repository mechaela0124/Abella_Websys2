@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white py-3">
                    <h5 class="mb-0 fw-bold"><i class="bi bi-person-plus-fill me-2"></i>Register New Student</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-muted">STUDENT ID</label>
                                <input type="text" name="student_id" class="form-control form-control-lg bg-light" placeholder="e.g. 2024-0001" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-muted">FULL NAME</label>
                                <input type="text" name="name" class="form-control form-control-lg bg-light" placeholder="Juan Dela Cruz" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label fw-bold small text-muted">EMAIL ADDRESS</label>
                                <input type="email" name="email" class="form-control bg-light" placeholder="juan@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-muted">COURSE</label>
                                <input type="text" name="course" class="form-control bg-light" placeholder="BSIT" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-muted">YEAR LEVEL</label>
                                <select name="year_level" class="form-select bg-light">
                                    <option value="1st Year">1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year">3rd Year</option>
                                    <option value="4th Year">4th Year</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label fw-bold small text-muted">PROFILE PICTURE</label>
                                <input type="file" name="profile_picture" class="form-control" accept="image/*">
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top d-flex gap-2">
                            <button type="submit" class="btn btn-primary px-5 py-2 fw-bold shadow-sm">Save Student</button>
                            <a href="{{ route('students.index') }}" class="btn btn-outline-secondary px-4">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
