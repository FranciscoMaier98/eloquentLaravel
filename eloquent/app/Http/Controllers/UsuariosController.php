<?php

namespace App\Http\Controllers;
use App\Model\Usuario;
use App\Model\Carro;
use App\Model\Card;
use Illuminate\Suppoert\Facades\Http;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index() {
        $request = new \GuzzleHttp\Client();

        $retorno = $request->request('GET', 'http://api.magicthegathering.io/v1/cards?page=2');
        
        dd($retorno->getHeader('content-type')[0], $retorno->getBody());
    }

    public function card() {
        
    }
    
    public function muitos_para_muitos() {
        $usuario = Usuario::find(1);
        dd($usuario->permissoes());
    }
}
