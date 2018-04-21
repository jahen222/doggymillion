@extends('layouts/default')

{{-- Page title --}}
@section('title')
Raza
@parent
@stop

{{-- content --}}
@section('content')
  <div class="page-header-v1 bg-2 overlay-bg  text-center">
    <div class="page-header-inner">
      <p class="page-category">Raza</p>
      <h2 class="page-title">{{ $race->name }}</h2>
      <div class="breadcrumbs">
      </div>
    </div>
  </div>
  <div class="row padding-t50 bg-white-2">
    <section class="bg-white-2">
      <div class="container">
        <div class="row">
        @foreach($dogs as $dog)
          <div class="col-md-2">
            <div class="card" style="width: 18rem;">
              {{ Html::image(route('dogimage', ['image' => $dog->image]), 'a picture', array('width' => '180', 'height' => '180')) }}
              <div class="card-body">
                <p class="card-text"><a href="{{ route('show', ['id' => $dog->id]) }}">{{ $dog->name }}</a></p>
              </div>
            </div>
          </div>
        @endforeach
        </div>
        <div class="form-group">
          <br>
          <a href="{!! route('paises') !!}" class="btn btn-default">Atras</a>
        </div>
      </div>
    </section>
  </div>
@stop