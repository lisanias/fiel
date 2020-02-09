<?php

use App\Igreja;
use Illuminate\Database\Seeder;

class IgrejasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Igreja::create([
            'nome' => "Casa de Oração Para todos os Povos",
        ] );

        Igreja::create([
            'nome' => "Igreja Batista Filadelfia",
        ]);

        Igreja::create([
            'nome' => "Igreja Metodista Central",
        ]);

        Igreja::create([
            'nome' => "Sagradas Missoes",
        ]);

        Igreja::create([
            'nome' => "Comunidade Água Viva",
        ]);

        Igreja::create([
            'nome' => "Igreja Nova Aliança",
        ]);

        Igreja::create([
            'nome' => "Comunidade Zona Sul",
        ]);

        Igreja::create([
            'nome' => "Assembleia de Deus",
        ]);

        Igreja::create([
            'nome' => "Igreja Missionaria",
        ]);

        Igreja::create([
            'nome' => "Centro Cristão Vida Abundante",
        ]);

        Igreja::create([
            'nome' => "Igreja das Nações",
        ]);
    }
}
