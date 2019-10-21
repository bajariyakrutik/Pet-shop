@extends('layouts.app')

@section('link')
<style>

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
        display: block;
        margin-bottom: 20px;
      }
    }
    
    .gmap_canvas{
        border : 1px solid black;
    }
    
    
    .mapouter{
        margin: auto;
        text-align:right;
        padding: 10px;
        height:355px;
        width:100%;
    }
    
    .gmap_canvas {
        overflow:hidden;
        height:355px;
        width:100%;
    }
</style>    
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1><?php echo $title; ?></h1></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4>We are not just a shop but a community or a group were we take care of the animals and also accept the injured. The people can adopt either any of them and if they do not require we accept them back gladly, but just dont throw them away.</h4>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="355" id="gmap_canvas" src="https://maps.google.com/maps?q=Somaiya%20Ayurvihar%20Complex%20Eastern%20Express%20Highway%20Near%20Everard%20Nagar%2C%20Sion%20East%2C%20Sion%2C%20Mumbai%2C%20Maharashtra%20400022&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="1" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<footer class="page-footer navbar-inverse font-small blue" style="position: relative; left: 0; bottom: 0; width:100%;">
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="/">Wagin Tails</a>
    <div class="container-fluid">
      <p class="text-muted">
        <a href="https://www.facebook.com" style="font-size:30px;" ><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.twitter.com" style="font-size:30px;" > <i class="fab fa-twitter-square"></i></a>
        <a href="https://in.linkedin.com" style="font-size:30px;"> <i class="fab fa-linkedin"></i></a>
        <a href="https://www.instagram.com/?hl=en"style="font-size:30px;">  <i class="fab fa-instagram"></i></a>
        <a href="https://www.reddit.com"style="font-size:30px;">  <i class="fab fa-reddit"></i></a>
      </p>
    </div>
  </div>
</footer>
@endsection