@extends('layout')
@section('title', 'editar prioridad')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			
			@include('partials.validation-errors')
			<form class="bg-while py-3 px-4 shadow rounded"
			 method="POST"
			  action="{{ route('Prioridad.update',$Prioridad) }}">
			@method('PATCH')
			<h1 class="display-4">Editar Ticket</h1>
			<hr>
			@include('Prioridad._form',['btnText'=>
				'Actualizar'])

			</form>
		</div>
	</div>
</div>
@endsection