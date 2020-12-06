<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$QntNmbEUTBROklOIfKaaieCzNCZukp7aqjdzMNt2SoNcV3jBa.wIG',
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => '$2y$10$QntNmbEUTBROklOIfKaaieCzNCZukp7aqjdzMNt2SoNcV3jBa.wIG',
            'role' => 'student'
        ]);

    }
}
