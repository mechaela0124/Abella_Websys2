@extends('layouts.app')

@section('content')
<div class="card p-4 mx-auto" style="max-width:400px;">
    <h3 class="text-center">Login</h3>

    <form method="POST" action="/login">
        @csrf

        <input class="form-control mb-2" type="email" name="email" placeholder="Email">
        <input class="form-control mb-2" type="password" name="password" placeholder="Password">

        <button class="btn btn-primary w-100">Login</button>

        <a href="/register" class="btn btn-link w-100 mt-2">Create Account</a>
    </form>
</div>
@endsection
