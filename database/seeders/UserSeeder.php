<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'name' => 'moslem',
            'family'=>'teymoori',
            'email' => 'm@gmail.com',
            'password' => Hash::make('Moslem1200034635'),
            'role' => 'teacher'
        ]);
    }
}
