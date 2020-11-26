<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'moslem',
            'family'=>'teymoori',
            'email' => 'm@gmail.com',
            'password' => Hash::make('Moslem1200034635'),
            'role' => 'admin'
        ]);
    }
}
