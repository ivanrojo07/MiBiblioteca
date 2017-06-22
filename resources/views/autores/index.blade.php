@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<h2>Listado de Autores:
		<a href="{{ route('libros.create') }}" class="btn btn-primary btn-lg pull-right"><i class="fa fa-users" aria-hidden="true"> Nuevo</i></a>
		</h2>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombres</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Pais</th>
					<th colspan="3">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($autores as $autor)
				<tr>
					<td>{{ $autor->id }}</td>
					<td>{{ $autor->nombres }}</td>
					<td>{{$autor->apellidoPrimero}}</td>
					<td>{{$autor->apellidoSegundo}}</td>
					<td>{{$autor->pais}}</td>
					<td>ver</td>
					<td>editar</td>
					<td>borrar</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!!$autores->render() !!}
        
    </div>
</div>

@endsection