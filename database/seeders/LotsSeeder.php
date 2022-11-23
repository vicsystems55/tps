<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;


class LotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('lots')->insertOrIgnore([

            [
                'contractor_id' => 11,
                'state_id' => 33,
                'code' => 'CIMM_SOK_WF-1',
                'lot_no' => '1',
                'surfix' => 'WF',
                'prefix' => 'WF',
                'total_cost' => 48679390,
                'unicef_cost' => 48679390,
                'contract_id' => 2,
            ],


            [
                'contractor_id' => 1,
                'state_id' => 33,
                'code' => 'MZ_SOK_WF-2',
                'lot_no' => '2',
                'surfix' => 'WF',
                'prefix' => 'WF',
                'total_cost' => 59461743,
                'unicef_cost' => 59461743,
                'contract_id' => 2,
            ],

            



        
        ]);


    }
}


