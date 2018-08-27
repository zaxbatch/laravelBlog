@extends ('layouts.master')

@section ('content')
<div class="container">
      <br>
      <h1>Articles</h1>
      <div>
          <ul>
          @foreach ($topics as $topic)
            <li><a href="categories/{{ $topic->id }}">{{ $topic->title }}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
@endsection