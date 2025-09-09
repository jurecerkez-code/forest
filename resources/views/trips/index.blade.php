@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-blue-900">All Trips</h1>

    <div class="space-y-3">
        @foreach ($trips as $trip)
            <div class="bg-white shadow rounded-lg p-4 ring-1 ring-blue-200">
                <a href="{{ route('trips.show', $trip) }}" class="text-blue-700 hover:text-blue-900 font-medium">
                    Trip #{{ $trip->id }} by {{ $trip->user->name ?? $trip->user->phone }}
                </a>
                <p class="text-sm text-blue-700 mt-1">Duration: {{ $trip->duration }} minutes</p>
            </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $trips->links() }}
    </div>
@endsection
