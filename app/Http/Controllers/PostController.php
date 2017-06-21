<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	$user = auth()->user();

    	// dd($user->posts);

    	// $posts = Post::where('user_id', $user->id )->get();
    	$posts = Post::all();

    	// $posts = $user->posts;

    	return view('posts.index', compact('posts'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store(Request $request)
    {
    	Post::createFrom(auth()->user(),  $request->all() );

    	return redirect('/posts');
    }

    public function edit(Request $request, $id)
    {
    	$post = Post::find($id);

		return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
    	$post = Post::find($id);


  	    $post->update( $request->all() );

  	    return redirect('/posts');
    }

    public function destroy(Request $request, $id)
    {
    	$post = Post::find($id);

    	$post->delete();

  	    return redirect('/posts');
    }    
}
