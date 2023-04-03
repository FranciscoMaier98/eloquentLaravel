<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Usuario;
use DB;

class TelefonesController extends Controller
{
    public function um_para_muitos() {
        $usuario = Usuario::find(1);
        dd($usuario->telefone()->get());
    }
}
