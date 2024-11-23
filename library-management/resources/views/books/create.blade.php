@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8 text-left">
        <h1 class="text-2xl font-bold mb-4">Add New Book</h1>

        <form action="{{ route('books.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="w-full border-gray-300 rounded p-2" required>
            </div>

            <div class="mb-4">
                <label for="author" class="block text-gray-700">Author</label>
                <input type="text" name="author" id="author" class="w-full border-gray-300 rounded p-2" required>
            </div>

            <div class="mb-4">
                <label for="year_published" class="block text-gray-700">Year Published</label>
                <input type="number" name="year_published" id="year_published" class="w-full border-gray-300 rounded p-2"
                    required>
            </div>

            <div class="mb-4">
                <label for="synopsis" class="block text-gray-700">Synopsis</label>
                <textarea name="synopsis" id="synopsis" class="w-full border-gray-300 rounded p-2"></textarea>
            </div>

            <div class="mb-4">
                <label for="genre_ids" class="block text-gray-700">Select Genres</label>
                <select name="genre_ids[]" id="genre_ids" multiple class="w-full border-gray-300 rounded p-2">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Book</button>
        </form>
    </div>
@endsection
