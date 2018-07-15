
@extends('layaouts.admin')
@section('contenido')

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    
    <H3>Editar Categoria</H3>
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



{!!Form::model($departamento,['method'=>'PATCH','route'=>['Departamentos.update',$departamento->idDepartamento]])!!}

{{Form::token()}}
 <div class="form-group">
    <label for="exampleInputEmail1">Departamentos</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$departamento->nombre_depar}}" placeholder="Departamentos">
     </div>
       <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
           <a href=""><button class="btn btn-danger" type="button">Cancelar</button></a>
            </div>

{!!Form::close()!!}     
</div>
</div>
  @endsection