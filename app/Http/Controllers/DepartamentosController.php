<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Http\Requests;
use  Inventario\Departamentos;
use Inventario\Http\Requests\DepartamentosRequest;
use Illuminate\Support\Facades\Redirect;
use DB;
class DepartamentosController extends Controller
{
    public function __construct()
    {


    }

    public function index(Request $request ){
       if($request){
      $query=trim($request->get('searchText'));
      $departamento=DB::table('departamento')->where('nombre_Depar','like','%'.$query.'%')
    ->paginate(7);
      return view('Departamentos.indexDepar',['departamento'=>$departamento,'searchText'=>$query]);
       }


    }

      public function store(DepartamentosRequest $departamentosRequest){

      	$departamento=new Departamentos();

      	$departamento->nombre_Depar=$departamentosRequest->get('nombre');
      	$departamento->save();

      	return  Redirect::to('Departamentos');
    	
    }

     public function edit($id){
        return view("Departamentos.editDepar",['departamento'=>Departamentos::findOrFail($id)]);
    }

      
      public function update(DepartamentosRequest $departamentosRequest,$id){
      	$departamento=Departamentos::findOrFail($id);
      	$departamento->nombre_Depar=$departamentosRequest->get('nombre');
      	$departamento->update();
      	return Redirect::to('Departamentos');
      
    	
    }
      public function destroy($id){
      
         

           $categoria=Departamentos::findOrFail($id);
      
        $categoria->delete();
       return Redirect::to('Departamentos');
    	
    }
}
