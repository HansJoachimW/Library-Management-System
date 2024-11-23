@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8">
        <h1 class="text-2xl font-bold mb-4">Add New Genre</h1>

        <form action="{{ route('genres.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Genre Name</label>
                <input type="text" name="name" id="name" class="w-full border-gray-300 rounded p-2" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Genre</button>
        </form>
    </div>
@endsection
