@extends('layouts.app')

@section('feature')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
 
  <div class="carousel-inner">
   
    <div class="carousel-item active">
    <img src="{{ asset('images/alexis-brown-82988-unsplash.jpg') }}" /> 
      
      <div class="container">
        <div class="carousel-caption">
          <h1>Advanced technology</h1>
          <p>Knight University's campus has the tools you need for all projects&mdash;big and small</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
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
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection

@section('subfeature')
<h2 id="subfeature">Creating life experiences</h2>
<p class="lead">How we help you build connections: </p>
<div class="row subfeature">
  <div class="col-lg-4 col-md-6 text-center">
  <a href="#" aria-label="community"><span class="fas fa-users" aria-hidden="true"></span></a>
    <h3>Community</h3>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4 col-md-6 text-center">
  <a href="#" aria-label="Newspaper"><span class="far fa-newspaper" aria-hidden="true"></span></a>
    <h3>News</h3>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
  <a href="#" aria-label="learning"><span class="fas fa-book" aria-hidden="true"></span></a>
    <h3>Learning</h3>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

@endsection


@section('content')
<div class="row featurette">
  <div class="col-md-5 order-md-2">
    <h2 class="featurette-heading">140+ Areas of Study</h2>
    <p class="lead">Discover </p>
    <a class="btn btn-info" href="#">View all</a>
  </div>
  <div class="offset-top col-md-7 order-md-1">
      <img src="{{ asset('images/alexis-brown-85793-unsplash.jpg') }}" /> 
  </div>
</div>
@endsection


@section('content2')
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