@extends ('layouts.master')

@section ('content')
<div class="container">
      <br>
      <h1>Articles</h1>
      <div>
          <ul>
          @foreach ($posts as $post)
            <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
@endsection