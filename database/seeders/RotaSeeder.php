<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Rota;
use App\Models\Ponto;

class RotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        //crio 4 rotas e adicionando de 5 até 10 paradas de ônibus em cada
        for($i=0; $i<4; $i++){
            $umaRota = new Rota();
            $umaRota->nome = "Rota " . $i+1;
            $umaRota->descricao = "xyz";
            $umaRota->save();

            $listaPontos = Ponto::all();
            $algunsPontos = $listaPontos->random(rand(5,10));
            $umaRota->pontos()->attach($algunsPontos);
        }
    }
}
