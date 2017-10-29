@extends('layouts.master')

@section('header')
	Posts/show
@endsection

@section('content')
	Show Posts <br><br>

	<h1>{{ $post->title }}</h1>

	<p>{{ $post->body }}</p>

@endsection