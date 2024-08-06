<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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

    public function detalhesRota(Request $request){
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if( Auth::attempt($credenciais) ){
            $rotaId = $request['rotaId'];
            $rota = Rota::where("id", $rotaId)->with('pontos')->first();
            return Response::json($rota);
        }else{
            return Response::json(["error" => "credenciais não conferem"]);
        }
    }

    //API Distance Matrix
    //api: https://developers.google.com/maps/documentation/distance-matrix?hl=pt-br
    //Calcula a distância do último ponto de passagem de uma viagem
    //com todos os pontos que fazem parte daquela viagem
    //atualiza os dados no banco de dados
    public function calcularDistancias($viagemId){
        $viagem = Viagem::where('id',$viagemId)->with('pontos','passagens')->first();
        $ultimaPassagem = $viagem->passagens->last();

        $locationKey = env("GOOGLE_MAPS_DISTANCE_API_KEY");
        $locationOrigem = $ultimaPassagem->latitude . "," . $ultimaPassagem->longitude;
        $locationDestino = "";

        foreach($viagem->pontos as $umPonto){
                if($locationDestino == ""){
                    $locationDestino = $umPonto->latitude . "," . $umPonto->longitude;    
                }else{
                    $locationDestino = $locationDestino . "|" . $umPonto->latitude . "," . $umPonto->longitude;
                }
        }
        $urlApi = "https://maps.googleapis.com/maps/api/distancematrix/json?destinations=$locationDestino&origins=$locationOrigem&units=imperial&key=$locationKey";        
        //dd($urlApi);
        $response = Http::get($urlApi);        
        //dd(json_decode($response->body()));
        
        for($i=0; $i < $viagem->pontos->count(); $i++){
            $distancia = $response['rows'][0]['elements'][$i]['distance']['text'];
            $tempo = $response['rows'][0]['elements'][$i]['duration']['text'];
            
            $umPonto = $viagem->pontos->get($i);
            Viagem::find($viagemId)->pontos()->updateExistingPivot($umPonto->id,['distancia' => $distancia]);
            Viagem::find($viagemId)->pontos()->updateExistingPivot($umPonto->id,['tempo' => $tempo]);
        }

        $viagem = Viagem::where('id',$viagemId)->with('pontos','passagens')->first();
        return Response::json($viagem->pontos);
        
    }

    public function teste(){
        $locationOrigem = "41.654570,-71.49605";
        //$locationDestino = "New%20York%20City%2C%20NY|Santa%20Maria%20Rio%20Grande%20do%20Sul%20Brazil";
        $locationDestino = "41.172536,-71.555274|41.18259,-71.567168|41.341878,-71.695282";
        $locationKey = env("GOOGLE_MAPS_DISTANCE_API_KEY");
        $response = Http::get("https://maps.googleapis.com/maps/api/distancematrix/json?destinations=$locationDestino&origins=$locationOrigem&units=imperial&key=$locationKey");
        dd($response->json());        
    }
}
