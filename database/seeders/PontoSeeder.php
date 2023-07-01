<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Ponto;

class PontoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crio um objeto da classe faker e configuro ela para português
        $faker = new Faker();
        $faker->addProvider(new \Faker\Provider\pt_BR\Person($faker));
        $faker->addProvider(new \Faker\Provider\pt_BR\Company($faker));
        $faker->addProvider(new \Faker\Provider\pt_BR\Payment($faker));
        $faker->addProvider(new \Faker\Provider\pt_BR\Address($faker));
        $faker->addProvider(new \Faker\Provider\Internet($faker));
        $faker->addProvider(new \Faker\Provider\pt_BR\PhoneNumber($faker));
        $faker->addProvider(new \Faker\Provider\en_US\Text($faker));
        $faker->addProvider(new \Faker\Provider\Lorem($faker));
        
        //crio 20 pontos no banco
        for($i=0; $i<100; $i++){
            $umaParadaDeBus = new Ponto();
            $umaParadaDeBus->nome = $faker->randomElement(["Rua","Avenida"]) . " " . $faker->name();
            $umaParadaDeBus->endereco = $faker->streetAddress();
            $umaParadaDeBus->complemento = $faker->word;
            $umaParadaDeBus->latitude = $faker->latitude($min = -90, $max = 90);
            $umaParadaDeBus->longitude = $faker->longitude($min = -90, $max = 90);
            $umaParadaDeBus->save();
        }
    }
}
