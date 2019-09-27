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
