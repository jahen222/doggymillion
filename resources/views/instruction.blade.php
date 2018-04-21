@extends('layouts/default')

{{-- Page title --}}
@section('title')
Instrcciones
@parent
@stop

{{-- content --}}
@section('content')
<!--Start Page Content -->
<div class="page-content">
  <!--Start Page Header -->
  <div class="page-header-v1 bg-2 overlay-bg  text-center">
    <div class="page-header-inner">
      <p class="page-category">Instrucciones</p>
      <h2 class="page-title">Sigue los pasos</h2>
      <div class="breadcrumbs">
      </div>
    </div>
  </div>
  <!--End Page Header -->
  <!--Start Blog Post Area -->
  <div class="latest-blog-area blog-page padding50 bg-white-2">
    <div class="container">
      <div class="row">
        <div class="blog-post-inner">
          <!--Start Single Blog  -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hidden-sm">
            <div class="single-blog text-left bg-white">
              <div class="blog-info text-left">
                <span class="blog-category c-green">Paso 1</span>
                <h3 class="blog-title"><a href="#">Ingresa a nuestro sitio.</a></h3>
              </div>
            </div>
          </div>
          <!--End Single Blog  -->
          <!--Start Single Blog  -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hidden-sm">
            <div class="single-blog text-left bg-white">
              <div class="blog-info text-left">
                <span class="blog-category c-green">Paso 2</span>
                <h3 class="blog-title"><a href="#">Llena el formulario para el registro.</a></h3>
              </div>
            </div>
          </div>
          <!--End Single Blog  -->
          <!--Start Single Blog  -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hidden-sm">
            <div class="single-blog text-left bg-white">
              <div class="blog-info text-left">
                <span class="blog-category c-green">Paso 3</span>
                <h3 class="blog-title"><a href="#">Pública y paga 1$.</a></h3>
              </div>
            </div>
          </div>
          <!--End Single Blog  -->

        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="load-more-btn">
            <a href="{{ route('dog.register') }}" class="btn btn-success" style="background-color: #07b193; border-color:#07b193;">Registra tu Perro</a>
            <br />
            <br />
            <br />
            <a href="{!! route('inicio') !!}" class="btn btn-default">Atras</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End Blog Post Area -->
</div>
@stop
