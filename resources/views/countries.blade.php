@extends('layouts/default')

{{-- Page title --}}
@section('title')
Paises
@parent
@stop

{{-- content --}}
@section('content') 
  <div class="page-header-v1 bg-1 overlay-bg  text-center">
    <div class="page-header-inner">
      <p class="page-category">Lista de canes</p>
      <h2 class="page-title">POR PAÍSES</h2>
      <div class="breadcrumbs">
      </div>
    </div>
  </div>
  <div class="row padding-t50 bg-white-2">
    <section class="bg-white-2">
      <div class="container">
        <div class="list-group">
          @foreach($countries as $country)
            @if(COUNT($country->dogs)>=1)
              <a href="{{ route('pais', ['id' => $country->id]) }}" class="list-group-item">{{ $country->name }} ({{ COUNT($country->dogs) }})</a>
            @endif
          @endforeach
        </div>
        <div class="form-group">
          <br>
          <a href="{!! route('inicio') !!}" class="btn btn-default">Atras</a>
        </div>
      </div>
    </section>
  </div>
@stop
