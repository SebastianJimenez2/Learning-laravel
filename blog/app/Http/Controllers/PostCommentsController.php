<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    //
    public function store(Post $post)
    {
        // Validate the request
        request()->validate([
            'body' => 'required|min:3|max:1000',
        ]);

        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('body'),
        ]);

        // Redirect back to the post
        return back()->with('success', 'Comment added successfully!');
    }
}
