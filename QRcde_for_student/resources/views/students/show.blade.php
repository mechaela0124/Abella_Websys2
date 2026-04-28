@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="mb-4">
        <a href="{{ route('students.index') }}" class="btn btn-outline-secondary shadow-sm px-3">
            <i class="bi bi-arrow-left"></i> Back to Directory
        </a>
    </div>

    <div class="row g-4">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img src="{{ asset('storage/' . $student->profile_picture) }}"
                             class="rounded-circle border border-3 border-white shadow-sm me-4"
                             style="width: 120px; height: 120px; object-fit: cover;">
                        <div>
                            <h2 class="fw-bold text-dark mb-1">{{ $student->name }}</h2>
                            <p class="text-muted mb-0"><i class="bi bi-card-text me-2"></i>Student ID: {{ $student->student_id }}</p>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="small text-uppercase text-muted fw-bold">Email Address</label>
                            <p class="border-bottom pb-2">{{ $student->email }}</p>
                        </div>
                        <div class="col-sm-6">
                            <label class="small text-uppercase text-muted fw-bold">Course / Program</label>
                            <p class="border-bottom pb-2">{{ $student->course }}</p>
                        </div>
                        <div class="col-sm-6">
                            <label class="small text-uppercase text-muted fw-bold">Year Level</label>
                            <p class="border-bottom pb-2">{{ $student->year_level }}</p>
                        </div>
                        <div class="col-sm-6">
                            <label class="small text-uppercase text-muted fw-bold">Birthdate</label>
                            <p class="border-bottom pb-2">{{ $student->birthdate }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-dark text-white text-center h-100">
                <div class="card-body d-flex flex-column justify-content-center p-4">
                    <h5 class="fw-bold mb-3">STUDENT QR PASS</h5>

                    <div class="p-3 bg-white rounded shadow-sm mb-3 d-inline-block mx-auto">

                        {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(200)->generate($qr) !!}
                    </div>

                    <p class="small text-light opacity-75">Scan to verify student credentials and academic records.</p>

                    <div class="mt-3">
                        <button onclick="window.print()" class="btn btn-primary w-100">
                            <i class="bi bi-printer me-2"></i> Print Label
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @media print {
        /* Hide UI elements not needed for the ID pass */
        .btn, nav, .mb-4, .btn-outline-secondary, .mt-3 {
            display: none !important;
        }

        /* Remove borders and shadows for a clean print */
        .card {
            border: none !important;
            box-shadow: none !important;
            -webkit-box-shadow: none !important;
        }

        /* Ensure the body is white to save ink */
        body {
            background-color: white !important;
        }

        /* Optional: Center the student card on the printed page */
        .container {
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
        }
    }
</style>
@endsection
