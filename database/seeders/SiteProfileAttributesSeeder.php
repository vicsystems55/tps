<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;


class SiteProfileAttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('site_profile_attributes')->insertOrIgnore([

            [
                'question' => 'Site possession',
                'type' => 'check',
                'order' => 1,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 1,
            ],

            [
                'question' => 'Geophysical Survey',
                'type' => 'check',
                'order' => 2,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 1,
            ],

            [
                'question' => '	Drilling and casing with development',
                'type' => 'check',
                'order' => 3,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 1,
            ],

            [
                'question' => 'Pumping Test',
                'type' => 'check',
                'order' => 4,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 1,
            ],

            [
                'question' => 'Water Quality analysis',
                'type' => 'check',
                'order' => 5,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 1,
            ],

            [
                'question' => 'Grouting Platform Construction and Soak Pit',
                'type' => 'check',
                'order' => 6,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 1,
            ],

            [
                'question' => 'Hand Pump Installation',
                'type' => 'check',
                'order' => 7,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 1,
            ],

            [
                'question' => 'Finishing',
                'type' => 'check',
                'order' => 8,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 1,
            ],

            [
                'question' => '	Sign Board',
                'type' => 'check',
                'order' => 9,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 1,
            ],


            [
                'question' => 'Site possession',
                'type' => 'check',
                'order' => 1,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

            [
                'question' => 'Geophysical Survey',
                'type' => 'check',
                'order' => 2,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

            [
                'question' => 'Drilling and casing with development',
                'type' => 'check',
                'order' => 3,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

            [
                'question' => 'Pumping Test',
                'type' => 'check',
                'order' => 4,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

            [
                'question' => 'Water Quality analysis',
                'type' => 'check',
                'order' => 5,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

            [
                'question' => 'Grouting and Installation of pump security',
                'type' => 'check',
                'order' => 6,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

            [
                'question' => 'Tower foundation Construction',
                'type' => 'check',
                'order' => 7,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

            [
                'question' => 'Tower Construction',
                'type' => 'check',
                'order' => 8,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

            [
                'question' => 'Reticulation and Stand taps',
                'type' => 'check',
                'order' => 9,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

            [
                'question' => 'Installation of Tanks panels and ligthen protection',
                'type' => 'check',
                'order' => 10,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

            [
                'question' => 'Solar Pump Installation',
                'type' => 'check',
                'order' => 11,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

            [
                'question' => 'Testing and Disinfection',
                'type' => 'check',
                'order' => 12,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

            [
                'question' => 'Finishing',
                'type' => 'check',
                'order' => 13,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

            [
                'question' => 'Fencing & Sign Board',
                'type' => 'check',
                'order' => 14,
                'status' => 'unchecked',
                'category' => '1',
                'facility_id' => 2,
            ],

         

        ]);


    }
}
