@extends('layouts.app')

@section('content')
<div class="card shadow-sm border-0">
    <div class="p-3 border-bottom bg-light">
        <form action="{{ route('students.index') }}" method="GET" class="d-flex gap-2">
            <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-dark">Filter</button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light">
                <tr>
                    <th class="ps-4 py-3 small fw-bold text-muted">STUDENT</th>
                    <th class="py-3 small fw-bold text-muted text-center">QR ID</th>
                    <th class="pe-4 py-3 small fw-bold text-muted text-end">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td class="ps-4">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/' . $student->profile_picture) }}" class="rounded-circle me-3 border" style="width: 45px; height: 45px; object-fit: cover;" onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($student->name) }}'">
                            <div>
                                <div class="fw-bold">{{ $student->name }}</div>
                                <div class="text-muted small">{{ $student->course }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(50)->generate($student->student_id) !!}
                    </td>
                    <td class="text-end pe-4">
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-outline-secondary btn-sm"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-outline-warning btn-sm"><i class="bi bi-pencil"></i></a>
                        <a href="{{ route('students.confirmDelete', $student->id) }}" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
