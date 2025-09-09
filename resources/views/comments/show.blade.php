@extends('layouts.app')

@section('content')
    <div class="max-w-2xl">
        <h1 class="text-2xl font-bold mb-6">Comment</h1>

        <div class="bg-white shadow rounded-lg p-6 space-y-3">
            <p class="text-gray-900">{{ $comment->comment }}</p>
            <p class="text-sm text-gray-500">By User ID: {{ $comment->user_id }}</p>
            <div class="pt-4">
                <a href="{{ route('comments.index') }}" class="text-blue-600 hover:text-blue-800">← Back to Comments</a>
            </div>
        </div>
    </div>
@endsection
