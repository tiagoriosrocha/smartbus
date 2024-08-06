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
        // Dados das rotas e seus pontos
        $rotas = [
            [
                'nome' => 'Santa Teresinha ida',
                'descricao' => 'xyz',
                'pontos' => [1, 2, 3, 4, 5, 6, 7, 8]
            ],
            [
                'nome' => 'Santa Teresinha volta',
                'descricao' => 'xyz',
                'pontos' => [8, 7, 6, 17, 5, 4, 3, 2, 1]
            ],
            [
                'nome' => 'Cohab ida',
                'descricao' => 'xyz',
                'pontos' => [9, 10, 11, 8]
            ],
            [
                'nome' => 'Senai ida',
                'descricao' => 'xyz',
                'pontos' => [12, 9, 13, 14, 8]
            ],
            [
                'nome' => 'Senai volta',
                'descricao' => 'xyz',
                'pontos' => [8, 14, 10, 12, 9, 13, 11]
            ],
            [
                'nome' => 'General ida',
                'descricao' => 'xyz',
                'pontos' => [15, 16, 10, 8]
            ],
            [
                'nome' => 'General volta',
                'descricao' => 'xyz',
                'pontos' => [8, 10, 16, 15]
            ]
        ];

        // Inserir as rotas no banco de dados e ligar com os pontos
        foreach ($rotas as $rotaData) {
            $rota = new Rota();
            $rota->nome = $rotaData['nome'];
            $rota->descricao = $rotaData['descricao'];
            $rota->save();

            // Associar os pontos à rota
            $rota->pontos()->attach($rotaData['pontos']);
        }
        
        
        
        
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
