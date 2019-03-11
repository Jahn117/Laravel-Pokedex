@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')

	{!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}

		<div class="form-group">
			 {!! Form::label('name', 'Nombre') !!}
			 {!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('avatar', 'Avatar') !!}
			{!! Form::file('avatar') !!}
	</div>
		
		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
	
@endsection
