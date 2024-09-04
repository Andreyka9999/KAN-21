<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // get all posts from data base
        $posts = Post::all();

        // Transmit posts in view
        return view('posts.index', ['posts' => $posts]);
    }
}
