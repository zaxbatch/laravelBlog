@extends ('layouts.master')

@section ('content')
<div class="container">
      <br>
      <h1>Subscribe to my newsletter</h1>
    </div>
    <div class="container">
      <hr>
      <form action="/thanks">
        <label>name</label>
        <input type="text" name="name">
        <br>
        <label>email</label>
        <input type="email" name="email">
        <br>
        <button>Submit</button>
      </form>
    </div>
@endsection

