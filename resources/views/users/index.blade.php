@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">All Users</h1>

    <div class="bg-white shadow rounded-lg divide-y">
        @foreach ($users as $user)
            <div class="px-6 py-4 hover:bg-gray-50 flex items-center justify-between">
                <div class="text-gray-900">{{ $user->name ?? $user->phone }}</div>
                <a href="{{ route('users.show', $user) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View</a>
            </div>
        @endforeach
    </div>
@endsection
