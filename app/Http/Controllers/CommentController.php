<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Show all comments
    public function index()
    {
        $comments = Comment::with('user', 'trip')->latest()->paginate(10);

        return view('comments.index', compact('comments'));
    }

    // Show one comment
    public function show(Comment $comment)
    {
        return view('comments.show', compact('comment'));
    }
}
