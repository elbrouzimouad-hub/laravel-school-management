@extends('layout')
@section('content')
<div class="col-md-6 mx-auto">
    <h3>Login</h3>
    @if($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-2">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Log In</button>
        <a href="{{ route('register') }}" class="ms-2">Create an account</a>
    </form>
</div>
@endsection