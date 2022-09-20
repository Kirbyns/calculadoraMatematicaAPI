<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class simplescontroller extends Controller
{
    public function funcao(Request $request){
        $resultado = $request->valor;

        return response()-> json([
            "status" => 200,
            "mensagem" => "metodo executado com sucesso",
            "resultado" => $resultado,
        ], 200);
    }
         // SOMA
    public function soma(Request $request){
        $valor01 = $request->valor01;
        $valor02 = $request->valor02;
        $resultado = $valor01+$valor02;



        return response()-> json([
            "status" => 200,
            "mensagem" => "metodo executado com sucesso",
            "resultado" => $resultado,
        ], 200);
    }
          // SUBTRAÇÃO
    public function subtracao(Request $request){
        $valor01 = $request->valor01;
        $valor02 = $request->valor02;
        $resultado = $valor01-$valor02;



        return response()-> json([
            "status" => 200,
            "mensagem" => "metodo executado com sucesso",
            "resultado" => "A subtracao de " .$valor01. " - ".$valor02." = ". $resultado,
        ], 200);
    }
        // MULTIPLICAÇÃO
    public function multiplicacao(Request $request){
        $valor01 = $request->valor01;
        $valor02 = $request->valor02;
        $resultado = $valor01*$valor02;



        return response()-> json([
            "status" => 200,
            "mensagem" => "metodo executado com sucesso",
            "resultado" => "A multiplicacao de " .$valor01. " * ".$valor02." = ". $resultado,
        ], 200);
    }


    // DIVISÃO
    public function divisao(Request $request){
        $valor01 = $request->valor01;
        $valor02 = $request->valor02;
        $resultado = $valor01/$valor02;



        return response()-> json([
            "status" => 200,
            "mensagem" => "metodo executado com sucesso",
            "resultado" => "A divisão de " .$valor01. " / ".$valor02." = ". $resultado,
        ], 200);
    }

        public function potencia(Request $request){
            $valor = $request->valor;
            $expoente = $request->expoente;

            $resultado = pow($valor, $expoente);

            return response()-> json([
                "status" => 200,
                "mensagem" => "metodo executado com sucesso",
                "resultado" => "A potenciação de " .$valor. " elevado ".$expoente." = ". $resultado,
            ], 200);
        }

        public function raizQuadrada(Request $request){
            $valor = $request->valor;

            $resultado = sqrt($valor);

            return response()-> json([
                "status" => 200,
                "mensagem" => "metodo executado com sucesso",
                "resultado" => "A Raiz quadrada de " .$valor. " é = ". $resultado ,
            ], 200);
        }

        public function raizQualquer(Request $request){
            $radicando = $request->radicando;
            $indice = $request->indice;

            $X = pow($radicando, (1/$indice));


            return response()-> json([
                "status" => 200,
                "mensagem" => "metodo executado com sucesso",
                "resultado" => "A raiz de X" .$radicando. " com Y ".$indice." = ". $X,
            ], 200);
        }
}
