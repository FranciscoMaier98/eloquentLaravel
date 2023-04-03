<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Carro;

class CarrosController extends Controller
{
    public function um_para_um() {
        $carro = Carro::find(1);
        dd($carro->marca()->get());
    }
}
