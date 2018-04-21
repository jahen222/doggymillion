@extends('layouts/default')

{{-- Page title --}}
@section('title')
Nosotros
@parent
@stop

{{-- content --}}
@section('content')
  <!--Start Page Header -->
  <!--Start Page Header -->
  <div class="page-content">
    <div class="page-header-v1 bg-1 overlay-bg  text-center">
      <div class="page-header-inner">
        <p class="page-category">Acerca de</p>
        <h2 class="page-title">Nosotros</h2>
        <div class="breadcrumbs">
        </div>
      </div>
    </div>
    <!--Start Our school area -->
    <div class="row padding-t50">
      <section class="our-school-area">
        <div class="container">
          <div class="row">
            <div class="our-school-inner">
              <div class="col-md-6">
                <div class="school-info padding-t50">
                  <h2 class="section-title">NUESTRA INTENCION</h2>
                  <p align="justify">Somos una empresa amante de los perros! Que buscamos a través de nuestra web fomentar la buena convivencia y Unión  de propietarios y mascotas además de crear una base de datos perpetua  de 1 millón de fotos de nuestros perritos en la red Internet! Por sólo 1$ Por cada foto.</p>

                  <p align="justify">Nuestra visión es formar una comunidad global de ayuda y conocimiento enfocado a nuestras mascotas caninas teniendo claro que son parte de nuestra familia.</p>

                  <p align="justify">Una vez llena la base de datos de nuestra web donaremos parte de los fondos a 1 asociacion protectora de animales del país que mayor cantidad de miembros tengan dentro de nuestro sitio, para poder ayudar a perritos en situación de calle.</p>

                  <p align="justify">Además al completar nuestra base de datos también  donaremos 50000 usd a uno de nuestros miembros elegido al azar por nuestra comunidad de usuarios! </p>
                  <br />
                  <h3>Que esperas?</h3>
                  <br />
                  <a href="{{ route('dog.register') }}" class="btn btn-success" style="background-color: #07b193; border-color:#07b193;">Registra tu Perro</a>
                  <br />
                  <br />
                  <a href="{!! route('inicio') !!}" class="btn btn-default">Atras</a>

                </div>
              </div>
              <div class="col-md-6">
                <div class="school-pic">
                  <img src="{{ asset('assets/Imagenes/img1.jpg') }}" alt="school image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!--End Our school area -->
  </div>
@stop
