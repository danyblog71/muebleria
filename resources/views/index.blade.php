@extends('app') 
@section('page-title', trans('words.acd')) 
@section('page-css')
@stop
@section('breadcrumbs')
@section('content')
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li da  ta-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div align="center" class="carousel-item active">
        <img src="{{asset('assets/img/carrusel-1.jpg')}}" width="800" height="600" alt="Los Angeles">
      </div>
      <div align="center" class="carousel-item">
        <img src="{{asset('assets/img/carrusel-2.jpg')}}" width="800" height="600" alt="Chicago">
      </div>
      <div align="center" class="carousel-item">
        <img src="{{asset('assets/img/carrusel-3.jpg')}}" width="800" height="600" alt="New York">
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
</div>

<section id="about">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 mx-auto">
              <h2 align="center">Destacado!</h2>
          </div>
          <div class="row">
            <div class="col-md-4 mb-5">
              <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn btn-primary">Find Out More!</a>
                  <a href="#" class="btn btn-primary"> @lang('app.details') </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn btn-primary">Find Out More!</a>
                  <a href="#" class="btn btn-primary"> @lang('app.details') </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn btn-primary">Find Out More!</a>
                  <a href="#" class="btn btn-primary"> @lang('app.details') </a>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</section>

@stop