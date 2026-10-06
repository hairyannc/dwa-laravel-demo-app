<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<nav class="navbar">

    <a href="{{ url('/') }}" class="logo">
        ♡ My Laravel App
    </a>

    <div class="nav-links">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ route('books.index') }}">Books</a>
        <a href="{{ route('students.index') }}">Students</a>
    </div>

</nav>

<div class="container">

    <div class="form-card">

        <div class="form-title">
            <h1>Add New Book ♡</h1>
            <p>Enter the information of the new book.</p>
        </div>

        <form action="{{ route('books.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <label>Title</label>
                <input type="text"
                       name="title"
                       placeholder="Enter book title"
                       required>
            </div>

            <div class="form-group">
                <label>Author</label>
                <input type="text"
                       name="author"
                       placeholder="Enter author's name"
                       required>
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="number"
                       step="0.01"
                       name="price"
                       placeholder="Enter price"
                       required>
            </div>

            <div class="form-actions">

                <a href="{{ route('books.index') }}"
                   class="btn btn-light">
                    ← Back
                </a>

                <button type="submit" class="btn">
                    Save Book
                </button>

            </div>

        </form>

    </div>

</div>

<footer class="footer">
    © 2026 My Laravel App ♡
</footer>

</body>
</html>
