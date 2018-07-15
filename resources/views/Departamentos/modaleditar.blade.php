<div id="modal-update-{{$depa->idDepartamento}}" class="modal fade" role="dialog" >
<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	

	
	{!!Form::model($depa,['method'=>'PATCH','route'=>['Departamentos.update',$depa->idDepartamento]])!!}
 {{Form::token()}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Editar Departamentos</h3>

				@if (count($errors)>0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)

		<li> {{$error}}</li>
	@endforeach
	</ul>
    </div>
	@endif
    @foreach ($errors->all() as $error)
	<li>{{$error}}</li>
    @endforeach

			</div>
			
				<div class="modal-body">				
					<div class="form-group">
						<label for="name">Departamento</label>
						<input type="text" name="nombre"  value="{{$depa->nombre_depar}}" class="form-control" placeholder="Departamentos">
					</div>
								
				</div>
				<div class="modal-footer">					
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-success" id="submit">
				</div>
			 {!!Form::close()!!}   
		</div>
	</div>
</div>
