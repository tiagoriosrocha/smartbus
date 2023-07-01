<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\User;
use App\Models\Profile;

class UserSeeder extends Seeder
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
        $faker->addProvider(new \Faker\Provider\pt_BR\Text($faker));
        $faker->addProvider(new \Faker\Provider\pt_BR\PhoneNumber($faker));
        $faker->addProvider(new \Faker\Provider\en_US\Text($faker));
        $faker->addProvider(new \Faker\Provider\Lorem($faker));
        
        //crio 10 usuários no banco
        for($i=0; $i<10; $i++){
            $umUsuario = new User();
            $umUsuario->name = $faker->name();
            $umUsuario->email = $faker->unique()->safeEmail();
            $umUsuario->password = Hash::make('password');
            $umUsuario->save();
        }
        
        //cria um usuário e associa ele em um perfil de motorista
        $umUsuario = new User();
        $umUsuario->name = $faker->name();
        $umUsuario->email = 'motorista@gmail.com';
        $umUsuario->password = Hash::make('password');
        $umUsuario->save();
        
        $motorista = new Profile();
        $motorista->user()->associate($umUsuario);
        $motorista->descricao = "motorista";
        $motorista->save();

        //cria um usuário e associa ele em um perfil de administrador
        $umUsuario = new User();
        $umUsuario->name = "Tiago Rios da Rocha";
        $umUsuario->email = 'tiagoriosrocha@gmail.com';
        $umUsuario->password = Hash::make('12345678');
        $umUsuario->save();
        
        $motorista = new Profile();
        $motorista->user()->associate($umUsuario);
        $motorista->descricao = "administrador";
        $motorista->save();
    }
}
