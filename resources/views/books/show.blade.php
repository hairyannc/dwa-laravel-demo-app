<h1>{{ $book->title }}</h1>
<p>Author: {{ $book->author }}</p>
<p>Price: {{ $book->price }}</p>
<a href="{{ route('books.index') }}">Back to List</a>