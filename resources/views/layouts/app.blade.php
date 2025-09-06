<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forest App</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">

    <!-- Navbar -->
    <nav class="bg-white shadow mb-8">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">Forest</a>
            <div class="space-x-6">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="{{ route('trips.index') }}" class="text-gray-700 hover:text-blue-600">Trips</a>
                <a href="{{ route('comments.index') }}" class="text-gray-700 hover:text-blue-600">Comments</a>
                <a href="{{ route('users.index') }}" class="text-gray-700 hover:text-blue-600">Users</a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="max-w-5xl mx-auto px-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="mt-12 bg-white shadow py-4">
        <div class="max-w-7xl mx-auto px-4 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} Forest App. All rights reserved.
        </div>
    </footer>
</body>
</html>
