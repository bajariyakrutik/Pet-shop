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
            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/products"><img  class="img-thumbnail" src="img/dog.jpg" alt="Loading">DOG</a></div>
            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/products"><img  class="img-thumbnail" src="img/cat.jpg" alt="Loading">CAT</a></div>
            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/products"><img  class="img-thumbnail" src="img/rabbit.jpg" alt="Loading">RABBIT</a></div>
        
            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/products"><img  class="img-thumbnail" src="img/birds.jpg" alt="Loading">BIRDS</a></div>
            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/products"><img  class="img-thumbnail" src="img/accessories.jpg" alt="Loading">ACCESSORIES</a></div>
            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/products"><img  class="img-thumbnail" src="img/food.jpg" alt="Loading">FOODS</a></div>
        </div>
    </div>
@endsection
