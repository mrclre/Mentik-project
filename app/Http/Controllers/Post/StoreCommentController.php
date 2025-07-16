<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class StoreCommentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Post $post)
    {
        $data = $request->validate([
            'body' => ['required', 'min:8']
        ]);


        $data['user_id'] = request()->user()->id;

        $post->comments()->create($data);
        // $comment = new Comment;
        // $comment->post_id = $post->id;
        // $comment->user_id = auth()->id(); // Ensure the user_id is set
        // $comment->body = $request->body; // Assuming you have a body field
        // $comment->save();
    

        return redirect()->back()->with('success', 'Comment created!');
    }

    
}
