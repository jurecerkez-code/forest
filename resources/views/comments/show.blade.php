@extends('layouts.app')

@section('content')
    <h1>Comment</h1>

    <p>{{ $comment->comment }}</p>
    <p><small>By User ID: {{ $comment->user_id }}</small></p>
@endsection
