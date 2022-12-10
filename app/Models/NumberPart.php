<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NumberPart extends Model
{
    
    static $rules = [
		'sku' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['sku'];



}
