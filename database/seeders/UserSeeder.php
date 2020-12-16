<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            'username'=>'admin',
            'mobile' => '3518598229',
            'age' => 30,
            'gender'=>'Male',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$QntNmbEUTBROklOIfKaaieCzNCZukp7aqjdzMNt2SoNcV3jBa.wIG',
            'role' => 'admin',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'username'=>'user',
            'mobile' => '09123652547',
            'age' => 25,
            'gender'=>'Female',
            'email' => 'user@gmail.com',
            'password' => '$2y$10$QntNmbEUTBROklOIfKaaieCzNCZukp7aqjdzMNt2SoNcV3jBa.wIG',
            'role' => 'student',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

    }
}
