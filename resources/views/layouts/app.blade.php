<!DOCTYPE html>
<html>
<head>
    <title>My Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar">
        <a href="{{ url('/') }}" class="logo">♡ My Laravel App</a>
        <div class="nav-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('books.index') }}">Books</a>
            <a href="{{ route('students.index') }}">Students</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        © 2026 My Laravel App ♡
    </footer>
</body>
</html>