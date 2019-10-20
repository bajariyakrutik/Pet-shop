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

@section('footer')
<footer class="page-footer navbar-inverse font-small blue" style="position: absolute; left: 0; bottom: 0; width:100%;">
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/">Wagin Tails</a>
    <div class="container-fluid">
      <p class="text-muted">
        <a href="https://www.facebook.com" style="font-size:30px;" ><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.twitter.com" style="font-size:30px;" > <i class="fab fa-twitter-square"></i></a>
        <a href="https://in.linkedin.com" style="font-size:30px;"> <i class="fab fa-linkedin"></i></a>
        <a href="https://www.instagram.com/?hl=en"style="font-size:30px;">  <i class="fab fa-instagram"></i></a>
        <a href="https://www.reddit.com"style="font-size:30px;">  <i class="fab fa-reddit"></i></a>
      </p>
    </div>
  </div>
</footer>    
@endsection
