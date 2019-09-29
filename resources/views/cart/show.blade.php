@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Cart</h1></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>Remove Product</th>
                            <th>Sr No.</th>
                            <th>Cover Image</th>
                            <th>Product Name</th>
                            <th>Product Quantity</th>
                            <th>Product Price</th>
                            <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i = 0;
                                $subtotal = 0;
                            ?>
                            @foreach($cartProducts as $cartProduct)
                                <tr>
                                    <td>
                                        <a href="{{ url('/delete-cart-product/'.$cartProduct->rowId)}}" class="btn btn-danger">remove</a>
                                    </td>
                                    <td>{{ ++$i }}</td>
                                    <td><img src="/storage/cover_images/{{$cartProduct->imgurl}}"></td>
                                    <?php
                                    echo $cartProduct->imgurl;
                                    ?>
                                    <td>{{$cartProduct->name}}</td>
                                    <td>
                                        {!! Form::open(['url' => '/update-cart', 'method'=> 'POST']) !!}    
                                        <input class="col-xs-4" type="number" value="{{$cartProduct->qty}}" min="1" name="qty">
                                        <input type="hidden" value="{{$cartProduct->rowId}}" name="rowId">
                                        <input class="btn btn-sm btn-primary" type="submit" value="update">
                                        {!! Form::close() !!}
                                    </td>
                                    <td>${{$cartProduct->price}}</td>
                                    <?php
                                        $total = ($cartProduct->price)*($cartProduct->qty)
                                    ?>
                                    <td>${{$total}}</td>
                                </tr>
                                <?php
                                    $subtotal = $subtotal + $total;
                                ?>
                            @endforeach
                        </tbody>
                    </table>
                    <h3 class="align-right">Total: ${{$subtotal}}</h3>
                    <button type="submit" class="btn btn-success">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
