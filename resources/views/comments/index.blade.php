@extends('layouts.app')

@section('content')
    <h1>All Comments</h1>

    @if($comments->count() > 0)
        <ul>
            @foreach($comments as $comment)
                <li>
                    <a href="{{ route('comments.show', $comment->id) }}">
                        {{ $comment->content }}
                    </a>
                    <small>by User {{ $comment->user_id }} (on Trip {{ $comment->trip_id }})</small>
                </li>
            @endforeach
        </ul>
    @else
        <p>No comments yet.</p>
    @endif
@endsection
