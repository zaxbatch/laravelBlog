<nav class="navbar navbar-dark bg-primary">
      <a class="bg-warning nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Menu
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <h7>Articles</h7>
        <ul>
          @foreach ($topics as $topic)
            <li><a href="/categories/{{ $topic->id }}">{{ $topic->title }}</a></li>
          @endforeach
        </ul>

        <h7>Categories</h7>
        <ul>
          @foreach ($topics as $topic)
            <li><a href="/categories/{{ $topic->id }}">{{ $topic->topic }}</a></li>
          @endforeach
          <hr>
          <li><a href="/posts/create">Create Post</a></li>
         <li> <a href="/subscribe">Subscribe</a></li>
        </ul>


      </div>

      <a class="navbar-brand" href="/">Blog-Site</a>
      <div>
        <a class="bg-warning nav-link" href="/posts/create">New Post</a>
      </div>
</nav>