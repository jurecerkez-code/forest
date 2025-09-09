@extends('layouts.app')

@section('content')
    <h1>All Comments</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Content</th>
                <th>User</th>
                <th>Trip</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->comment }}</td>
                    <td>{{ $comment->user ? $comment->user->name : 'Unknown' }}</td>
                    <td>{{ $comment->trip ? $comment->trip->title : 'Unknown' }}</td>
                    <td><a href="{{ route('comments.show', $comment->id) }}">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
