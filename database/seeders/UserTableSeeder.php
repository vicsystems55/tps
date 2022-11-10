<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insertOrIgnore([

            [
                'name' => 'Eghosa Ogedegbe',
                'email' => 'eghosa@tpsapp.net',
                'password' => Hash::make('tpsapp1@2022'),
                'user_code' => 'TPS'.rand(11000,99990),
                'role' => 'admin',
            ],

            [
                'name' => 'Ukiaghe Ogedegbe',
                'email' => 'ukiaghe@tpsapp.net',
                'password' => Hash::make('tpsapp2@2022'),
                'user_code' => 'TPS'.rand(11000,99990),
                'role' => 'accounts',
            ],

            [
                'name' => 'Ejiro Ogedegbe',
                'email' => 'ejiro@tpsapp.net',
                'password' => Hash::make('tpsapp3@2022'),
                'user_code' => 'TPS'.rand(11000,99990),
                'role' => 'admin',
            ],

            [
                'name' => 'Victor Asuquo',
                'email' => 'victor@tpsapp.net',
                'password' => Hash::make('tpsapp4@2022'),
                'user_code' => 'TPS'.rand(11000,99990),
                'role' => 'admin',
            ],

            [
                'name' => 'Kingsley Ogedegbe',
                'email' => 'udegbekingsley@gmail.com',
                'password' => Hash::make('tpsapp5@2022'),
                'user_code' => 'TPS'.rand(11000,99990),
                'role' => 'admin',
            ],

            [
                'name' => 'Tukur Rufai',
                'email' => 'tukur@tpsapp.net',
                'password' => Hash::make('tukur@2022'),
                'user_code' => 'TPS'.rand(11000,99990),
                'role' => 'technician',
            ],

            [
                'name' => 'Imoke Moses',
                'email' => 'imoke@tpsapp.net',
                'password' => Hash::make('imoke@2022'),
                'user_code' => 'TPS'.rand(11000,99990),
                'role' => 'technician',
            ],

            [
                'name' => 'Nurudeen',
                'email' => 'nurudeen@tpsapp.net',
                'password' => Hash::make('nurudeen@2022'),
                'user_code' => 'TPS'.rand(11000,99990),
                'role' => 'secretary',
            ],
        ]);
    }
}
