<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);
        for ($i = 1; $i <= 5; $i++) 
        {
            DB::table('users')->insert([
                'name' => 'demo user '.$i,
                'email' => 'user'.$i.'@example.com',
                'password' => Hash::make('123456'),
                'role' => 'user'
            ]);
       }


    }
}
