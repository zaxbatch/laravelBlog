@extends ('layouts.master')

@section ('content')
<div class="container">

	<br>
      <h1>What's happening?</h1>
      <div >
        <form class="form-group" method="POST" action="/posts">
        	
          {{csrf_field() }}
          

          <label for="title">Title</label><br>
        	<input type="text" name="title" class="form-control" id="title" required><br><br>
        	<label for="topic">Topic</label><br>
        	<input type="text" name="topic" class="form-control" id="topic" required><br><br>
        	<label for="body">Body</label><br>
        	<textarea name="body" class="form-control id="body" required></textarea><br>
        	<button type="submit" class="btn btn-primary">Publish</button>
        </form>
          
      </div>
      <div>
        
      </div>
</div>
<div>
  @include ('layouts.error')
</div>


@endsection
