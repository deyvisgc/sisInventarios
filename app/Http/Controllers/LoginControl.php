<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\User;
use Inventario\Http\Requests;
use Session;
use Redirect;
use Inventario\Http\Requests\PersonaRequest;
use Validator;
use Auth;

class LoginControl extends Controller
{
    
    public function login(){

    	return view('auth.login');
    }

    public function logeo(PersonaRequest $request){

    	 if(Auth::attempt(['email'=>$request['usuarios'], 'Password'=>$request['Password']])){
            return Redirect::to('admin');
        }
        Session::flash('message-error','Datos son incorrectos');
        return Redirect::to('/');

    	}

    
       
}
