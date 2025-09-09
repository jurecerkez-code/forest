@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-blue-900">All Comments</h1>

    <div class="overflow-hidden rounded-lg bg-white shadow ring-1 ring-blue-200">
        <table class="min-w-full divide-y divide-blue-100">
            <thead class="bg-blue-100/60">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider">Content</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider">User</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider">Trip</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-blue-100">
                @foreach($comments as $comment)
                    <tr class="hover:bg-blue-50/70">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-900">{{ $comment->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-900">{{ $comment->comment }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-800">{{ $comment->user ? $comment->user->name : 'Unknown' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-800">{{ $comment->trip ? ('Trip #'.$comment->trip_id) : 'Unknown' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <a href="{{ route('comments.show', $comment->id) }}" class="text-blue-700 hover:text-blue-900 font-medium">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $comments->links() }}
    </div>
@endsection
