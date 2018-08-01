@extends('layaouts.admin')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Categorías <a href="Categorias/create"><button class="btn btn-success">Nuevo</button></a></h3>

		@include('Categorias.search')
			
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
               @foreach ($categorias as $cate)

				<tr>
					<td>{{ $cate->idcategoria}}</td>
					<td>{{ $cate->nombre_cate}}</td>
				
					<td>
						<a href="{{URL::action('CategoriaController@edit',$cate->idcategoria)}}"><button class="btn btn-info">Editar</button></a>

						 <a href="" data-target="#modal-delete-{{$cate->idcategoria}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
				</tr>
			@include('Categorias.modal')
				@endforeach
			</table>

		</div>
		{{$categorias->render()}}
			
	</div>
</div>


@endsection