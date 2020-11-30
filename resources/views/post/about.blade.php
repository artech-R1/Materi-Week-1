@extends('baseBlog')
@section('content')

  <!-- Page Header -->
  
  <header class="masthead" style="background-image: url('img/-baboutg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>{{Auth::name}}</h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      </div>
    </div>
  </div>

  <hr>
@endsection