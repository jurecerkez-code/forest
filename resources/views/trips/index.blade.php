<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trips</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-2xl font-bold mb-4">Trips</h1>

    <table class="min-w-full bg-white shadow-md rounded-lg">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4">User</th>
                <th class="py-2 px-4">Start</th>
                <th class="py-2 px-4">End</th>
                <th class="py-2 px-4">Duration (min)</th>
                <th class="py-2 px-4">Satisfaction</th>
                <th class="py-2 px-4">Comments</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trips as $trip)
                <tr class="border-b">
                    <td class="py-2 px-4">{{ $trip->user->name }}</td>
                    <td class="py-2 px-4">{{ $trip->start_time }}</td>
                    <td class="py-2 px-4">{{ $trip->end_time }}</td>
                    <td class="py-2 px-4">{{ round($trip->duration / 60) }}</td>
                    <td class="py-2 px-4">{{ $trip->satisfaction }}</td>
                    <td class="py-2 px-4">
                        <ul>
                            @foreach($trip->comments as $comment)
                                <li class="text-sm text-gray-600">- {{ $comment->comment }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
