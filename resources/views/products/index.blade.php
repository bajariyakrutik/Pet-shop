@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    @if(count($products) > 0)
        @foreach($products as $product)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$product->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/products/{{$product->id}}">{{$product->title}}</a></h3>
                        <h4>Price: ${{$product->price}}</h4>
                        {!! Form::open(['url' => '/cart-add', 'method' => 'POST']) !!}
                        <input type="hidden" name="productId" value="{{$product->id}}">
                        <input type="hidden" name="qty" value="1">
                        <button type="submit" class="btn btn-success">Add to Cart</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        @endforeach
        {{$products->links()}}
    @else
        <p>No products found</p>
    @endif
@endsection

@section('footer')
<footer class="page-footer navbar-inverse font-small blue" style="position: static; left: 0; bottom: 0; width:100%;">
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