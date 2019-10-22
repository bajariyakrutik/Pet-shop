@extends('layouts.app')

@section('content')
        <a href="/product/{{$products->category}}" class="btn btn-default">Go Back</a>
        <h1>{{$products->title}}</h1>
        <img style="width:100%" src="/storage/cover_images/{{$products->cover_image}}">
        <br><br>
        <hr>
        <h1>Price: ₹{{$products->price}}</h1>
        <hr>
        {!! Form::open(['url' => '/cart-add', 'method' => 'POST']) !!}
        <input type="hidden" name="productId" value="{{$products->id}}">
        <input type="hidden" name="qty" value="1">
        <button type="submit" class="btn btn-success">Add to Cart</button>
        {!! Form::close() !!}
        <hr>
        <div>
            {!!$products->body!!}
        </div>
        @if(!Auth::guest())
            @if(Auth::user()->id == $products->user_id)
                <a href="/products/{{$products->id}}/edit" class="btn btn-default">Edit</a>

                {!!Form::open(['action' => ['ProductsController@destroy', $products->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
@endsection