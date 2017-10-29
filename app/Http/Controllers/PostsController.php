<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
	    {	//fetch posts

	    	$posts = \App\Post::latest()->get();

	    	return view('posts.index', compact('posts'));	    	
	    }

	public function create()
		{
			return view('posts.create');
		}

    public function show(\App\Post $post)
	    {
			return view('posts.show', compact('post'));	    	
	    }

	public function store()
		{
			//DISPLAY PASSED ARRAY VALUES - dd(request()->all()); |dd(request(['title','body']));dd(request('title'));

			//SAVE TO DATABASE -WAY 1- $post = new \App\Post; | $post->title = request('title'); |
			//$post->body = request('body'); | $post->save();

			//SAVE TO DATABASE -WAY 2- \App\Post::create(['title' => request('title'),'body'	=> request('body')]);

			$this->validate(request(),[
				'title' => 'required',
				'body' => 'required'

			]);

			\App\Post::create(request(['title','body']));

			return redirect('/');

		}
}
