<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class DeleteCommentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Post $post, Comment $comment)
    {
        Gate::authorize('delete', $comment);

        $comment->delete();

        session()->flash('success', 'Comment deleted!');
        
        return redirect()->back();
        // }

        // abort(403);
    }
}
