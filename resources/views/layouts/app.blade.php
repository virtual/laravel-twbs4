<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="theme-color" content="#24305e">
      <title>Knight University</title>

      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
      <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
      <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
      
      <meta name="description" content="Voted best fake small-town university in 2014, Knight University has the education you are looking for to take your skills to the next level." />
      <meta name="keywords" content="higher education, website" />
      <meta name="author" content="Jeanine Schoessler, satinflame design">
      <meta property="og:title" content="Knight Unviersity" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="http://virtual-laravel-twbs4.herokuapp.com/images/thumbnail.png" />
      <meta property="og:url" content="http://virtual-laravel-twbs4.herokuapp.com/" />
      <meta property="og:site_name" content="Yellowstone Odyssey" />
      <meta property="og:description" content="Voted best fake small-town university in 2014, Knight University has the education you are looking for to take your skills to the next level."/>
      <meta property="og:locale" content="en_us" />
      <link rel="image_src" href="http://virtual-laravel-twbs4.herokuapp.com/images/thumbnail.png" />

      <noscript>
      <style>
      .navbar-collapse, .collapse, .dropdown-menu { display:block !important}
      </style></noscript>
  </head>
  <body>
   
    <header>
    <div id="skiptocontent"><a href="#maincontent" title="Skip Main Navigation">Skip Main Navigation</a></div>
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
       
        
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
      
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
      
           
          </ul>

 

          <form id="searchform" class="form-inline mt-2 mt-md-0"  method="get" action="http://www.satinflame.com/search/" class="form-horizontal" role="search">
            <input type="hidden" name="cx" value="">
            <input type="hidden" name="cof" value="FORID:11">

            <div class="searchbox input-group">
              <input type="text" name="q" class="form-control" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button type="submit" class="searchicon btn btn-primary"><span class="fa fa-search"><span class="sr-only">Search</span></span></button>
              </div>
            </div>
          </form> 
        </div>
      </nav>



<nav class="nav nav-underline megamenu navbar-expand-sm navmenu">
  
    <div class="container">

     <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span aria-hidden class="fas fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul>
          <li><a href="#">Apply &amp; Register</a></li>
          <li class="dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Areas of Study</a>
            <div class="dropdown-menu">
              <a href="#">Professional Degrees</a>
              <a href="#">Transfer Degrees</a>
              <a href="#">Certificates</a>
            </div>
          </li>
          <li><a href="#">Campus Life</a></li>
          <li><a href="#">About</a></li>  
        </ul>
</div>
        </div>
      </nav> 
       

    </header>

      <main id="maincontent" role="main">

     <!-- feature area --> 
     @yield('feature')
     
     
     
  


      @if(View::hasSection('subfeature'))
        <div class="padded">
          <div class="container">
          @yield('subfeature')
          </div><!-- /.container -->
        </div>
      @endif 

      @if(View::hasSection('subfeature2'))
        <div class="padded bg-primary text-light">
          <div class="container">
            @yield('subfeature2')
          </div><!-- /.container -->
        </div>
      @endif

      <div class="padded bg-white">
        <div class="container">
          @yield('content')
        </div><!-- /.container -->
      </div>
      
      <div class="padded bg-white">
        <div class="container">
          @yield('spotlight')
        </div><!-- /.container -->
      </div>

      <div>
        <div class="feature-grid">
          @yield('grid')
        </div><!-- /.container -->
      </div>
  

      <!-- FOOTER -->
    <div class="padded bg-info">
      <div class="container">
        <form action="" method="post">
          <h2>Get more information</h2>
          <div class="row">
            <div class="col-md-4 mb-3">
                Sign up for more information about our campus, offerings and events.
              </div>
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <label for="firstName">First name</label>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <label for="lastName">Last name</label>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <button type="submit" class="btn btn-secondary">Sign up</button>
              </div>
            </div> 
        </form>
      </div><!-- /.container -->
    </div>
    </main>
   

      <footer class="bg-dark text-white">
      <div class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          
          <small class="d-block mb-3 text-muted">© 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a href="#">Cool stuff</a></li>
            <li><a href="#">Random feature</a></li>
            <li><a href="#">Team feature</a></li>
            <li><a href="#">Stuff for developers</a></li>
            <li><a href="#">Another one</a></li>
            <li><a href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a href="#">Resource</a></li>
            <li><a href="#">Resource name</a></li>
            <li><a href="#">Another resource</a></li>
            <li><a href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a href="#">Business</a></li>
            <li><a href="#">Education</a></li>
            <li><a href="#">Government</a></li>
            <li><a href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a href="#">Team</a></li>
            <li><a href="#">Locations</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Terms</a></li>
          </ul>
        </div>
      </div> 
      </footer>
        
    </body>
 
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script>
    $(function() {
      slider = $('.slick-slider.carousel');
      slickOptions = {
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true, 
        speed: 1000,
        autoplaySpeed: 8000,
        slidesToShow: 1,
        slidesToScroll: 2,
        centerMode: true,
        variableWidth: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          }, {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          }, {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      }
      slider.slick(slickOptions);
      $('.slick-slider .caption').each(function() {
        var $slide = $(this).parent();
        
        // Add aria-describedby to slider dots
        if (slickOptions.dots) {
          if ($slide.attr('aria-describedby') != undefined) { // ignore extra/cloned slides
            console.log($slide.attr('aria-describedby'))
            $(this).attr('id', $slide.attr('aria-describedby'));
          }
        }
      });

     
      // $('.slick-slider .slick-active').find('video').get(0).play();
      // slider.on('afterChange', function(event, slick, currentSlide, nextSlide) {
      //   if ($('.slick-slider .slick-active').hasClass('vid')) {
      //     $('.slick-slider .slick-active').find('video').get(0).play();
      //   }
      // });

       contentfeatureslider = $('.slick-slider.content-feature');
       contentfeatureOptions = {
        arrows: true,
        infinite: true
      };
      contentfeatureslider.slick({contentfeatureOptions});
    });

    </script>
</html>
