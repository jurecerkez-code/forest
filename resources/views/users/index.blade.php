@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-blue-900">All Users</h1>

    <div class="bg-white shadow rounded-lg divide-y divide-blue-100 ring-1 ring-blue-200">
        @foreach ($users as $user)
            <div class="px-6 py-4 hover:bg-blue-50 flex items-center justify-between">
                <div class="text-blue-900">{{ $user->name ?? $user->phone }}</div>
                <a href="{{ route('users.show', $user) }}" class="text-blue-700 hover:text-blue-900 text-sm font-medium">View</a>
            </div>
        @endforeach
    </div>
@endsection
