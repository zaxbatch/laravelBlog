<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Blog</title>
  </head>
  <body>
    <!-- Navbar content -->
    <nav class="navbar navbar-dark bg-primary">
      <a class="bg-warning nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <ul>
          @foreach ($topics as $topic)
            <li><a href="categories/{{ $topic->id }}">{{ $topic->topic }}</a></li>
          @endforeach
        </ul>
      </div>

      <a class="navbar-brand" href="/">Blog-Site</a>
      <div>
        <a class="bg-warning nav-link" href="subscribe">Subscribe</a>
      </div>

        
    </nav>
    <div class="container">
      <br>
      <h1>Homepage</h1>
      <div >
        <a href="/categories">Categories</a></li>
          
      </div>
    </div>

    <!-- footer -->
    <footer class="footer bg-warning fixed-bottom text-center">
      <div class="container">
        <span class="text-muted">&copy 2018 Blog-Site</span>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>