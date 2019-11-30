<?php

use ProjectG\Models\User;
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
        User::create([
            'ra'       => '123456',
            'name'     => 'Aluno Univem',
            'email'    => 'aluno@univem.edu.br',
            'password' => bcrypt('1234'),
        ]);
    }
}

