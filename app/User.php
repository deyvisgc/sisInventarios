<?php

namespace Inventario;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
       protected $table='usuarios';
   protected $primaryKey='idusuarios';

 public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password','Persona_idPersona' ,'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $loginvalidate=[
        'email'=>'required',
        'password'=>'required'
    ];
}
