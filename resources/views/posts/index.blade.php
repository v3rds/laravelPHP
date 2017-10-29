@extends('layouts.master')

@section('header')
	Posts/index
@endsection

@section('content')
	Posts/index Content

	<br><br>
	@foreach ($posts as $post)
		@include('posts.post')
	@endforeach

@endsection