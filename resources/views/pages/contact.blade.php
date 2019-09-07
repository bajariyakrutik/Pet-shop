@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{$title}}</h1></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Krutik Bajariya</h3><br>krutik.bajriya@somaiya.edu<hr>
                    <h3>Pruthil Gandhi</h3><br>pruthil.g@somaiya.edu
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
