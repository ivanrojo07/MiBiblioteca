@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<h2>Listado de libros:
		<a href="{{ route('libros.create') }}" class="btn btn-primary btn-lg pull-right">Nuevo</a>
		</h2>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombre de libro</th>
					<th colspan="3">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($libros as $libro)
				<tr>
					<td>{{ $libro->id }}</td>
					<td>{{ $libro->titulo }}</td>
					<td>ver</td>
					<td>editar</td>
					<td>borrar</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!!$libros->render() !!}
        
    </div>
</div>
@endsection