<?php

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
        DB::table('users')->insert([
            'name' => "Lisanias Loback",
            'username' => 'lisanias',
            'email' => 'lisanias@hotmail.com',
            'password' => bcrypt('lucas3131'),
            'avatar' => 'lisanias-3.jpg',
            'created_at' => now(),
        ]);
    }
}
