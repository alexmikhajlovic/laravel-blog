<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $data_post = Post::all();
        $data = [
            'posts' => $data_post
        ];
        return view('guest.post.index', $data);
    }

    public function show($slug)
    {
        $data_post = Post::where('slug',$slug)->first();
        $data = [
            'post' => $data_post
        ];
        return view('guest.post.show', $data);
    }
}
