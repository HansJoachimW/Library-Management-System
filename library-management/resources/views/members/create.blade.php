@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8">
        <h1 class="text-2xl font-bold mb-4">Add New Member</h1>

        <form action="{{ route('members.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="w-full border-gray-300 rounded p-2" required>
            </div>

            <div class="mb-4">
                <label for="phone_number" class="block text-gray-700">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="w-full border-gray-300 rounded p-2"
                    required>
            </div>

            <div class="mb-4">
                <label for="address" class="block text-gray-700">Address</label>
                <textarea name="address" id="address" rows="4" class="w-full border-gray-300 rounded p-2" required></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Member</button>
        </form>
    </div>
@endsection
