@extends ('layouts.master')

@section ('content')
<br>
      <div class="container">
      <br>
      <h1>Topic: {{ $id->topic }}</h1>
      <h2>Title: {{ $id->title }}</h2>
    </div>
@endsection

