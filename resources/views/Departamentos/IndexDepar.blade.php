@extends('layaouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Categorías <a data-toggle="modal" data-target="#modalRegistro"><button class="btn btn-success">Nuevo</button></a></h3>
@include('Departamentos.searchDepa')
			
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Opciones</th>
				</thead>
               @foreach ($departamento as $depa)

				<tr>
					<td>{{ $depa->idDepartamento}}</td>
					<td>{{ $depa->nombre_depar}}</td>
				
					<td>
						<a href="" data-target="#modal-update-{{$depa->idDepartamento}}" data-toggle="modal"><button class="btn btn-info">Editar</button></a>

						 <a href="" data-target="#modal-delete-{{$depa->idDepartamento}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>


                    </td>

				</tr>
				@include('Departamentos.modaldelete')
					@include('Departamentos.modaleditar')
				@endforeach
			</table>

		</div>
		{{$departamento->render()}}
			
	</div>
</div>

<div id="modalRegistro" class="modal fade" role="dialog" >

	{!! Form::open(array('url'=>'Departamentos','method'=>'POST','autocomplete'=>'off')) !!}
 {{Form::token()}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>RegisDepar</h3>
			</div>
			
				<div class="modal-body">				
					<div class="form-group">
						<label for="name">Departamento</label>
						<input type="text" name="nombre" class="form-control" placeholder="Departamentos">
					</div>
								
				</div>
				<div class="modal-footer">					
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-success" id="submit">
				</div>
			
		</div>
	</div>
	
</div>
 {!!Form::close()!!}   



@endsection







