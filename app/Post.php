<?php

namespace App;

class Post extends Model
{
    // protected $fillable = ['title','body'];
    public function comments()
    	{
    		return $this->hasMany(Comment::class);
    	}

    public function addComment($body)
    	{
    		$this->comments()->create(compact('body'));
    	}
}
