@extends('layout')
@section('title', 'Fallas registradas')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
	<div class="d-flex justify-content-between aligm-items-center mb-3">
		<h1 class="display-4 mb-0">Fallas registradas</h1>
	</div>
	<form method="POST" action="/falla/search">
	@csrf
	<a  class="btn btn-primary"
	href="{{route('falla.show',$)}}">
	Ver Fallas
    </a>
	<a  class="btn btn-primary"
			href="{{route('')}}">
			Crear ticket de cierre
    </a>
			


</div>
@endsection