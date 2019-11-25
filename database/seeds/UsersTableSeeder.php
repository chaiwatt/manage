<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'ชัยวัฒน์',
                'email' => 'jo@gmail.com',            
                'password' => Hash::make('11111111')
            ]
        ]);
    }
}
