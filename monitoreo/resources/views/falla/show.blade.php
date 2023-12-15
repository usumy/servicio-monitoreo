@extends('layout')
@section('title', 'Visualización de la falla/'.$falla->id)
@section('content')

<div class="container">
<form>	
	<div class="bg-white p-5 shadow rounded">
		<h1>{{$falla->id}}</h1>		
		<p class="text-primary  size=7"> descripción de la falla: 
			{{$falla->description}}</p>
        <p class="text-primary  size=7"> Prioridad de la Falla: 
            {{ $falla->prioridad_id }} 
			@if ($falla->prioridad)
				{{ $falla->prioridadc }}
			@else
				<!-- Manejo cuando la relación prioridad no está definida -->
				No hay prioridad disponible
			@endif
		</p>
		<p class="text-primary  size=7"> departamento del que proviene: 
			{{ $falla->user->departamento_id }}
				@if ($falla->user && $falla->user->departamento)
					{{ $descripcion = $falla->user->departamento->description }}
				@else 
					{{ $descripcion = "Sin descripción disponible" }}
				@endif
		</p>
		<p class="text-primary size=7">
			Numero y nombre del usuario:
			{{ $falla->user_id }} 
			{{ $falla->user->name }}
		</p>
		@csrf	
		<p class="text-black-50">
			{{$falla->created_at->diffForHumans()}}</p>
		<div class="d-flex justify-content-between
		alinf-items-center">
			<a href="{{route('falla.index')}}">Regresar</a>
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
