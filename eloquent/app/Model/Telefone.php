<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
        'id',
        'telefone',
        'usuario_id'
    ];
    
}
