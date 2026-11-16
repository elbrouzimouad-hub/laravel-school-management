@extends('layout')
@section('content')
<div class="col-md-6 mx-auto">
    <h3>Register</h3>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-2">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <a href="{{ route('login') }}" class="ms-2">Already registered? Login</a>
    </form>
</div>
@endsection