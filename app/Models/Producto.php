<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Reglas para validar el formulario
    static $rules = [
		'marca_id' => 'required',
		'name' => 'required',
		'upc' => 'required',
		'current_cost' => 'required',
		'profit_percentage' => 'required',
		'enable' => 'required',
    ];

    // Variable protegida para mostrar 20 por página
    protected $perPage = 20;

    // Variable protegida que contiene los datos de la base de datos
    protected $fillable = ['marca_id','name','upc','current_cost','profit_percentage','enable'];

    // Método para realacionar los productos de uno a muchos
    public function marcas()
    {
        return $this->hasMany('App\Models\Marcas', 'marca_id', 'id');
    }
    
    // Método para relacionar los productos de uno a uno
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }
}
