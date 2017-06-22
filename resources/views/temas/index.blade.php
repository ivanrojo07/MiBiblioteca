@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<h2>Lista de Temas 
		<a class="btn btn-primary btn-lg pull-right"><i class="fa fa-space-shuttle" aria-hidden="true"></i> Nuevo</a></h2>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombres</th>
					<th colspan="3">Acciones</th>
				</tr>
				<tbody>
					@foreach($temas as $tema)
					<tr>
						<td>{{$tema->id}}</td>
						<td>{{$tema->temas}}</td>
						<td>ver</td>
						<td>editar</td>
						<td>borrar</td>
					</tr>
					@endforeach
				</tbody>
			</thead>
		</table>
		{!!$temas->render()!!}
	</div>
</div>
@endsection