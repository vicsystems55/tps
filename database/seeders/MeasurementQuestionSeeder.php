<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasurementQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('measurement_questions')->insertOrIgnore([

            [
                'name' => 'PRELIMINARY',
                'facility_id' => 1,
            ],

            [
                'name' => 'BOREHOLE DRILLING',
                'facility_id' => 1,
            ],

            [
                'name' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'facility_id' => 1,
            ],

            [
                'name' => 'TANK AND STANCHION',
                'facility_id' => 1,
            ],

            [
                'name' => 'PLUMBING, TAP ISLAND AND RETICULATION',
                'facility_id' => 1,
            ],

            [
                'name' => 'EXCAVATION AND EARTH WORK',
                'facility_id' => 1,
            ],

            [
                'name' => 'CONCRETE WORK',
                'facility_id' => 1,
            ],

            [
                'name' => 'BLOCK WORK',
                'facility_id' => 1,
            ],

            [
                'name' => 'FORM WORK',
                'facility_id' => 1,
            ],

            [
                'name' => 'METAL WORK',
                'facility_id' => 1,
            ],

            [
                'name' => 'FINISHES',
                'facility_id' => 1,
            ],

            [
                'name' => 'CONSTRUTION',
                'facility_id' => 1,
            ],

            [
                'name' => 'FORMWORK',
                'facility_id' => 1,
            ],

            [
                'name' => 'SIGNBOARD',
                'facility_id' => 1,
            ],

            //

            [
                'name' => 'PRELIMINARY',
                'facility_id' => 2,
            ],

            [
                'name' => 'BOREHOLE DRILLING AND PLATFORMING',
                'facility_id' => 2,
            ],

            [
                'name' => 'SOAK PIT',
                'facility_id' => 2,
            ],

            [
                'name' => 'CONSTRUCTION OF SIGNBOARD',
                'facility_id' => 2,
            ],

            [
                'name' => 'TANK AND STANCHION',
                'facility_id' => 2,
            ],

            [
                'name' => 'PLUMBING, TAP ISLAND AND RETICULATION',
                'facility_id' => 2,
            ],

            [
                'name' => 'EXCAVATION AND EARTH WORK',
                'facility_id' => 2,
            ],

            [
                'name' => 'CONCRETE WORK',
                'facility_id' => 2,
            ],

            [
                'name' => 'BLOCK WORK',
                'facility_id' => 2,
            ],

            [
                'name' => 'FORM WORK',
                'facility_id' => 2,
            ],

            [
                'name' => 'METAL WORK',
                'facility_id' => 2,
            ],

            [
                'name' => 'FINISHES',
                'facility_id' => 2,
            ],

            [
                'name' => 'SIGNBOARD',
                'facility_id' => 2,
            ],

            [
                'name' => 'BOREHOLE DRILLING',
                'facility_id' => 2,
            ],

            [
                'name' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'facility_id' => 2,
            ],

            

            

            
            
            
        ]);
            
    }
}
