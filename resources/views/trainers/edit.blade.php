@extends('layouts.app')

@section('title', 'Trainers Edit')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true]) !!}

		@include('trainers.form')
		
		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

@endsection