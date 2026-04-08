@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h3>Register</h3>

    <form method="POST" action="/register">
        @csrf

        <div class="row">
            <div class="col"><input class="form-control mb-2" name="student_id" placeholder="Student ID"></div>
            <div class="col"><input class="form-control mb-2" name="course" placeholder="Course"></div>
        </div>

        <div class="row">
            <div class="col"><input class="form-control mb-2" name="first_name" placeholder="First Name"></div>
            <div class="col"><input class="form-control mb-2" name="last_name" placeholder="Last Name"></div>
        </div>

        <input class="form-control mb-2" name="email" placeholder="Email">
        <input class="form-control mb-2" type="password" name="password" placeholder="Password">

        <div class="row">
            <div class="col"><input class="form-control mb-2" name="year_level" placeholder="Year Level"></div>
            <div class="col"><input class="form-control mb-2" name="contact_number" placeholder="Contact"></div>
        </div>

        <input class="form-control mb-2" name="address" placeholder="Address">
        <input class="form-control mb-2" type="date" name="birthdate">

        <button class="btn btn-success">Register</button>
    </form>
</div>
@endsection
