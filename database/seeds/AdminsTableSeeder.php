<?php

use ProjectG\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'     => 'Admin',
            'email'    => 'admin@eclimber.com.br',
            'password' => Hash::make('1234'),
        ]);
    }
}
