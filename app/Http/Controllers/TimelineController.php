<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('dashboard', [
            'posts' => Post::with('user')->withCount('comments')->latest('id')->get(),
        ]);

    }
}
