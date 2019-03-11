@extends('layouts.app')

@section('title', 'Trainers Edit')

@section('content')

	<form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
		@method('PUT')
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="name" value="{{$trainer->name}}" class="form-control">
		</div>
		<div class="form-group">
			<label>Avatar</label>
			<input type="file" name="avatar">
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>	
		@csrf			
	</form>

@endsection