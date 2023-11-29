@extends('layout')
@section('title', 'Visualización de la falla/'.$falla->id)
@section('content')

<div class="container">

	<div class="bg-white p-5 shadow rounded">
		<h1>{{$falla->id}}</h1>		
		<p class="text-secondary">
			{{$falla['descripcion']}}</p>
        <p class="text-secondary">
            {{$falla['prioridad']}}</p>
		<p class="text-secondary">
			{{$falla['departamento']}}</p>
		<p class="text-secondary">
			{{ $falla->user_id }}
					@if($falla->usuario)
						{{ $falla->usuario->nombre }}
					@endif</p>
		<p class="text-black-50">
			{{$falla->created_at->diffForHumans()}}</p>
		<div class="d-flex justify-content-between
		alinf-items-center">
			<a href="{{route('falla.index')}}">Regresar</a>
			
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
