@extends ('layouts.master')

@section ('content')
<div class="container">
      <br>
      <h1>Subscribe to my newsletter</h1>
    </div>
    <div class="container">
      <hr>
      <form class="form-group" "method="POST" action="/thanks">

          


        <label>name</label>
        <input type="text" name="name" id="name">
        <br>
        <label>email</label>
        <input type="email" name="email" id="email">
        <br>
        <button>Submit</button>
      </form>
      <div>
        @include ('layouts.error')
      </div>
    </div>
@endsection

