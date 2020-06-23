<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quadrado;

class QuadradoController extends Controller
{
       public function adicionarQuadrado(Request $request){

        try {
            $quadrado = new Quadrado();

            $quadrado->base = $request->base;
            $quadrado->altura = $request->altura;

            $quadrado->save();

            return['retorno'=>'ok'];

        }catch(\Exception $erro){
            return['retorno'=>'erro', 'details'=>'erro'];
        }

    }
}
