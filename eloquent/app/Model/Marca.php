<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{

    protected $table = 'marcas';

    protected $fillable = [
        'id',
        'descricao',
        'carro_id'
    ];
}