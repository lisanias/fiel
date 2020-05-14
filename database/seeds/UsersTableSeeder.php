<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*User::create( [
            'name' => "Lisanias Loback",
            'username' => 'lisanias',
            'email' => 'lisanias@hotmail.com',
            'password' => bcrypt('lucas3131'),
            'avatar' => 'lisanias-3.jpg',
        ] );*/

        User::create( [
            'name' => "Vitor Paiva",
            'username' => 'vitor',
            'email' => 'vitorpaivaweb@gmail.com',
            'password' => bcrypt('vitor731'),
            'avatar' => 'vitor_paiva.jpg',
        ] );

        User::create( [
            'name' => "Pr. Desiel",
            'username' => 'desiel',
            'email' => 'prdesiel@hotmail.com',
            'password' => bcrypt('desiel731'),
            'avatar' => 'desiel.jpg',
        ] );

        User::create( [
            'name' => "Pra. Tania",
            'username' => 'tania',
            'email' => 'tanialamonicaazevedo@hotmail.com',
            'password' => bcrypt('tania731'),
            'avatar' => 'tania.jpg',
        ] );

        User::create( [
            'name' => "Elaine",
            'username' => 'elaine',
            'email' => 'elaine.p.v@hotmail.com',
            'password' => bcrypt('elaine731'),
            'avatar' => 'elaine.jpg',
        ] );
    }
}
