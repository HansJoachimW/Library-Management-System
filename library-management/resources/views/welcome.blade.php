@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8">
        <h1 class="text-3xl font-bold mb-4">Welcome to the Library Management System</h1>
        <p class="mb-4">This is the home page of the library management system. You can manage books, genres, and members
            using the navigation below.</p>

        <div class="space-x-4">
            <a href="{{ route('genres.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Manage Genres</a>
            <a href="{{ route('books.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Manage Books</a>
        </div>
    </div>
@endsection
