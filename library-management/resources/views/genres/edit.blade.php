@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8 text-left">
        <h1 class="text-2xl font-bold mb-4">Edit Genre</h1>

        <form action="{{ route('genres.update', $genre) }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Genre Name</label>
                <input type="text" name="name" id="name" value="{{ $genre->name }}"
                    class="w-full border-gray-300 rounded p-2" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Genre</button>
        </form>
    </div>
@endsection
