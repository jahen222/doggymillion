@extends('layouts/default')

{{-- Page title --}}
@section('title')
Razas
@parent
@stop

{{-- content --}}
@section('content')
  <div class="page-header-v1 bg-1 overlay-bg  text-center">
    <div class="page-header-inner">
      <p class="page-category">Lista de canes</p>
      <h2 class="page-title">POR RAZAS</h2>
      <div class="breadcrumbs">
      </div>
    </div>
  </div>
  <div class="row padding-t50 bg-white-2">
    <section class="bg-white-2">
      <div class="container">
        <div class="list-group">
          @foreach($races as $race)
            @if(COUNT($race->dogs)>=1)
              <a href="{{ route('raza', ['id' => $race->id]) }}" class="list-group-item">{{ $race->name }} ({{ COUNT($race->dogs) }})</a>
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
