<nav class="navbar navbar-dark bg-primary">
      <a class="bg-warning nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <ul>
          @foreach ($topics as $topic)
            <li><a href="/categories/{{ $topic->id }}">{{ $topic->topic }}</a></li>
          @endforeach
        </ul>
      </div>

      <a class="navbar-brand" href="/">Blog-Site</a>
      <div>
        <a class="bg-warning nav-link" href="/subscribe">Subscribe</a>
      </div>