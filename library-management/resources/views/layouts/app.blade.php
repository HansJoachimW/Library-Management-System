<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <nav class="bg-blue-500 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-white text-xl font-bold">Library System</a>
            <div class="space-x-4">
                <a href="{{ route('genres.index') }}" class="text-white">Genres</a>
                <a href="{{ route('books.index') }}" class="text-white">Books</a>
                <a href="{{ route('categories.index') }}" class="text-white">Categories</a>
                <a href="{{ route('borrows.index') }}" class="text-white">Borrows</a>
                <a href="{{ route('members.index') }}" class="text-white">Members</a>
            </div>
        </div>
    </nav>


    <main class="container mx-auto py-8">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Library Management System. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>
