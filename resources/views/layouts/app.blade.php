<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Knight University</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    </head>
    <body>
   
    <header>

    <nav class="topnav nav nav-underline navbar-dark bg-dark">
    <div class="container d-flex justify-content-between align-items-center w-100">
 <ul>
        <li><a class="nav-link" href="#" aria-label="facebook"><span class="fab fa-facebook" aria-hidden="true"></span></a></li>
        <li><a class="nav-link" href="#" aria-label="twitter"><span class="fab fa-twitter" aria-hidden="true"></span></a></li>
        <li><a class="nav-link" href="#" aria-label="linkedin"><span class="fab fa-linkedin" aria-hidden="true"></span></a></li>
        <li><a class="nav-link" href="#" aria-label="youtube"><span class="fab fa-youtube" aria-hidden="true"></span></a></li>
        </ul>
        <ul>
        <li><a class="nav-link" href="#">Students</a></li> 
        <li><a class="nav-link" href="#">Faculty / Staff</a></li> 
        </ul>
        </div>
      </nav> 
      <nav class="navbar navbar-expand-sm navmenu">
      <div class="container">
        <a class="navbar-brand" href="/"><span class="fas fa-chess-knight"></span> Knight<br/>University</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span aria-hidden class="fas fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
      
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
      
           
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
          </form>
        </div>
        </div>
      </nav>
    </header>

    <main role="main">

     <!-- feature area --> 
     @yield('feature')

      <div class="container">

      @yield('content')

      <hr class="featurette-divider">
      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>
        
    </body>
 
    <script src="{{ asset('js/app.js') }}"></script>
</html>
