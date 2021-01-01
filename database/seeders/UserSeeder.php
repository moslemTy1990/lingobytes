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
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$QntNmbEUTBROklOIfKaaieCzNCZukp7aqjdzMNt2SoNcV3jBa.wIG',
            'last_login'=>Carbon::now(),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('students')->insert([
            'name' => 'student',
        //    'username'=>'student',
            'email' => 'student@gmail.com',
            'password' => '$2y$10$QntNmbEUTBROklOIfKaaieCzNCZukp7aqjdzMNt2SoNcV3jBa.wIG',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        
    }
}
