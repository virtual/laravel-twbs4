@extends('layouts.app')

@section('feature')
<section class="variable slick-slider">
    <div>
      <img src="http://placehold.it/350x300?text=1">
    </div>
    <div>
      <img src="http://placehold.it/200x300?text=2">
    </div>
    <div>
      <img src="http://placehold.it/100x300?text=3">
    </div>
    <div>
      <img src="http://placehold.it/200x300?text=4">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=5">
    </div>
    <div>
      <img src="http://placehold.it/300x300?text=6">
    </div>
  </section>
@endsection

@section('featureold')
<div id="feature-carousel" class="carousel slide" data-ride="carousel">
 
  <div class="carousel-inner">
   
    <div class="carousel-item active">
    <img src="{{ asset('images/alexis-brown-82988-unsplash.jpg') }}" /> 
      
      <div class="container">
        <div class="carousel-caption">
          <h1>Advanced technology</h1>
          <p>Knight University's campus has the tools you need for all projects&mdash;big and small</p>
          <p>
            <a href="#" class="btn btn-secondary my-2">Discover Resources</a>
            <a href="#" class="btn btn-primary my-2">Ask a Question</a>
          </p> 
        </div>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{ asset('images/stefan-stefancik-257625-unsplash.jpg') }}" /> 
      <div class="container">
        <div class="carousel-caption">
          <h1>Follow your passion</h1>
          <p>With organizations focused on culture, diversity, sports, and more, make a difference in your community with fellow students</p>
          <p><a class="btn btn-lg btn-secondary" href="#" role="button">Browse clubs</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#feature-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#feature-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="text-center action-fa">
  <a href="#subfeature" class="scrollable"><span class="fas fa-arrow-circle-down"></span></a>
</div>
@endsection

@section('subfeature')
<h2 id="subfeature">Creating life experiences</h2>
<p class="lead">How we help you build connections: </p>
<div class="row subfeature">
  <div class="col-lg-4 col-md-6">
  <a href="#" aria-label="community"><span class="fas fa-users" aria-hidden="true"></span></a>
    <h3>Community</h3>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    <p class="text-center"><a class="btn btn-primary btn-sm" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4 col-md-6">
  <a href="#" aria-label="Newspaper"><span class="far fa-newspaper" aria-hidden="true"></span></a>
    <h3>News</h3>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    <p class="text-center"><a class="btn btn-primary btn-sm" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 ">
  <a href="#" aria-label="learning"><span class="fas fa-book" aria-hidden="true"></span></a>
    <h3>Learning</h3>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p class="text-center"><a class="btn btn-primary btn-sm" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

@endsection


@section('subfeature2')
<div class="row featurette">
  
  <div class="offset-top col-md-5 order-md-1">
      <img src="{{ asset('images/alexis-brown-85793-unsplash.jpg') }}" /> 
  </div>
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">140+ Areas of Study</h2>
    <p class="lead">With fields including technology and science to history and arts, you're sure to be inspired from your education at Knight University.  </p>
    <a class="btn btn-secondary" href="#">View all areas of study</a>
  </div>
</div>
@endsection

@section('content')
<h2 class="featurette-heading">Latest News and Events</h2>
<div class="row featurette">
  <div class="col-md-6">
    <h3>Why Knight University?</h3>
    <p>All our courses are rigorously audited to ensure only the best education is provided to our students. </p>
    <ul>
      <li><a href="">Lorem  velit.</a></li>
      <li><a href="">Eaque  dicta officia eveniet! Eius earum rem id.</a></li>
      <li><a href="">Exercit  uptate at!</a></li>
      <li><a href="">Unde modi, f dit laboriosam?</a></li>
      <li><a href="">Quidem upti.</a></li>
    </ul>
  </div>
  <div class="col-md-6">
    <h3>Over 300,000 Graduates</h3>
    <p>sit amet consectetur adipisicing elit. Vero at laboriosam quo, doloremque dolore distinctio iusto labore tenetur, nostrum sunt eaque porro! Aut tenetur nulla nam fugit blanditiis consequuntur enim?</p>
    <ul>
      <li><a href="">Lorem  velit.</a></li>
      <li><a href="">Eaque  dicta officia eveniet! Eius earum rem id.</a></li>
      <li><a href="">Exercit  uptate at!</a></li>
      <li><a href="">Unde modi, f dit laboriosam?</a></li>
      <li><a href="">Quidem upti.</a></li>
    </ul>
  </div>
</div>
@endsection

@section('randomfeatures')
<h2 class="featurette-heading">Latest News and Events</h2>
<div class="row featurette">
  <div class="col-md-7">
    
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5">
  <img alt="students study" src="{{ asset('images/alexis-brown-82988-unsplash.jpg') }}" /> 
  
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5 order-md-1">
      <img src="{{ asset('images/alexis-brown-85793-unsplash.jpg') }}" /> 
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5">
    <img src="{{ asset('images/stefan-stefancik-257625-unsplash.jpg') }}" /> 
  </div>
</div>
@endsection

@section('spotlight')
<h2>News and Events</h2>
<div id="spotlight" class="carousel slide" data-ride="carousel">
 
  <div class="carousel-inner">
   
    <div class="carousel-item active">
      <div class="row featurette">
        <div class="col-md-7">
          <h3 class="featurette-heading">Students make a difference <span class="text-muted">Jan 2018</span></h3>
          <p class="lead">Business students assist in preparing taxes for low-income families. <a href="">Read more</a></p>
        </div>
        <div class="col-md-5">
          <img src="{{ asset('images/stefan-stefancik-257625-unsplash.jpg') }}" /> 
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h3 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h3>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="{{ asset('images/alexis-brown-85793-unsplash.jpg') }}" /> 
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#spotlight" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#spotlight" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
   
</div>
@endsection



@section('grid')
<div class="row no-gutters">
  
<div class="col-md-3 col-sm-6" style="background-image: url({{ asset('images/alexis-brown-85793-unsplash.jpg') }})">
  <div class="overlay"></div>
  <div class="video-box">
    <div class="video-play"><p><a data-fancybox href="https://www.youtube.com/watch?v=71U_qjHLM58" title="Play video"><span aria-hidden="true" class="fas fa-play"></span><span class="sr-only">Play</span></a></p></div>
    <div class="video-desc"><p><a data-fancybox href="https://www.youtube.com/watch?v=71U_qjHLM58">Inspiration: creativity in education</a> <small>Graphic Design, GPHY 210</small></p></div>
  </div>
</div>
  
<div class="col-md-3 col-sm-6" style="background-image: url({{ asset('images/stefan-stefancik-257625-unsplash.jpg') }})">
  <div class="overlay"></div>
  <div class="video-box">
    <div class="video-play"><p><a data-fancybox href="https://www.youtube.com/watch?v=ZAd9IdF5tKI" title="Play video"><span aria-hidden="true" class="fas fa-play"></span><span class="sr-only">Play</span></a></p></div>
    <div class="video-desc"><p><a data-fancybox href="https://www.youtube.com/watch?v=ZAd9IdF5tKI">Student volunteers provide free tax assistance</a> <small>Business Club, School of Business</small></p></div>
  </div>
</div>

<div class="col-md-3 col-sm-6" style="background-image: url({{ asset('images/alexis-brown-82988-unsplash.jpg') }})">
  <div class="overlay"></div>
  <div class="video-box">
    <div class="video-play"><p><a data-fancybox href="https://www.youtube.com/watch?v=-0nfNw6SS54" title="Play video"><span aria-hidden="true" class="fas fa-play"></span><span class="sr-only">Play</span></a></p></div>
    <div class="video-desc"><p><a data-fancybox href="https://www.youtube.com/watch?v=-0nfNw6SS54">Tips for for effective team leadership</a> <small>Office of Student Success</small></p></div>
  </div>
</div>
 
  
  <div class="col-md-3 col-sm-6 bg-primary text-white padded">
      <h4>Follow our students' journeys</h4>
      <p><a href="#">Video library ›</a></p>
  </div>

</div>
@endsection