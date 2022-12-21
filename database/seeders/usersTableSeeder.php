<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [ 
                [ 
                    'name' => 'chaiwat', 
                    'email' => 'joerocknpc@gmail.com', 
                    'password' => Hash::make('11111111'), 
                ], 
                [ 
                    'name' => 'fahsai', 
                    'email' => 'fahsaitharnchanok@gmail.com', 
                    'password' => Hash::make('11111111'), 
                ] 
        ]);
    }
}
