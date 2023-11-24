@extends('layout')
@section('title', 'Tabla de fallas')
@section('content')

<div class="container">

	<div class="bg-white p-5 shadow rounded">
		<h1>{{$falla->id}}</h1>		
		<p class="text-secondary">
			{{$falla->description}}</p>
        <p class="text-secondary">
            {{$falla->prioridad}}</p>
		<p class="text-black-50">
			{{$falla->created_at->diffForHumans()}}</p>
		<div class="d-flex justify-content-between
		alinf-items-center">
			<a href="{{route('fallas.index')}}">Regresar</a>
			
@csrf
</form>

			
				
	
			<div class="btn-group btn-group-sm">
				<a class="btn btn-primary"
				href="{{route('falla.edit',$falla)}}">
				Editar</a>
				
				
				
			</div>
			<form  
				method="POST" 
				action="{{ route('falla.destroy', $falla)}}">
				@csrf  @method('DELETE')
				<button>Eliminar</button>
			</form>
			
		</div>

	</div>
</div>

@endsection
