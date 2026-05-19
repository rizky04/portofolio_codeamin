<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::published()->paginate(9);
        return view('blog.index', compact('posts'));
    }

    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->where('status', 'published')->firstOrFail();
        return view('blog.show', compact('post'));
    }
}
