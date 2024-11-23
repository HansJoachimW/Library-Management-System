@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8">
        <h1 class="text-2xl font-bold mb-4">Add New Book</h1>

        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <label for="title">Title:</label>
            <input type="text" name="title" required>

            <label for="author">Author:</label>
            <input type="text" name="author" required>

            <label for="year_published">Year Published:</label>
            <input type="number" name="year_published" required>

            <label for="synopsis">Synopsis:</label>
            <textarea name="synopsis"></textarea>

            <label for="genre_ids">Select Genres:</label>
            <select name="genre_ids[]" multiple>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>

            <button type="submit">Create Book</button>
        </form>

    </div>
@endsection
