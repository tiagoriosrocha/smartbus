<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Passagem;
use App\Models\Viagem;

class PassagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crio um objeto da classe faker e configuro ela para português
        $faker = new Faker();
        $faker->addProvider(new \Faker\Provider\pt_BR\Address($faker));
        
        $listaViagens = Viagem::all();

        foreach($listaViagens as $umaViagem){
            for($i=0; $i<100; $i++)    {
                $umPontoDePassagem = new Passagem();
                $umPontoDePassagem->viagem()->associate($umaViagem);
                $umPontoDePassagem->latitude = $faker->latitude($min = 28, $max = 29);
                $umPontoDePassagem->longitude = $faker->longitude($min = 53, $max = 54);
                $umPontoDePassagem->save();
            }
        }
    }
}
