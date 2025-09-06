{{-- resources/views/trips/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Trip #{{ $trip->id }}</h1>

    <p><strong>User:</strong> {{ $trip->user ? $trip->user->name : 'Unknown' }}</p>
    <p><strong>Start Time:</strong> {{ $trip->start_time }}</p>
    <p><strong>End Time:</strong> {{ $trip->end_time }}</p>
    <p><strong>Duration:</strong> {{ $trip->duration }} minutes</p>
    <p><strong>Satisfaction:</strong> {{ $trip->satisfaction }}</p>

    <h3>Comments</h3>
    @if($trip->comments->count())
        <ul>
            @foreach($trip->comments as $comment)
                <li>
                    {{ $comment->content }} — 
                    <em>{{ $comment->user ? $comment->user->name : 'Anonymous' }}</em>
                </li>
            @endforeach
        </ul>
    @else
        <p>No comments yet.</p>
    @endif

    <a href="{{ route('trips.index') }}">← Back to Trips</a>
@endsection
