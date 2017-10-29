<?php

namespace App\Http\Controllers;

class CommentsController extends Controller
{
    public function store(\App\Post $post)
    	{
    		$this->validate(request(),['body' => 'required | min:4']);
    		$post->addComment(request('body'));
    		return back();
    	}
}
