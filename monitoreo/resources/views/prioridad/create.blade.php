@extends('layout')
@section('title', 'registro de prioridades')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

			@include('partials.validation-errors')

			<form  class="bg-while py-3 px-4 shadow rounded"
			method="POST"
			action="{{ route('Prioridad.store') }}">
			<h1 class="display-4">Registro de prioridades</h1>
			<hr>
			@include('Prioridad._form', ['btnText'=>'Guardar'])


			</form>
		</div>
	</div>
</div>
@endsection