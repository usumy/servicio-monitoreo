@extends('layout')
@section('title', 'Visualización de la Prioridad/'.$Prioridad->id)
@section('content')

<div class="container">

	<div class="bg-white p-5 shadow rounded">
		<h1>{{$Prioridad->id}}</h1>		
		<p class="text-secondary">
			{{$Prioridad['descripcion']}}</p>
		<p class="text-black-50">
			{{$Prioridad->created_at->diffForHumans()}}</p>
		<div class="d-flex justify-content-between
		alinf-items-center">
			<a href="{{route('Prioridad.index')}}">Regresar</a>
			
@csrf
</form>

			
				
	
			<div class="btn-group btn-group-sm">
				<a class="btn btn-primary"
				href="{{route('Prioridad.edit',$Prioridad)}}">
				Editar</a>
				
				
				
			</div>
			<form  
				method="POST" 
				action="{{ route('Prioridad.destroy', $Prioridad)}}">
				@csrf  @method('DELETE')
				<button>Eliminar</button>
			</form>
			
		</div>

	</div>
</div>

@endsection
