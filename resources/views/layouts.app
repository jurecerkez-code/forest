<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forest App</title>
    @vite('resources/css/app.css') {{-- if you're using Laravel Vite --}}
</head>
<body class="font-sans antialiased">
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('trips.index') }}">Trips</a>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
