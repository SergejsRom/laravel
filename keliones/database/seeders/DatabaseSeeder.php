<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $countries = [
            'Maldives',
            'Croatia',
            'Italy',
            'Australia',
            'Cambogia',
            'North Korea',
            'South Korea',
            'Japan',
        ];

        foreach($countries as $country_name) {
            DB::table('countries')->insert([
                'country_name' => $country_name
            ]);
        }


        DB::table('users')->insert([
            'name' => 'Sergejs',
            'email' => 'sergejs@gmail.com',
            'password' => Hash::make('123'),
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Andrius',
            'email' => 'andrius@gmail.com',
            'password' => Hash::make('123'),
            
        ]);

    }
}
