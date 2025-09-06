@extends('layouts.app')

@section('content')
    <h1>All Users</h1>

    <ul>
        @foreach ($users as $user)
            <li>
                <a href="{{ route('users.show', $user) }}">
                    {{ $user->name ?? $user->phone }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
