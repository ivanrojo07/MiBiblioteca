@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<h2>Lista de Editoriales
		<a class="btn btn-primary btn-lg pull-right"><i class="fa fa-align-justify" aria-hidden="true"></i> Nuevo</a></h2>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombres</th>
					<th colspan="3">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($editoriales as $editorial)
				<tr>
					<td>{{$editorial->id}}</td>
					<td>{{$editorial->nombre}}</td>
					<td>ver</td>
					<td>editar</td>
					<td>borrar</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!!$editoriales->render()!!}
	</div>
</div>
@endsection