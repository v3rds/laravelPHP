@extends('layouts.master')

@section('header')
	Posts/show
@endsection

@section('content')
	Show Posts <br><br>

	<h1>{{ $post->title }}</h1>

	<p>{{ $post->body }}</p>

	<hr>

	<ul>
	@foreach ($post->comments as $comment)
		<li>
			<strong>
				{{ $comment->created_at->diffForHumans() }}:
			</strong>
			{{ $comment->body }}
		</li>
	@endforeach
	</ul>

@endsection