@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width:400px">
    <h2 class="mb-4 text-center">Login Admin</h2>

    <form method="POST" action="{{ route('login.process') }}">
        @csrf

        <input type="email" name="email"
            class="form-control mb-3"
            placeholder="Email" required>

        <input type="password" name="password"
            class="form-control mb-3"
            placeholder="Password" required>

        <button class="btn btn-primary w-100">Login</button>
    </form>

    @error('email')
        <div class="alert alert-danger mt-3">
            {{ $message }}
        </div>
    @enderror
</div>
@endsection