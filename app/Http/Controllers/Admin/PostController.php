<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_post = Post::all();
        $data = [
            'posts' => $data_post
        ];
        return view('admin.post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|unique:posts'
        ]);
        $data = $request->all();
        $user_id = Auth::id();

        $newPost = new Post();

        $newPost->user_id = $user_id;

        $newPost->slug = Str::slug($data['title']);

        $coverPath = Storage::put('post_covers', $data['image']);
        $data['cover'] = $coverPath;

        $newPost->fill($data);

        $newPost->save();

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selected_post = Post::find($id);
    
        if ($selected_post) {
            $data = [
                'selected_post'=>$selected_post
            ];
            return view('admin.post.show', $data);
        }

        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $selected_post = Post::find($id);
    
        if ($selected_post) {
            $data = [
                'selected_post'=>$selected_post
            ];
            return view('admin.post.edit', $data);
        }

        abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        
        if($data['title'] != $post->title){
            $slug = Str::slug($data['title']);
            $data['slug'] = $slug;
        }

        if(array_key_exists('image',$data)) {
            $coverPath = Storage::put('post_covers', $data['image']);
            $data['cover'] = $coverPath;
        };

        $post->update($data);

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
    }
}
