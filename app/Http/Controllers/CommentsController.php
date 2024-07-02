<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentsController extends Controller
{
    public function store(Request $request, Post $post)
{
    $request->validate([
        'body' => 'required',
    ]);

    $post->comments()->create([
        'body' => $request->body,
        'user_id' => auth()->user()->id, // Assuming you have user authentication
    ]);
    
    return back()->with('success', 'Comment added successfully.');
}
}
