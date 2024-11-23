@extends('layouts.app')

@section('content')
    <div class="container mx-auto text-left">
        <h1 class="text-3xl font-bold mb-4">Borrow Book: {{ $book->title }}</h1>

        @if ($book->status === 'available')
            <form action="{{ route('books.borrow', $book->id) }}" method="POST" style="display:inline;">
                @csrf
                <select name="member_id" class="mr-2">
                    <option value="" disabled selected>Select Member</option>
                    @foreach ($members as $member)
                        <option value="{{ $member->id }}">{{ $member->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Borrow</button>
            </form>
        @else
            <span class="text-gray-500">Not Available</span>
        @endif

    </div>
@endsection
