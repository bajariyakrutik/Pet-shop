@extends('layouts.app')

@section('content')
    <a href="/products" class="btn btn-default">Go Back</a>
    <h1>{{$products->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$products->cover_image}}">
    <br><br>
    <div>
        {!!$products->body!!}
    </div>
    <hr>
    <small>Written on {{$products->created_at}} by {{$products->user->name}}</small>
    <hr>
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