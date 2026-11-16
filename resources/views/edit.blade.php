@extends('layout')

@section('content')
<h3>Edit Student</h3>

<form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group mb-2">
        <label>Name:</label>
        <input type="text" class="form-control" name="name" value="{{ $student->name }}" required />
    </div>
    <div class="form-group mb-2">
        <label>Email:</label>
        <input type="email" class="form-control" name="email" value="{{ $student->email }}" required />
    </div>
    <div class="form-group mb-2">
        <label>Phone:</label>
        <input type="text" class="form-control" name="phone" value="{{ $student->phone }}" required />
    </div>
    <div class="form-group mb-2">
        <label>Section:</label>
        <input type="text" class="form-control" name="section" value="{{ $student->section }}" required />
    </div>
    <div class="form-group mb-3">
        <label>Image (optional):</label>
        <input type="file" class="form-control" name="image" />
        <img src="/image/{{ $student->image }}" width="80" class="mt-2">
    </div>
    <button type="submit" class="btn btn-primary">Update Student</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection