<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;


class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('facilities')->insertOrIgnore([

            [
                'name' => 'SMBH',         
            ],

            [
                'name' => 'HPBH',         
            ],

        


        ]);


    }
}
