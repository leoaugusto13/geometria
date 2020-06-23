<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Triangulo;

class TrianguloController extends Controller
{
           public function adicionarTriangulo(Request $request){
    
            try {
                $triangulo = new Triangulo();
    
                $triangulo->base = $request->base;
                $triangulo->altura = $request->altura;
    
                $triangulo->save();
    
                return['retorno'=>'ok'];
    
            }catch(\Exception $erro){
                return['retorno'=>'erro', 'details'=>'erro'];
            }
    
        }
    
}
