@extends('layouts.app')

@section('content')
    <div class="container mx-auto text-left">
        <h1 class="text-3xl font-bold mb-4">Books in Genre: {{ $genre->name }}</h1>

        <table class="table-auto w-full text-left">
            <thead>
                <tr>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Author</th>
                    <th class="px-4 py-2">Year Published</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td class="border px-4 py-2">{{ $book->title }}</td>
                        <td class="border px-4 py-2">{{ $book->author }}</td>
                        <td class="border px-4 py-2">{{ $book->year_published }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
