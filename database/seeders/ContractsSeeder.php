<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;


class ContractsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('contracts')->insertOrIgnore([

            [
            
            'desc' => 'ZAMFARA IWASH 2022',
            'state_id' => 2,
            'phase' => '',
            'tranch' => 'TRANCH A',
            'award_date' => '2022-08-19',
            'duration_in_months' => '',
            'delivery_date' => '2022-11-19',
            'programme_id' => '1',
            'name' => 'KEBBI IWASH 2022',

            ],

            [
            
            'desc' => 'ZAMFARA IWASH 2022',
            'state_id' => 3,
            'phase' => '',
            'tranch' => 'TRANCH A',
            'award_date' => '2022-08-19',
            'duration_in_months' => '',
            'delivery_date' => '2022-11-19',
            'programme_id' => '1',
            'name' => 'SOKOTO IWASH 2022',

            ],

            

            [
            
            'desc' => 'ZAMFARA IWASH 2022',
            'state_id' => 4,
            'phase' => '',
            'tranch' => 'TRANCH A',
            'award_date' => '2022-08-19',
            'duration_in_months' => '',
            'delivery_date' => '2022-11-19',
            'programme_id' => '1',
            'name' => 'ZAMFARA IWASH 2022',

            ],



        ]);


    }
}
