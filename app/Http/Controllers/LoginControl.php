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

    	return  view('auth.login');
    }

    public function logeo(PersonaRequest $personaRequest)
    {

     $this->validate($personaRequest,User::$loginvalidate);
     $data=$personaRequest->only('email','password');



    if(Auth::attempt($data)){

        return 'holaaa';
    }
    return 'mala';

    }
}
