@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1><?php echo $title; ?></h1></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4>We are not just a shop but a community or a group were we take care of the animals and also accept the injured. The people can adopt either any of them and if they do not require we accept them back gladly, but just dont throw them away.</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
