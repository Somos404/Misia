<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

//PREGUNTAR SI VA USER O USUARIO
class Pedidos extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'pais', 'provincia', 'localidad', 'direccion', 'coste_envio', 'usuario_id',
    ];
}
