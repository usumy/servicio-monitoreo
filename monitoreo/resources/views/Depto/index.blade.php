@extends('layout')
@section('title', 'Registro de departamentos')
@section('content')

<div class="container">
	<div class="d-flex justify-content-between aligm-items-center mb-3">
		<h1 class="display-4 mb-0">Tabla De Registro de departamentos</h1>
	</div>
	<a  class="btn btn-primary"
			href="{{route('Depto.create')}}">
			Crear Departamento</a>
	<form method="POST" action="/Depto/search">
	@csrf
	@if ($Depto instanceof LengthAwarePaginator)
	{{ $Depto->links() }}
	
	@endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
               
            </tr>
        </thead>
		
		@forelse ($Depto as $Depto)
		
        <tbody>
			<tr>
				
				<th scope='row'>{{$Depto->id}}</th>
				<td >
					<a
					href="{{route('Depto.show', $Depto)}}">
						<span>{{$Depto['descripcion']}}</span>
					</a></td>
			</tr>
			@empty
			<td>no hay departamentos para mostrar </td>
				
		</tbody>
		@endforelse
	</table>

</div>
@endsection