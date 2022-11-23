<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;


class ContractorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('contractors')->insertOrIgnore([

            [
                'name' => 'MZ AND SONS NIG LTD',         
            ],

            [
                'name' => 'AMAZON DRILLING SERVICES LTD',         
            ],

            [
                'name' => 'MSBEE GLOBAL VENTURES LIMITED',         
            ],

            [
                'name' => 'DALLAS',         
            ],

            [
                'name' => 'WALLTALL',         
            ],

            [
                'name' => 'ARECT',         
            ],

            [
                'name' => 'DISCOVERY CON. INTERLINKS',         
            ],

            [
                'name' => 'RUKMINA',         
            ],

            [
                'name' => 'LEMON DRILLERS',         
            ],

            [
                'name' => 'ARABS & PARTNERS',         
            ],

            [
                'name' => 'CIMMULA NIG LTD',         
            ],

            


        ]);


    }
}
