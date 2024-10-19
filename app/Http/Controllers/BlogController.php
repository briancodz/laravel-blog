<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Show all blog posts
    public function index()
    {
        $posts = Post::latest()->get();
        return view('blog.index', compact('posts'));
    }

    // Show a single blog post
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('post'));
    }

    public function create()
{
    return view('blog.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|max:255',
        'slug' => 'required|unique:posts,slug',
        'content' => 'required',
    ]);

    Post::create([
        'title' => $request->title,
        'slug' => $request->slug,
        'content' => $request->content,
    ]);

    return redirect()->route('blog.index')->with('success', 'Post created successfully.');
}

}
