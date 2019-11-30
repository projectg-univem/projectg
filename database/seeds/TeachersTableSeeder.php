<?php

use ProjectG\Models\Teacher;
use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'ra'       => '654321',
            'name'     => 'Professor Univem',
            'email'    => 'professor@univem.edu.br',
            'password' => Hash::make('4321'),
        ]);
    }
}
