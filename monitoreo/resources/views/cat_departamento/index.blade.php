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
               
            </tr>
        </thead>
		
		@forelse ($falla as $falla)
		
        <tbody>
			<tr>
				
				<th scope='row'>{{$falla->id}}</th>
				<td >
					<a
					href="{{route('falla.show',$falla)}}">
						<span>{{$falla['descripcion']}}</span>
					</a></td>
			</tr>
			@empty
			<td>no hay fallas para mostrar </td>
				
		</tbody>
		@endforelse
	</table>

</div>
@endsection