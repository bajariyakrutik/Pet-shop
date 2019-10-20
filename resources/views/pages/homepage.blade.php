@extends('layouts.app')

@section('link')
    <link rel="stylesheet" type="text/css" href="css/home.css">
@endsection
@section('content')
    <div class="container">
        <br><br>
        <div class="jumbotron " >
            <h1 class="display-4">Wagin Tails</h1>
            <p class="lead">This is not just a pet shop, but an orphanage for the animals </p>
        </div>
        <!-- JUMBOTRON ENDS -->
        <div class="row  bd-highlight mb-3 ">
            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/product/Dog"><img  class="img-thumbnail" src="img/dog.jpg" alt="Loading"><p class="text-center">DOGS</p></a></div>
            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/product/Cat"><img  class="img-thumbnail" src="img/cat.jpg" alt="Loading"><p class="text-center">CATS</p></a></div>
            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/product/Rabbit"><img  class="img-thumbnail" src="img/rabbit.jpg" alt="Loading"><p class="text-center">RABBITS</p></a></div>
        
            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/product/Bird"><img  class="img-thumbnail" src="img/birds.jpg" alt="Loading"><p class="text-center">BIRDS</p></a></div>
            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/product/Accessories"><img  class="img-thumbnail" src="img/accessories.jpg" alt="Loading"><p class="text-center">ACCESSORIES</p></a></div>
            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/product/Food"><img  class="img-thumbnail" src="img/food.jpg" alt="Loading"><p class="text-center">FOOD</p></a></div>
        </div>
    </div>

@endsection

@section('footer')
<footer class="page-footer navbar-inverse font-small blue" style="position: relative; left: 0; bottom: 0; width:100%;">
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/">Wagin Tails</a>
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
