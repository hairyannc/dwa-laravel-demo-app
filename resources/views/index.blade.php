@extends('layouts.app')
@section('content')
<div class="bg-[#0f3920] p-8 rounded-[20px] border border-[#1a4d2e] shadow-2xl">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h2 class="text-3xl font-black text-white">Library Collection</h2>
            <p class="text-[#86efac] text-sm mt-1">Total of {{ count($books) }} books archived</p>
        </div>
        <a href="/books/create" class="bg-[#22c55e] hover:bg-[#16a34a] text-[#052e16] px-6 py-3 rounded-full font-black shadow-lg shadow-green-900/30 transition">
            <i class="fas fa-plus mr-2"></i> Add Book
        </a>
    </div>

    <div class="overflow-hidden rounded-xl border border-[#1a4d2e]">
        <table class="w-full text-left">
            <thead class="bg-[#052e16] text-[#6ee7b7] text-xs uppercase tracking-widest">
                <tr><th class="py-4 px-6">Title</th><th>Author</th><th>Action</th></tr>
            </thead>
            <tbody class="divide-y divide-[#1a4d2e]">
                @foreach($books as $book)
                <tr class="hover:bg-[#143d24] transition group">
                    <td class="py-4 px-6 font-bold text-white group-hover:text-[#86efac]">{{ $book->title }}</td>
                    <td class="text-[#a7f3d0]">{{ $book->author }}</td>
                    <td class="flex gap-2 py-3 px-6">
                        <a href="/books/{{ $book->id }}/edit" class="bg-[#14532d] hover:bg-[#16a34a] text-white px-4 py-1.5 rounded-full text-sm transition">Edit</a>
                        <form action="/books/{{ $book->id }}" method="POST">@csrf @method('DELETE')
                            <button class="bg-[#7f1d1d] hover:bg-red-600 text-white px-4 py-1.5 rounded-full text-sm transition">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection