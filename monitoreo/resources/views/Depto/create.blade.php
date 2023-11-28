@extends('layout')
@section('title', 'registro de Departamentos')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

			@include('partials.validation-errors')

			<form  class="bg-while py-3 px-4 shadow rounded"
			method="POST"
			action="{{ route('Depto.store') }}">
			<h1 class="display-4">Registro de Departamentos</h1>
			<hr>
			@include('Depto._form', ['btnText'=>'Guardar'])


			</form>
		</div>
	</div>
</div>
@endsection