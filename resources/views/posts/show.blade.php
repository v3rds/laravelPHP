@extends('layouts.master')

@section('header')
	Posts/show
@endsection

@section('content')
	Show Posts <br><br>

	<h1>{{ $post->title }}</h1>

	<p>{{ $post->body }}</p>

<!-- Show Comments --><hr>
	<u>Comments:</u>
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

<!-- Add Comments --><hr>
	<form method="POST" action="/posts/{{ $post->id }}/comments">
		{{ csrf_field() }}
		<textarea name="body" placeholder="Your Comments here"></textarea>
		<br>
		<button type="submit">Publish</button>
	
		@include('layouts.errors')

	</form>
@endsection