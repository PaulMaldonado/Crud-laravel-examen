<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Reglas para validar el formulario
    static $rules = [
		'marca_id' => 'required',
        'number_part_id' => 'required',
		'name' => 'required',
		'upc' => 'required',
		'current_cost' => 'required',
		'profit_percentage' => 'required',
        'price' => 'required',
		'enable' => 'required',
    ];

    // Variable protegida para mostrar 20 por página
    protected $perPage = 20;

    // Variable protegida que contiene los datos de la base de datos
    protected $fillable = ['marca_id','number_part_id','name','upc','current_cost','profit_percentage','price','enable'];

    // Método para realacionar los productos de uno a muchos
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'marca_id', 'id');
    }

    // Método para sacar las ganancias de costo actual por el porcentaje
    public function formulaCostoActualPorcentaje() 
    {
        return (($this->current_cost * $this->profit_percentage));
    }
    
    // Método para relacionar los productos de uno a uno
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }

    public function numberPart()
    {
        return $this->hasOne('App\Models\NumberPart', 'id', 'number_part_id');
    }

    public function numberParts() 
    {
        return $this->hasMany('App\Models\Producto', 'number_part_id', 'id');
    }
}
