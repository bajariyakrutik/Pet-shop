@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    {!! Form::open(['action' => ['ProductsController@update', $products->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('category', 'Category')}}
            {{Form::text('category', $products->category, ['class' => 'form-control', 'placeholder' => 'Category'])}}
        </div>
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $products->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::text('price', $products->price, ['class' => 'form-control', 'placeholder' => 'Price'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $products->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection