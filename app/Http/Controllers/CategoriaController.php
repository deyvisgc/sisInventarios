<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Http\Requests;
use Inventario\Categoria;
use Illuminate\Support\Facades\Redirect;
use Inventario\Http\Requests\CategoriaFormRequest;
use DB;
class CategoriaController extends Controller
{

    public function __construct()
    {


    }
    public function index(Request $request){
     if($request){
         $query=trim($request->get('searchText'));
         $categorias=DB::table('categoria')->where('nombre_cate','like','%'.$query.'%')
           ->paginate(7);
             return view('Categorias.index',['categorias'=>$categorias,"searchText"=>$query]);

     }
    }

    public function create(){
        return view("Categorias.create");

    }
    public function store(CategoriaFormRequest $categoriaFormRequest){
     $categoria=new Categoria();
     $categoria->nombre_cate=$categoriaFormRequest->get("nombre");
     $categoria->save();
     return Redirect::to('Categorias');


    }
    public function show($id){
                 return view("Categoria.show",['categoria'=>Categoria::findOrFail($id)]);
    }
    public function edit($id){
        return view("Categorias.edit",['categoria'=>Categoria::findOrFail($id)]);
    }
    public function update(CategoriaFormRequest $categoriaFormRequest,$id){
         $categoria=Categoria::findOrFail($id);
         $categoria->nombre_cate=$categoriaFormRequest->get('nombre');
        $categoria->update();
        return Redirect::to('Categorias');
    }
    public function delete(){

    }
    public function destroy($id){
        $categoria=Categoria::findOrFail($id);
      
        $categoria->delete();
        return Redirect::to('Categorias');
    }
       



}
