<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forest App</title>
</head>
<body>
    <header>
        <nav>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('trips.index') }}">Trips</a>
    <a href="{{ route('users.index') }}">Users</a>
    <a href="{{ route('comments.index') }}">Comments</a>
</nav>

    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
