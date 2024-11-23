@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8">
        <h1 class="text-2xl font-bold mb-4">Genres</h1>
        <a href="{{ route('genres.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add
            Genre</a>

        <table class="table-auto w-full bg-white shadow-md rounded">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($genres as $genre)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $genre->name }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('genres.edit', $genre) }}" class="text-blue-500 mr-2">Edit</a>
                            <form action="{{ route('genres.destroy', $genre) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection