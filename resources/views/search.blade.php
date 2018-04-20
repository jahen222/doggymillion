@extends('layouts/default')

{{-- Page title --}}
@section('title')
Buscar
@parent
@stop

{{-- content --}}
@section('content')
	@include('flash::message')
  <!-- Start Search Area -->
	<section class="search-area v2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="search-inner fix">
						<div class="search-title"><h4>Buscar</h4></div>
						<div class="search-form-3">
							<form action="{{ route('search') }}">
								<select>
									<option value="Nombre">Por nombre</option>
									<option value="Raza">Por raza</option>
									<option value="País">Por país</option>
								</select>
								<input name="search" type="text" placeholder="Texto"/>
								<input type="submit" value="Buscar" class="estut-btn-v2"/>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="search-area-border"></div>
	<!-- End Search Area -->
  <div class="row padding-t50 bg-white-2">
		<section class="bg-white-2">
			<div class="container">
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
		</section>
	</div>
@stop
