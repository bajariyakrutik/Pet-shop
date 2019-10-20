@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(Auth::user()->isAdmin())
                            Welcome Administrator!!
                            <h3>Your Products</h3>
                    </div>
                        <div class="panel-body" style="height: 400px; overflow-y: scroll;">
                            {{-- <a href="/products/create" class="btn btn-default">Add New Product</a>
                            <a href="/products" class="btn btn-default">Display Products</a> --}}
                            @if(count($products) > 0)
                                <table class="table table-striped">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Edit</th>
                                        <th><p class="pull-right">Delete</p></th>
                                    </tr>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->title}}</td>
                                            <td><a href="/products/{{$product->id}}/edit" class="btn btn-default">Edit</a></td>
                                            <td>
                                                {!!Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                    {{Form::hidden('_method', 'DELETE')}}
                                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                {!!Form::close()!!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                                <p>You have no Products</p>
                            @endif
                        </div>
                    @else
                        You are logged in!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
