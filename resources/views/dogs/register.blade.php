@extends('layouts/default')

{{-- Page title --}}
@section('title')
Registro
@parent
@stop

{{-- content --}}
@section('content')
  <link href="{{ asset('assets/css/register.css') }}" rel="stylesheet">

  <section id="contact">
  	<div class="section-content">
  		<h1 class="section-header">Registra <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Tu Mascota</span></h1>
  		<h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
  	</div>
  	{!! Form::open(array('route' => 'dog.store', 'files' => true, 'method' => 'post')) !!}
        {{ csrf_field() }}
    <div class="contact-section">
    	<div class="container">
  			<div class="col-md-6 form-line">
            <div class="form-group">
              <label>Dueño </label>
              {!! Form::text('owner_name', null, ['class' => 'form-control',  'placeholder' => 'Nombre del dueño']) !!}
            </div>
  	  			<div class="form-group">
  	  				<label>Nombre </label>
              {!! Form::text('name', null, ['class' => 'form-control',  'placeholder' => 'Nombre mascota']) !!}
  		  		</div>
            <div class="form-group">
  	  				<label>Imagen </label>
              {!! Form::file('image', null) !!}
  		  		</div>
            <div class="form-group">
  			    	<label>Genero </label>
              {{ Form::select('gender', ['Macho', 'Hembra'], null, ['class' => 'form-control', 'placeholder' => 'Genero mascota']) }}
  			  	</div>
  			  	<div class="form-group">
  			    	<label>Edad </label>
              {!! Form::number('age', null, ['class' => 'form-control', 'placeholder' => 'Edad mascota']) !!}
  	  			</div>
            <div class="form-group">
                <label>A muerto? </label>
                <input name="dead" type="checkbox" value=0>
            </div>
  	  		</div>
  	  		<div class="col-md-6">
            <div class="form-group">
              <label>Email</label>
              {!! Form::text('owner_email', null, ['class' => 'form-control',  'placeholder' => 'Email del dueño']) !!}
            </div>
            <div class="form-group">
  			    	<label>Raza </label>
              {!! Form::select('race_id', $races, null, ['class' => 'form-control', 'placeholder' => 'Raza mascota']) !!}
  			  	</div>
  	  			<div class="form-group">
  	  				<label> Biografía</label>
              {!! Form::textarea('bio', null, ['class' => 'form-control', 'placeholder' => 'Cuéntanos más sobre tu mascota']) !!}
  	  			</div>
            <div class="form-group">
              <label> País</label>
              {!! Form::select('country_id', $countries, null, ['class' => 'form-control', 'placeholder' => 'Seleccione país']) !!}
            </div>
  	  			<div>

  	  				<button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Registrar</button>
  	  			</div>
  			</div>
  	   </div>
    </div>
    {!! Form::close() !!}
  </section>
@stop
