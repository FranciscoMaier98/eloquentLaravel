<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Telefone;
use App\Model\Permissao;

class Usuario extends Model
{

    protected $table = 'usuarios';

    protected $fillable = [
        'id',
        'nome',
        'email',
        'senha'
    ];
    
    public function telefone() {
        //return $this->hasMany(Telefone::class);
        return $this->hasMany('App\Model\Telefone', 'usuario_id');
    }

    public function permissoes() {
        return $this->belongsToMany(Permissao::class, 'usuarios_permissoes');
    }

}