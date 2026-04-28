@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow-lg text-center p-4">
                <i class="bi bi-exclamation-triangle text-danger display-1 mb-3"></i>
                <h3 class="fw-bold">Confirm Delete</h3>
                <p class="text-muted">Delete <strong>{{ $student->name }}</strong> ({{ $student->student_id }})?</p>

                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-danger btn-lg">Delete Permanently</button>
                        <a href="{{ route('students.index') }}" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
