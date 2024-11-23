@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8 text-left">
        <h1 class="text-3xl font-bold mb-6">Books by Category</h1>

        <table class="table-auto w-full text-left border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Books</th>
                    <th class="border px-4 py-2">Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book_genres as $book_genre)
                    <tr>
                        <td class="border px-4 py-2">
                            {{ $book_genre->book->title }} by {{ $book_genre->book->author }}
                        </td>
                        <td class="border px-4 py-2">{{ $book_genre->genre->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
