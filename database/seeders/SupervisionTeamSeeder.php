<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;


class SupervisionTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('supervision_teams')->insertOrIgnore([

            [
                'name' => 'ROBILOR',
            ],

            [
                'name' => 'SOURCE WATER',         
            ],

        
        ]);


    }
}
