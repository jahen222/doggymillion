@extends('layouts/default')

{{-- Page title --}}
@section('title')
Show
@parent
@stop

{{-- content --}}
@section('content')
  <section class="course-details-area padding100 bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-8 left-side-wrap">
          <!-- Start Single Courses -->
          <div class="single-course big-post">
            <div class="course-thumb">
              {{ Html::image(route('dogimage', ['image' => $dog->image]), 'a picture', array('width' => '820', 'height' => '572')) }}
              <div class="price-sticker">
                <span>{{ $dog->name }}</span>
              </div>
            </div>
            <div class="course-content">
              <h2 class="course-title"><a href="#">{{ $dog->name }}</a></h2>
              <div class="author">Dueño <a href="#">{{ $dog->owner_name }}</a></div>
              <p>{{ $dog->bio }}</p>
            </div>
            <div class="rating">
              <ul>
                <li>
                  <p><span><i class="fa fa-book"></i></span>Correo: {{ $dog->owner_email }}</p>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Single Courses -->
        </div>
        <div class="col-md-4 right-side-wrap">
          <div class="right-side-inner">
            <aside class="widget wg-courses-detail">
              <h3 class="sidebar-title">Detalles</h3>
              <ul class="wg-courses-detail-menu">
                <li><h5>Edad <span>{{ $dog->age }} años</span></h5></li>
                <li><h5>Estado <span>@if( $dog->dead  =='1') Muerto @else Vivo @endif</span></h5></li>
                <li><h5>Genero <span>{{ $dog->gender }}</span></h5></li>
                <li><h5>Raza <span>{{ $dog->race->name }}</span></h5></li>
                <li><h5>País <span>{{ $dog->country->name }}</span></h5></li>
              </ul>
            </aside>
            <div class="form-group">
              <br>
              <a href="{!! route('inicio') !!}" class="btn btn-default">Atras</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop
