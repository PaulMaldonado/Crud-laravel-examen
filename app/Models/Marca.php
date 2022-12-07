<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    // Reglas para validar como requeridos los campos del formulario
    static $rules = [
		'name' => 'required',
		'enabled' => 'required',
    ];

    // Variable protegida para mostrar 20 por página
    protected $perPage = 20;

    // Variable protegida para traer los datos de la tabla marcas
    protected $fillable = ['name','enabled'];
}
