@extends('layouts.app')

@section('content')
<div class="hero">
    <h1>Welcome! ♡</h1>
    <p>Manage your books and student records easily.</p>
</div>

<div class="cards">
    <div class="card">
        <div class="card-icon">📚</div>
        <h2>Books</h2>
        <p>Add, view, edit, and manage your books.</p>
        <a href="{{ route('books.index') }}" class="btn">Manage Books →</a>
    </div>
    <div class="card">
        <div class="card-icon">🎓</div>
        <h2>Students</h2>
        <p>Manage your student information and records.</p>
        <a href="{{ route('students.index') }}" class="btn">Manage Students →</a>
    </div>
</div>
@endsection