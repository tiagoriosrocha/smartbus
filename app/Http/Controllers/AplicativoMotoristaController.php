<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AplicativoMotoristaController extends Controller
{
    public function fazerLogin(Request $request){
        
        $username = "";
        $password = "";

        if(isset($request['username']) && isset($request['password'])){
            $username = $request['username'];
            $paspasswords = $request['password'];
        }

        $colecaoUsuario = collect(["nome" => "fulano", "username" => "fulano", "password" => "12345678"]);
        $usuario = $colecaoUsuario->where("username",$username)->where("password", $password);

        if(count($usuario) == 1){
            return true;
        }else{
            return false;
        }

    }

    public function getRotas(){
        $rotas = [ 
                    ['titulo'  => 'Rota 1', 'tipo' => 'ida', 'percurso' => "rua X, rua Y, rua Z"],
                    ['titulo'  => 'Rota 2', 'tipo' => 'ida', 'percurso' => "rua X, rua Y, rua Z"],
                    ['titulo'  => 'Rota 3', 'tipo' => 'volta', 'percurso' => "rua X, rua Y, rua Z"],
                    ['titulo'  => 'Rota 4', 'tipo' => 'volta', 'percurso' => "rua X, rua Y, rua Z"],
                 ];

        return json_encode($rotas);
    }
}
