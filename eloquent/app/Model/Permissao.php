<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    Protected $table = 'permissoes';

    Protected $fillable = [
        'id',
        'descricao'
    ];

    
}
