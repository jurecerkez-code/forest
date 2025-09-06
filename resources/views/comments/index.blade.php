@extends('layouts.app')

@section('content')
    <h1>All Comments</h1>

    <ul>
        @foreach ($comments as $comment)
            <li>
                <a href="{{ route('comments.show', $comment) }}">
                    {{ $comment->content }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
