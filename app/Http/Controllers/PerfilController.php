<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Http\Requests;
use Inventario Persona;
use Inventario User;
use Inventario\Http\Requests\UserRequest;
use Inventario\Http\Requests\UserRequest;

class PerfilController extends Controller
{
    
    public function index(){
     
     return view('Perfil.index');
    }

    public function updatePassword(Request $request , id){
    	


    }
}
