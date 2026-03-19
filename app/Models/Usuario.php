<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nombreUsuario',
        'gmail',
        'telefono',
        'contrasena'
    ];

    protected $guarded = ['tipoUsuario'];
}
