<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;


class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('programmes')->insertOrIgnore([

            [
                'name' => 'IMPROVING WATER SANITATION AND HYGIENE',
                'code' => 'IWASH 2022',
                'year' => '2022'
            ],



        
        ]);


    }
}
