@extends('layouts.app')

@section('content')
    <h1>User Details</h1>

    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Name:</strong> {{ $user->name ?? 'No name' }}</p>
    <p><strong>Phone:</strong> {{ $user->phone }}</p>
    <p><strong>Email:</strong> {{ $user->email ?? 'No email' }}</p>
    <p><strong>Created At:</strong> {{ $user->created_at }}</p>

    <a href="{{ route('users.index') }}">← Back to Users</a>
@endsection
