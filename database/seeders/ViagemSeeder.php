<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Viagem;
use App\Models\Profile;
use App\Models\User;
use App\Models\Rota;


class ViagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = new Faker();
        $faker->addProvider(new \Faker\Provider\DateTime($faker));

        //para cada rota
        for($i=1; $i<=4; $i++){
            $rota = Rota::where('id',$i)->with('pontos')->first();
            $profile = Profile::where('descricao','motorista')->with('user')->get()->first();
            $userMotorista = $profile->user;
            
            //vou criar 30 viagens - 1 por dia
            for($j=1; $j<=3; $j++){
                
                switch($j){
                    case 1:
                        $statusViagem = "nao_iniciada";
                        break;
                    case 2:
                        $statusViagem = "rodando";
                        break;
                    case 3:
                        $statusViagem = "finalizada";
                }

                $umaViagem = new Viagem();
                $umaViagem->hora_partida = $faker->dateTimeBetween("2023-05-1 06:00:00",'2023-05-1 06:30:00');
                $umaViagem->hora_chegada = $faker->dateTimeBetween('2023-05-1 07:30:00','2023-05-1 07:45:00');
                $umaViagem->status = $statusViagem;
                $umaViagem->motorista()->associate($userMotorista);
                $umaViagem->rota()->associate($rota);
                $umaViagem->save();
                foreach($rota->pontos as $umPonto){
                    $umaViagem->pontos()->attach($umPonto,['status' => 'ativo']);
                }
            }
        }

    }
}
