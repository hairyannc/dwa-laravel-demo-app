@extends('layouts.app')
@section('content')
<div class="form-card">
    <div class="form-title">
        <h1>Add New Student ♡</h1>
        <p>Enter the student's information below.</p>
    </div>

    @if($errors->any())
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" placeholder="Enter first name" required>
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" placeholder="Enter last name" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter email address" required>
        </div>
        <div class="form-group">
            <label>Enrolled Date</label>
            <input type="date" name="enrolled_date" required>
        </div>

        <div class="form-actions">
            <a href="{{ route('students.index') }}" class="btn btn-light"> ← Back </a>
            <button type="submit" class="btn"> Save Student </button>
        </div>
    </form>
</div>
@endsection