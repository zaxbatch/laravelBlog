<div class="comments">
	
		<form class="form-group" method="POST" action="/comments">

          	{{csrf_field() }}

			<textarea  id="comment" name="body"></textarea><br>
			<button>Comment</button>
		</form>
	
</div>