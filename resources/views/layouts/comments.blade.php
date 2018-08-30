<div class="comments">
	@foreach ($post->comments as $comment)
		<article>
			{{ $comment->body }}
		</article>
		<hr>
	@endforeach
</div>