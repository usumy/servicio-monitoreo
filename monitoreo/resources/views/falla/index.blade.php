
@extends('layout')
@section('title', 'Fallas registradas')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
	<div class="d-flex justify-content-between aligm-items-center mb-3">
		<h1 class="display-4 mb-0">Tabla De Fallas Registradas</h1>
	</div>
	<form method="POST" action="/falla/search">
	@csrf
	@if ($falla instanceof LengthAwarePaginator)
	{{ $falla->links() }}
	
	@endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th scope="col">Prioridad</th>
				<th scope="col">ID y Nombre del Empleado</th>
                <th scope="col">Departamento</th>
                <th scope="col">Resuelto</th>
            </tr>
        </thead>
		
		@forelse ($falla as $falla)
		
        <tbody>
			<tr>
				
				<th scope='row'>{{$falla->id}}</th>
				<td >
					<a
					href="{{route('falla.show',$falla)}}">
						<span>{{ $falla->descripcion }}</span>
					</a></td>
				<td>
					
					{{$falla->prioridad_id}}
					@if ($falla->prioridad)
						{{ $falla->prioridad->descripcion }}
					@else
						<!-- Manejo cuando la relación prioridad no está definida -->
						Prioridad sin registrar
					@endif
				</td>
				<td>
					{{ $falla->user_id }} <!-- Muestra el ID del usuario asociado a la falla -->  
					{{ $falla->user->name }}
				</td>
				<td>{{ $falla->departamento }}</td>

				<td><input type='checkbox' class='check-box'></td>
			</tr>
			@empty
			<td>no hay fallas para mostrar </td>
				
		</tbody>
		@endforelse
	</table>

</div>
@endsection