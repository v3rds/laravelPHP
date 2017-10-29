<a href="/posts/{{ $post->id }}">
	{{ $post->title }}	
</a>

<br>

{{ $post->created_at->toFOrmattedDateString() }}

<br>

{{ $post->body }} 

<br><br>