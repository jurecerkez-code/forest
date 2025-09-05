@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Trips</h1>

    <ul>
        @foreach ($trips as $trip)
            <li class="mb-2">
                <a href="{{ route('trips.show', $trip) }}" class="text-blue-600">
                    Trip #{{ $trip->id }} by {{ $trip->user->name }}
                </a>
                ({{ $trip->start_time }} → {{ $trip->end_time }})
            </li>
        @endforeach
    </ul>

    {{ $trips->links() }}
@endsection
