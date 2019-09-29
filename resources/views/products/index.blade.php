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