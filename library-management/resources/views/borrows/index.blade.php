@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8 text-center">
        <h1 class="text-3xl font-bold mb-6">Books by Borrower</h1>

        <table class="table-auto w-full text-left border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Borrower</th>
                    <th class="border px-4 py-2">Book</th>
                    <th class="border px-4 py-2">Borrow Date</th>
                    <th class="border px-4 py-2">Return Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($borrows as $borrow)
                    <tr>
                        <td class="border px-4 py-2">{{ $borrow->member->name }}</td>
                        <td class="border px-4 py-2">{{ $borrow->book->title }} by {{ $borrow->book->author }}</td>
                        <td class="border px-4 py-2">{{ $borrow->borrow_at }}</td>
                        <td class="border px-4 py-2">{{ $borrow->return_at ?? 'Not Returned' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
