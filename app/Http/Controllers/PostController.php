<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Retrieve all posts from the posts table
        $posts = Post::all(); // You can also use Post::paginate() for pagination
        
        // Pass the posts data to the view
        return view('posts.index', compact('posts'));
    }
}