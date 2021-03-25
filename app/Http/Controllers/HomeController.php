<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_post = Post::all();
        $data = [
            'posts' => $data_post
        ];
        return view('guest.welcome', $data);
    }
}
