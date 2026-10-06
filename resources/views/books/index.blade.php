<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
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

    <div class="page-header">

        <div>
            <h1>Books</h1>
            <p>Manage your book collection.</p>
        </div>

        <a href="{{ route('books.create') }}" class="btn">
            + Add New Book
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
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @forelse($books as $book)

                    <tr>

                        <td>{{ $book->title }}</td>

                        <td>{{ $book->author }}</td>

                        <td>₱{{ number_format($book->price, 2) }}</td>

                        <td>

                            <div class="actions">

                                <a href="{{ route('books.show', $book) }}"
                                   class="btn btn-light">
                                    View
                                </a>

                                <a href="{{ route('books.edit', $book) }}"
                                   class="btn">
                                    Edit
                                </a>

                                <form action="{{ route('books.destroy', $book) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-delete">
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="4">
                            No books found.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

<footer class="footer">
    © 2026 My Laravel App ♡
</footer>

</body>
</html>