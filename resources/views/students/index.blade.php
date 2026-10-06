@extends('layouts.app')

@section('content')
<div class="page-header">
    <div>
        <h1>Students</h1>
        <p>Manage student information and records.</p>
    </div>
    <a href="{{ route('students.create') }}" class="btn">
        + Add New Student
    </a>
</div>

@if(session('success'))
<div class="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-card">
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Enrolled Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
            <tr>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->enrolled_date }}</td>
                <td>
                    <div class="actions">
                        <a href="{{ route('students.show', $student) }}" class="btn btn-light">View</a>
                        <a href="{{ route('students.edit', $student) }}" class="btn">Edit</a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No students found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection