@extends ('layouts.master')

@section ('content')
<div class="container">
      <br>
      <h1>Categories</h1>
      <div>
          <ul>
          @foreach ($topics as $topic)
            <li><a href="categories/{{ $topic->id }}">{{ $topic->topic }}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
@endsection