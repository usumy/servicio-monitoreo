@extends('layout')
@section('title', 'Registro del catalogo de prioridad')
@section('content')
<div class="container">
	<div class="d-flex justify-content-between aligm-items-center mb-3">
		<h1 class="display-4 mb-0">Tabla De Registro del catalogo de prioridad</h1>
	</div>
	<a  class="btn btn-primary"
			href="{{route('Prioridad.create')}}">
			crear grado de prioridad</a>
	<form method="POST" action="/Prioridad/search">
	@csrf
	@if ($Prioridad instanceof LengthAwarePaginator)
	{{ $Prioridad->links() }}
	
	@endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
               
            </tr>
        </thead>
		
		@forelse ($Prioridad as $Prioridad)
		
        <tbody>
			<tr>
				
				<th scope='row'>{{$Prioridad->id}}</th>
				<td >
					<a
					href="{{route('Prioridad.show', $Prioridad)}}">
						<span>{{$Prioridad['descripcion']}}</span>
					</a></td>
			</tr>
			@empty
			<td>no hay departamentos para mostrar </td>
				
		</tbody>
		@endforelse
	</table>

</div>
@endsection