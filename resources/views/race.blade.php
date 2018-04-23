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
  <link rel="stylesheet" href="{{ asset('assets/css/galery.css') }}">
  <div class="row padding-t50 bg-white-2">
    <section class="bg-white-2">
      <div class="container">
        <div class="masonry">
					@foreach($dogs as $dog)
						<div class="item">
							<a href="{{ route('show', ['id' => $dog->id]) }}">{{ Html::image(route('dogimage', ['image' => $dog->image]), 'a picture') }}</a>
						  <a href="{{ route('show', ['id' => $dog->id]) }}" style="color: #8e24aa;"><p style="color: #8e24aa; text-align:center">{{ $dog->name }}</p></a>
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
