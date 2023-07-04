<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Rota;
use App\Models\Viagem;
use App\Models\Passagem;

class ApiAppController extends Controller
{
    public function autenticarGet($email, $password){       
        if( Auth::attempt(['email' => $email, 'password' => $password]) ){
            $user = Auth::user();
            $user->profile;
            
            if( isset($user->profile) ){
                if( $user->profile->descricao == "motorista" ){
                    return Response::json(["id" => $user->id, "name" => $user->name, "profile" => $user->profile->descricao]);
                }
            }else{
                return Response::json(["error" => "Perfil nao habilitado"]);
            }
        }else{
            return Response::json(["error" => "credenciais não conferem"]);
        }        
    }

    public function autenticarPost(Request $request){       
        
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if( Auth::attempt($credenciais) ){
            $user = Auth::user();
            $user->profile;
            
            if( isset($user->profile) ){
                if( $user->profile->descricao == "motorista" ){
                    return Response::json(["id" => $user->id, "name" => $user->name, "profile" => $user->profile->descricao]);
                }
            }else{
                return Response::json(["error" => "Perfil nao habilitado"]);
            }
        }else{
            return Response::json(["error" => "credenciais não conferem"]);
        }        
    }

    public function getRotas(Request $request){
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if( Auth::attempt($credenciais) ){
            $listaRotas = Rota::all();
            return Response::json($listaRotas);
        }else{
            return Response::json(["error" => "credenciais não conferem"]);
        }
    }

    public function criarViagem(Request $request){
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if( Auth::attempt($credenciais) ){
            $rota = Rota::where('id',$request->input('rota_id'))->with('pontos')->first();
            $userMotorista = Auth::user();

            $umaViagem = new Viagem();
            $umaViagem->hora_partida = now();
            $umaViagem->status = "rodando";
            $umaViagem->motorista()->associate($userMotorista);
            $umaViagem->rota()->associate($rota);
            $umaViagem->save();
            foreach($rota->pontos as $umPonto){
                $umaViagem->pontos()->attach($umPonto,['status' => 'ativo']);
            }
            return Response::json($umaViagem);
        }else{
            return Response::json(["error" => "credenciais não conferem"]);
        }
    }

    public function finalizarViagem(Request $request){
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if( Auth::attempt($credenciais) ){
            $umaViagem = Viagem::where('id',$request->input('viagem_id'))->first();
            $umaViagem->hora_chegada = now();
            $umaViagem->status = "finalizada";
            $umaViagem->save();
            return Response::json($umaViagem);
        }else{
            return Response::json(["error" => "credenciais não conferem"]);
        }
    }

    public function enviarPontoPassagem(Request $request){
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if( Auth::attempt($credenciais) ){
            $umaViagem = Viagem::where('id',$request->input('viagem_id'))->first();
            
            $umPontoPassagem = new Passagem();
            $umPontoPassagem->viagem()->associate($umaViagem);
            $umPontoPassagem->latitude = $request->input('latitude');
            $umPontoPassagem->longitude = $request->input('longitude');
            $umPontoPassagem->save();
            return Response::json($umPontoPassagem);
        }else{
            return Response::json(["error" => "credenciais não conferem"]);
        }
    }

    //API Distance Matrix
    //api: https://developers.google.com/maps/documentation/distance-matrix?hl=pt-br
    public function calcularDistancias($viagemId){
        $viagem = Viagem::where('id',$viagemId)->with('pontos','passagens')->first();
        $ultimoPonto = $viagem->passagens->last();
        foreach($viagem->pontos as $umPonto){
            if( $umPonto->status == 'ativo'){
                //faço cálculo da distância
                $tempo = 10;
                //faço o cálculo do tempo
                $distancia = 10;

                if($tempo < 1 || $distancia < 50){
                    $umPonto->status = 'inativo';
                }

                $umPonto->tempo = $tempo;
                $umPonto->distancia = $distancia;
                $umPonto->save();
            }
        }
    }
}
