<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // import the Post model

class PostsController extends Controller
{
    // Show all posts
    public function index()
    {
        $posts = Post::all(); // fetch from database
        return view('index', compact('posts'));
    }

    // Show form to create new post
    public function create()
    {
        return view('create');
    }

    // Save new post to database
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Save post
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Redirect to blog index
        return redirect('/')->with('success', 'Post created successfully!');
    }
}
