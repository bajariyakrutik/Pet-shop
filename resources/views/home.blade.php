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

                    You are logged in!
                </div>
                <div class="panel-body">
                <a href="/products/create" class="btn btn-default">Add New Product</a>
                <a href="/products" class="btn btn-default">Display Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
