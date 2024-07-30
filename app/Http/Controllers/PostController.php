<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use Cloudinary;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post -> getPaginateBylimit(6)]);
    }//
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' =>$post]);
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(Post $post,PostRequest $request)
    {
        $input = $request['post'];
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];
        $input['user_id']=Auth::id();
        $post ->fill($input)->save();
        return redirect('/posts/'.$post->id);
    }
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post ->fill($input_post)->save();
        
        return redirect('/posts/'.$post->id);
    }
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
?>