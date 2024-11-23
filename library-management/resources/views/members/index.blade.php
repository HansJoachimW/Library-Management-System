@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8 text-left">
        <h1 class="text-2xl font-bold mb-4">Members</h1>
        <a href="{{ route('members.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add
            Member</a>

        <table class="table-auto w-full bg-white shadow-md rounded">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Phone</th>
                    <th class="px-4 py-2">Address</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $member->name }}</td>
                        <td class="px-4 py-2">{{ $member->phone_number }}</td>
                        <td class="px-4 py-2">{{ $member->address }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('members.borrows', $member->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">View
                                Borrowed Books</a>
                            <a href="{{ route('members.edit', $member) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</a>
                            <form action="{{ route('members.destroy', $member) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
