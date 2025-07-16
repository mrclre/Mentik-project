<?php

namespace App\Http\Controllers\Post;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StorePostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'body' => ['required', 'min:8']
        ]);
        
        $post = new Post();
        $post->body = $request->body;
        $post->user_id = auth()->id(); // Assuming you're using Laravel's default authentication
        $post->save();

        return redirect()->back()->with('success', 'Post created!');
    }
}  
