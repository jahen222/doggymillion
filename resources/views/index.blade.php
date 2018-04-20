@extends('layouts/default')

{{-- Page title --}}
@section('title')
Inicio
@parent
@stop

{{-- content --}}
@section('content')
	@include('flash::message')
	<!-- Start Slider Area -->
	<section class="slider-area slide-v2">
		<div class="bend niceties preview-2">
			<div id="ensign-nivoslider" class="slides">
				<img src="{{ asset('assets/Imagenes/slide1.jpg') }}" alt="" title="#slider-direction-1"  />
				<img src="{{ asset('assets/Imagenes/slide2.jpg') }}" alt="" title="#slider-direction-2"  />
			</div>
			<!-- direction 1 -->
			<div id="slider-direction-1" class="slider-direction slider-one">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="slider-content">
								<!-- layer 1 -->
								<div class="layer-1-1">
									<h5 class="title1">The Best Education Theme</h5>
								</div>
								<!-- layer 2 -->
								<div class="layer-1-2">
									<h5 id="word" class="title2"><span>feed</span> <span>your</span> <span>knowledge</span></h5>
								</div>
								<!-- layer 3 -->
								<div class="layer-1-3">
									<p class="title3">Cras bibendum mi nec mollis auctor. Proin posuere, erat et vestibulum commodo, <br />libero odio elementum ipsum, et rutrum eros purus at ante.</p>
								</div>
								<!-- layer 4 -->
								<div class="layer-1-4">
									<a href="{{ route('dog.register') }}" class="estut-btn active hidden-sm hidden-xs">Registra tu Perro</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- direction 2 -->
			<div id="slider-direction-2" class="slider-direction slider-two">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="slider-content">
								<!-- layer 1 -->
								<div class="layer-2-1">
									<h5 class="title1">The Best Education Theme</h5>
								</div>
								<!-- layer 2 -->
								<div class="layer-2-2">
									<h5 class="title2">online learning</h5>
								</div>
								<!-- layer 3 -->
								<div class="layer-2-3">
									<p class="title3">Cras bibendum mi nec mollis auctor. Proin posuere, erat et vestibulum commodo, <br />libero odio elementum ipsum, et rutrum eros purus at ante.</p>
								</div>
								<!-- layer 4 -->
								<div class="layer-2-4">
									<a href="{{ route('dog.register') }}" class="estut-btn active hidden-sm hidden-xs">Registra tu Perro</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Slider Area -->
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
	<!-- Start service v2 Area -->
	<section class="service-area service-v2 bg-white-2">
		<div class="container">
		  <!-- Start Counter Area -->
			<div class="row padding-t50">
				<div class="col-md-12 text-center">
					<div class="counter-list">
						<div class="s-counter">
							<div class="counter-box">
								<h2 class="counter">1000000</h2>
								<h5 class="count-title">QUEREMOS LLEGAR</h5>
							</div>
						</div>
						<div class="s-counter">
							<div class="counter-box">
								<h2 class="counter">{{count($dogs)}}</h2>
								<h5 class="count-title">REGISTRADOS</h5>
							</div>
						</div>
						<div class="s-counter">
							<div class="counter-box">
								<h2 class="counter">{{1000000-count($dogs)}}</h2>
								<h5 class="count-title">NOS FALTAN</h5>
							</div>
						</div>
						<div class="s-counter">
							<div class="counter-box">
								<h2 class="counter">1</h2>
								<h5 class="count-title">HAZ DE TU MASCOTA</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Counter Area -->
		</div>
	</section>
	<!-- End service v2 Area -->

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
