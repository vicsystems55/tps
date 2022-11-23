<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasurementQuestionFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('measurement_question_forms')->insertOrIgnore([

            [
                "measurement_question_id" => 1,
                'item_description' => 'Initial Mobilization and final Demobilization of equipment and personnel to and from site from contractor’s base office.',
                'unit' => 'LS',
                'qty' => '	1',
                'rate' => '100000',
            ],

            [
                "measurement_question_id" => 1,
                'item_description' => 'Inter sites Mobilization and Demobilization of equipment and personnel.',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '50000',
            ],

            [
                "measurement_question_id" => 1,
                'item_description' => 'Clearing of site',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '200',
            ],



            [
                "measurement_question_id" => 2,
                'item_description' => 'Conduct geophysical survey (field work, interpretation and report to locate productive borehole sites, delineate aquiferous zones and identify horizons vulnerable to saltwater intrusion and mineralization) for the location of borehole at a suitable site.',
                'unit' => 'LS',
                'qty' => '	1',
                'rate' => '200',
            ],

            [
                "measurement_question_id" => 2,
                'item_description' => 'Drilling of borehole in basement/sedimentary formation',
                'unit' => 'M',
                'qty' => '150',
                'rate' => '200',
            ],
            
            
        ]);
            
    }
}
