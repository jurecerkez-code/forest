@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">All Trips</h1>

    <div class="space-y-3">
        @foreach ($trips as $trip)
            <div class="bg-white shadow rounded-lg p-4">
                <a href="{{ route('trips.show', $trip) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                    Trip #{{ $trip->id }} by {{ $trip->user->name ?? $trip->user->phone }}
                </a>
                <p class="text-sm text-gray-600 mt-1">Duration: {{ $trip->duration }} minutes</p>
            </div>
        @endforeach
    </div>
@endsection
