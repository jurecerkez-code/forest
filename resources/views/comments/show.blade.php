@extends('layouts.app')

@section('content')
    <div class="max-w-2xl">
        <h1 class="text-2xl font-bold mb-6 text-blue-900">Comment</h1>

        <div class="bg-white shadow rounded-lg p-6 space-y-3 ring-1 ring-blue-200">
            <p class="text-blue-900">{{ $comment->comment }}</p>
            <p class="text-sm text-blue-700">By User ID: {{ $comment->user_id }}</p>
            <div class="pt-4">
                <a href="{{ route('comments.index') }}" class="text-blue-700 hover:text-blue-900">← Back to Comments</a>
            </div>
        </div>
    </div>
@endsection
