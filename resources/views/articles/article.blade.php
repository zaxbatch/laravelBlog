
@extends ('layouts.master')

@section ('content')
    <div class="container">
      <br>
      <h1>Title: {{ $id->title }}</h1>
      <h2>Topic: {{ $id->topic }}</h2>
      <p>Content: {{ $id->body }}</p>
    </div>

    <div class="comments">
  @foreach ($topics->comments as $comment)
    <article>
      {{ $comment }}
    </article>
    <hr>
  @endforeach
</div>

    <!-- footer -->
    <footer class="footer bg-warning fixed-bottom text-center">
      <div class="container">
        <span class="text-muted">&copy 2018 Blog-Site</span>
      </div>
@endsection