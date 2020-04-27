@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:center;">
                    <h1>Orders</h1>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                @if(Auth::user()->isAdmin())
                    <div class="panel-body" style="height: 400px; overflow-y: scroll;">
                        {{-- <a href="/products/create" class="btn btn-default">Add New Product</a>
                        <a href="/products" class="btn btn-default">Display Products</a> --}}
                        @if(count($orders) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Address</th>
                                    <th>Product Purchased</th>
                                </tr>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->address}}</td>
                                        <td>
                                            {{-- @foreach($order->cart as $item)
                                            <li class="list-group-item">
                                            <span class="badge">{{$item['price']}}</span>
                                            </li>
                                            @endforeach --}}
                                            {{($order->cart)}}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>Hurray!!!No Orders Pending!!</p>
                        @endif
                    </div>
                @else
                    <div style="text-align: center; color:orangered;">
                        <h2>My Orders</h2>
                    </div>
                    <div class="panel-body" style="height: 400px; overflow-y: scroll;">
                        {{-- <a href="/products/create" class="btn btn-default">Add New Product</a>
                        <a href="/products" class="btn btn-default">Display Products</a> --}}
                        @if(count($orders) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Product Purchased</th>
                                </tr>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{($order->cart)}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You dont have any Orders!!</p>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
