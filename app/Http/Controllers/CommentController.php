<?php

namespace App\Http\Controllers;

use App\Models\Post;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        // Validation
        request()->validate([
            'body' => 'required'
        ]);

        // Add a comment to the given post
        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);

        // Return to the page
        return back();
    }
}
