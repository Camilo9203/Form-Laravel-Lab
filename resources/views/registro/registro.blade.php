@extends('layouts.principal')

<?php $message=Session::get('message')?>

@if($message == 'store')

<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
			aria-hidden="true">&times;</span></button>
	Usuario creado exitosamente
</div>

@endif


@section('content')


<div class="form-area form-registro">
	{!!Form::open(['action' => 'ControllerCursos@create', 'method' => 'POST'])!!}
	<div class="form-group">
		{!! Form::label('Nombres') !!}
		{!! Form::text('nombre', null, ['class' => 'form-control nombre' , 'required' => 'required',
		'placeholder'=>'Nombres']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Primer Apellido') !!}
		{!! Form::text('primerApellido', null, ['class' => 'form-control primerApellido' , 'required' => 'required',
		'placeholder'=>'Apellidos']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Segundo Apellidos') !!}
		{!! Form::text('segundoApellidos', null, ['class' => 'form-control segundoApellidos' , 'required' => 'required',
		'placeholder'=>'Apellidos']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Correo') !!}
		{!! Form::text('email', null, ['class' => 'form-control email' , 'required' => 'required',
		'placeholder'=>'Digite su correo electronico']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Usuario') !!}
		{!! Form::text('usuario', null, ['class' => 'form-control usuario' , 'required' => 'required',
		'placeholder'=>'Usuario']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Ciudad') !!}
		{!! Form::text('ciudad',null, ['class' => 'form-control ciudad', 'required' => 'required',
		'placeholder'=>'Ciudad']) !!}
	</div>
	<div class="">
		{!! Form::submit('Enviar', ['class' => 'btn btn-primary center-block']) !!}
	</div>
	{!!Form::close()!!}
</div>


@stop