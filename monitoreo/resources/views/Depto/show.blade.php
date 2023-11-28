@extends('layout')
@section('title', 'Visualización de la Depto/'.$Depto->id)
@section('content')

<div class="container">

	<div class="bg-white p-5 shadow rounded">
		<h1>{{$Depto->id}}</h1>		
		<p class="text-secondary">
			{{$Depto['descripcion']}}</p>
		<p class="text-black-50">
			{{$Depto->created_at->diffForHumans()}}</p>
		<div class="d-flex justify-content-between
		alinf-items-center">
			<a href="{{route('Depto.index')}}">Regresar</a>
			
@csrf
</form>

			
				
	
			<div class="btn-group btn-group-sm">
				<a class="btn btn-primary"
				href="{{route('Depto.edit',$Depto)}}">
				Editar</a>
				
				
				
			</div>
			<form  
				method="POST" 
				action="{{ route('Depto.destroy', $Depto)}}">
				@csrf  @method('DELETE')
				<button>Eliminar</button>
			</form>
			
		</div>

	</div>
</div>

@endsection
