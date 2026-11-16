@extends('layout')

@section('content')
<h3>Students List</h3>
<div class="mb-3">
    <a href="{{ route('students.create') }}" class="btn btn-success">+ Add New Student</a>
</div>
<div class="table-wrapper">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Section</th>
                <th>Image</th>
                <th>Show</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->section }}</td>
                <td><img src="/image/{{ $student->image }}" width="96" height="96" /></td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('students.show', $student->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('students.edit', $student->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer cet étudiant ?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection