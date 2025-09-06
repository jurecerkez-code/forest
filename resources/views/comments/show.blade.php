@extends('layouts.app')

@section('content')
    <h1>Comment Details</h1>

    <p><strong>Content:</strong> {{ $comment->content }}</p>
    <p><strong>User ID:</strong> {{ $comment->user_id }}</p>
    <p><strong>Trip ID:</strong> {{ $comment->trip_id }}</p>

    <a href="{{ route('comments.index') }}">← Back to All Comments</a>
@endsection
