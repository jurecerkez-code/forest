<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with(['user', 'trip'])->get();
        return view('comments.index', compact('comments'));
    }

    public function show(Comment $comment)
    {
        return view('comments.show', compact('comment'));
    }
}
