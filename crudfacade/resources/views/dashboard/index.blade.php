@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h3>Welcome, {{ $user->first_name }}</h3>

    <form method="POST" action="/update">
        @csrf

        <div class="row">
            <div class="col">
                <input class="form-control mb-2" name="first_name" value="{{ $user->first_name }}">
            </div>
            <div class="col">
                <input class="form-control mb-2" name="last_name" value="{{ $user->last_name }}">
            </div>
        </div>

        <input class="form-control mb-2" name="course" value="{{ $user->course }}">
        <input class="form-control mb-2" name="year_level" value="{{ $user->year_level }}">
        <input class="form-control mb-2" name="contact_number" value="{{ $user->contact_number }}">
        <input class="form-control mb-2" name="address" value="{{ $user->address }}">

        <button class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
