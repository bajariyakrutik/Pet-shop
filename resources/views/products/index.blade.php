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
                        <a href="" class="btn btn-default">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{$products->links()}}
    @else
        <p>No products found</p>
    @endif
@endsection