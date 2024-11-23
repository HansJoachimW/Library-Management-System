@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Edit Book</h1>

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block">Title</label>
                <input type="text" name="title" id="title" class="w-full px-4 py-2 border"
                    value="{{ old('title', $book->title) }}" required>
            </div>

            <div class="mb-4">
                <label for="author" class="block">Author</label>
                <input type="text" name="author" id="author" class="w-full px-4 py-2 border"
                    value="{{ old('author', $book->author) }}" required>
            </div>

            <div class="mb-4">
                <label for="year_published" class="block">Year Published</label>
                <input type="number" name="year_published" id="year_published" class="w-full px-4 py-2 border"
                    value="{{ old('year_published', $book->year_published) }}" required>
            </div>

            <div class="mb-4">
                <label for="synopsis" class="block">Synopsis</label>
                <textarea name="synopsis" id="synopsis" class="w-full px-4 py-2 border">{{ old('synopsis', $book->synopsis) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="genre_ids" class="block">Genres</label>
                <select name="genre_ids[]" id="genre_ids" class="w-full px-4 py-2 border" multiple>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}"
                            {{ in_array($genre->id, old('genre_ids', $book->genres->pluck('id')->toArray())) ? 'selected' : '' }}>
                            {{ $genre->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Book</button>
        </form>
    </div>
@endsection
