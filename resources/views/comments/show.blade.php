@extends('layouts.app')

@section('content')
    <h1>Comment #{{ $comment->id }}</h1>

    <p><strong>Content:</strong> {{ $comment->content }}</p>
    <p><strong>User:</strong> {{ $comment->user ? $comment->user->name : 'Unknown' }}</p>
    <p><strong>Trip:</strong> {{ $comment->trip ? $comment->trip->title : 'Unknown' }}</p>

    <a href="{{ route('comments.index') }}">← Back to All Comments</a>
@endsection
