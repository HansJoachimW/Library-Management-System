@extends('layouts.app')

@section('content')
    <div class="container mx-auto text-left">
        <h1 class="text-3xl font-bold mb-4">Books Borrowed by: {{ $member->name }}</h1>

        <table class="table-auto w-full text-left">
            <thead>
                <tr>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Borrow Date</th>
                    <th class="px-4 py-2">Return Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($borrows as $borrow)
                    <tr>
                        <td class="border px-4 py-2">{{ $borrow->book->title }}</td>
                        <td class="border px-4 py-2">{{ $borrow->borrow_at }}</td>
                        <td class="border px-4 py-2">{{ $borrow->return_at ?? 'Not Returned' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
