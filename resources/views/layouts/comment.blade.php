<div class="comments">
	
		<form class="form-group" method="POST" action="/posts/{{ $post->id }}/comments">

          	{{csrf_field() }}

			<textarea  id="comment" name="body" required></textarea><br>
			<button>Comment</button>
		</form>
	
</div>
<div>
	@include ('layouts.error')
</div>