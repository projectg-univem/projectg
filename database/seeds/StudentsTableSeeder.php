<?php

use ProjectG\Models\Student;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'ra'       => '123456',
            'name'     => 'Aluno Univem',
            'email'    => 'aluno@univem.edu.br',
            'password' => Hash::make('1234'),
        ]);
    }
}

