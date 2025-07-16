<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class ShowCommentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        
        $post = Post::find('$user_id'); // Replace '1' with the appropriate post ID
        $comments = $post->comments()->latest()->get();
        return view('post.show', compact('post', 'comments'));

    }
}
