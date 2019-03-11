@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')

	<div class="container">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</div>

@endsection