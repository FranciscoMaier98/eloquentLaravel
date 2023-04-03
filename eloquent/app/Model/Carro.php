<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = 'carros';

    protected $fillable = [
        'id',
        'descricao',
        'ano'
    ];
    
    public function marca() {
        return $this->hasOne('App\Model\Marca', 'carro_id');
        /*
            também é possível usar:
            return $this->hasOne(Marca::class);
        */
    }
}