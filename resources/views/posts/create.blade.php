@extends('layouts.master')

@section('header')
	posts/create
@endsection

@section('content')
	Create Posts

	<form method="POST" action="/posts">

		{{ csrf_field() }}
			<br><br>
		<input type="text" name="title" id="title" placeholder="title">
			<br><br>
		<textarea id="body" name="body"></textarea>		
			<br><br>
		<button type="submit"> publish </button>

		@include('layouts.errors')

	</form>

@endsection