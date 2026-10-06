<h1>Edit Book</h1>
<form action="{{ route('books.update', $book) }}" method="POST">
@csrf @method('PUT')
Title: <input type="text" name="title" value="{{ $book->title }}"><br><br>
Author: <input type="text" name="author" value="{{ $book->author }}"><br><br>
Price: <input type="number" step="0.01" name="price" value="{{ $book->price }}"><br><br>
<button type="submit">Update</button>
</form>
<a href="{{ route('books.index') }}">Back</a>