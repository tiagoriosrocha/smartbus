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
        // Dados dos pontos
        $pontos = [
            [
                'nome' => 'Instituto Estadual de Educação Edmundo Roewer',
                'endereco' => 'R. Firmino de Paula, 434 - Centro, Ibirubá - RS, 98200-000',
                'complemento' => 'ponto de onibus em frente a escola',
                'latitude' => -28.627583,
                'longitude' => -53.085083
            ],
            [
                'nome' => 'Escola Municipal de Ensino Fundamental Floresta',
                'endereco' => 'R. Rui Barbosa, 1150 - Floresta, Ibirubá - RS, 98200-000',
                'complemento' => 'ponto de onibus em frente a escola',
                'latitude' => -28.619500,
                'longitude' => -53.081306
            ],
            [
                'nome' => 'Escola Municipla de Educação Infantil Floresta',
                'endereco' => 'R. Valença, 389-287 - Floresta, Ibirubá - RS, 98200-000',
                'complemento' => 'ponto de onibus em frente a creche',
                'latitude' => -28.620722,
                'longitude' => -53.082528
            ],
            [
                'nome' => 'Clínica do Dr. Roger Machado',
                'endereco' => 'R. Diniz Dias, 191 - Odila, Ibirubá - RS, 98200-000',
                'complemento' => 'ao lado da Clínica do Dr. Roger Machado',
                'latitude' => -28.622694,
                'longitude' => -53.090167
            ],
            [
                'nome' => 'Funeraria Conrad',
                'endereco' => 'R. Diniz Dias, 1214-1228 - Santa Helena, Ibirubá - RS, 98200-000',
                'complemento' => 'a esquina da funeraria Conrad',
                'latitude' => -28.624472,
                'longitude' => -53.090139
            ],
            [
                'nome' => 'Escola Santa Terezinha',
                'endereco' => 'R. Getúlio Vargas, 1007 - Centro, Ibirubá - RS, 98200-000',
                'complemento' => 'em frente a escola Santa Terezinha',
                'latitude' => -28.628750,
                'longitude' => -53.090583
            ],
            [
                'nome' => 'TK',
                'endereco' => 'R. Mauá, 1244 - São Jacó, Ibirubá - RS, 98200-000',
                'complemento' => 'em frente a clinica Esatta',
                'latitude' => -28.637611,
                'longitude' => -53.089111
            ],
            [
                'nome' => 'IFRS',
                'endereco' => 'R. Gen. Osório - Hermany, Ibirubá - RS, 98200-000',
                'complemento' => '',
                'latitude' => -28.650047,
                'longitude' => -53.103031
            ],
            [
                'nome' => 'Escola Infantil Hermany (Creche)',
                'endereco' => 'R. Gen. Osório - Hermany, Ibirubá - RS, 98200-000',
                'complemento' => 'na esquina da creche da hermany',
                'latitude' => -28.632972,
                'longitude' => -53.116528
            ],
            [
                'nome' => 'Clube Campestre Colibri',
                'endereco' => 'R. Georg Valter Dürr - Jardim do Sol, Ibirubá - RS, 98200-000',
                'complemento' => 'atrás do Colibri',
                'latitude' => -28.634639,
                'longitude' => -53.100583
            ],
            [
                'nome' => 'Cohab',
                'endereco' => 'R. Leopoldo Jost, 572 - Hermany, Ibirubá - RS, 98200-000',
                'complemento' => 'em frente a Cohab',
                'latitude' => -28.635750,
                'longitude' => -53.111028
            ],
            [
                'nome' => 'Mundial Lava Rápido',
                'endereco' => 'R. Gen. Osório, 801 - Centro, Ibirubá - RS, 98200-000',
                'complemento' => 'em frente ao lavador mundial',
                'latitude' => -28.631833,
                'longitude' => -53.100083
            ],
            [
                'nome' => 'Escola Municipal de Ensino fundamental Hermany',
                'endereco' => 'Av. Brasil, 3295 - Hermany, Ibirubá - RS, 98200-000',
                'complemento' => 'em frente a escola Hermany',
                'latitude' => -28.635750,
                'longitude' => -53.116528
            ],
            [
                'nome' => "Caixa d'agua",
                'endereco' => 'R. Mauá, 1347 - Jardim, Ibirubá - RS, 98200-000',
                'complemento' => 'ao lado da caixa d\'agua da jardim',
                'latitude' => -28.636250,
                'longitude' => -53.095472
            ],
            [
                'nome' => 'Escola Estadual de Educação Básica General Osório',
                'endereco' => 'R. Henrique Roetger, 845 - Centro, Ibirubá - RS, 98200-000',
                'complemento' => 'em frente a escola General Osório',
                'latitude' => -28.628528,
                'longitude' => -53.097306
            ],
            [
                'nome' => 'Pipico Motos',
                'endereco' => 'R. Gen. Osório, 981 - São Jacó, Ibirubá - RS, 98200-000',
                'complemento' => 'ao lado do Pipico motos',
                'latitude' => -28.631861,
                'longitude' => -53.099389
            ],
            [
                'nome' => 'Estetica automotiva 600',
                'endereco' => 'R. Três de Outubro, 1435 - Santa Helena, Ibirubá - RS, 98200-000',
                'complemento' => 'ao lado da estetica automotiva 600',
                'latitude' => -28.626472,
                'longitude' => -53.083250
            ],
        ];

        // Inserir os pontos no banco de dados
        foreach ($pontos as $ponto) {
            $p = new Ponto();
            $p->nome = $ponto['nome'];
            $p->endereco = $ponto['endereco'];
            $p->complemento = $ponto['complemento'];
            $p->latitude = $ponto['latitude'];
            $p->longitude = $ponto['longitude'];
            $p->save();
        }






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
        
        //crio 20 pontos fake no banco
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
