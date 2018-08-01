<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-editPersona-{{$persona1->idPersona}}">
 {{Form::Open(array('action'=>array('UsuarioController@updatePersona',$persona1->idPersona),'method'=>'patch'))}}


			<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Editar Persona</h4>{{$persona1->idPersona}}
            </div>




<div class="modal-body">				
				<div class="row">

   <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
   <div class="form-group">
    <label for="exampleInputEmail1">nombre</label>
    <input type="text" class="form-control" id="nombre" required="Campo Obligatorio" value="{{$persona1->nombre}}" name="nombre"  >
     </div>
   </div>

   <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
   <div class="form-group">
    <label for="exampleInputEmail1">Apellido Paterno</label>
    <input type="text" class="form-control" id="apellido_pa" required="Campo Obligatorio" 
    value="{{$persona1->apellido_Paterno}}" name="apellido_pa"  placeholder="Apellido Paterno">
     </div>
   </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
   <div class="form-group">
    <label for="exampleInputEmail1">Apellido Materno</label>
    <input type="text" class="form-control" id="apellido_ma" required="Campo Obligatorio" 
     value="{{$persona1->apellido_Materno}}"  name="apellido_ma" >
     </div>
   </div>

   <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
   <div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input type="number" class="form-control" id="telefono" required="Campo Obligatorio" value="{{$persona1->telefono}}" name="telefono"  placeholder="Telefono">
     </div>
   </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
   <div class="form-group">
    <label for="exampleInputEmail1">N°DNI</label>
    <input type="number" class="form-control" id="dni" required="Campo Obligatorio" 
     value="{{$persona1->dni}}" name="dni"  placeholder="DNI">
     </div>
   </div>
     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
   <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="text" class="form-control" id="Correo" required="Campo Obligatorio" 
     value="{{$persona1->correo}}" name="correo"  placeholder="Correo">
     </div>
   </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
   <div class="form-group">
    <label for="exampleInputEmail1">Departamento</label>
    <select name="departamento" class="form-control" >
        @foreach($departamento as $depa)
        <option value="{{$depa->idDepartamento}}">{{$depa->nombre_depar}}</option>
      @endforeach
    </select>
     </div>
   </div>
  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
   <div class="form-group">
    <label for="exampleInputEmail1">Sexo</label>
      <select name="sexo" class="form-control border-input"> 
                          
                         <?php if ($persona1->sexo == 'Masculino'): ?>
                          <option value="Masculino" selected >Masculino</option>
                          <option value="Feminino">Feminino</option>  

                          <?php elseif ($persona1->sexo == 'Feminino'): ?>
                           <option value="Feminino" selected >Feminino</option>
                           <option value="Masculino">Masculino</option>

                          <?php endif ?> 
                    </select>
     </div>
   </div>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <label for="exampleInputEmail1">Fecha Cumpleaños</label>
<div class="input-group date"  data-provide="datepicker">
    <input type="text" name="Fecha_cumple"  required="Campo Obligatorio" value="{{$persona1->Fecha_cumple}}" id="date" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>

 </div>
 <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

<div class="form-group">
    <label for="exampleInputEmail1">Rol</label>
    <select name="rol" class="form-control" >
        @foreach($rol as $ro)
        <option value="{{$ro->idRol}}">{{$ro->nombre_rol}}</option>
      @endforeach
    </select>
     </div>
 </div> 
   <div  class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
  <div class="form-group">
    <label for="exampleInputEmail1">Imagen</label>
    <input type="file" class="form-control" id="imagen" name="imagen">
    @if(($persona1->imagen)!="")
    <img src="{{asset('Imagenes/Mobiliario/'.$persona1->imagen)}}" height="100px" width="100px" class="img-thumbnail">
    @endif
     </div>
   </div>
   </div>
</center>
<center>
 <div class="modal-footer">                  
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" id="submit">
                </div>
</div>
</div>
{!!Form::close()!!}   