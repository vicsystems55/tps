<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;


class CriticalStageQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('critical_stage_questions')->insertOrIgnore([

            [
                'question' => 'Geophysical survey done? (sight survey result)',
                'type' => 'drop_down',
                'order' => 1,
                'status' => 'active',
                'critical_stage' => 1,
                'facility_id' => 1,
            ],

            [
                'question' => 'Material of casing/screen',
                'type' => '',
                'order' => 2,
                'status' => 'active',
                'critical_stage' => 1,
                'facility_id' => 1,
            ],

            [
                'question' => 'Diameter of casing/screen(Inches)',
                'type' => 'drop_down',
                'order' => 3,
                'status' => 'active',
                'critical_stage' => 1,
                'facility_id' => 1,
            ],

            [
                'question' => 'Casing/screen pressure rating (bar)',
                'type' => '',
                'order' => 4,
                'status' => 'active',
                'critical_stage' => 1,
                'facility_id' => 1,
            ],

            [
                'question' => 'Cased depth of the borehole/well (Meters)',
                'type' => 'drop_down',
                'order' => 5,
                'status' => 'active',
                'critical_stage' => 1,
                'facility_id' => 1,
            ],

            [
                'question' => 'Equipment used for BH/Well Pumping Test',
                'type' => '',
                'order' => 6,
                'status' => 'active',
                'critical_stage' => 1,
                'facility_id' => 1
            ],

            [
                'question' => 'Time for pumping test and recovery(hours)',
                'type' => 'drop_down',
                'order' => 7,
                'status' => 'active',
                'critical_stage' => 1,
                'facility_id' => 1,
            ],

            [
                'question' => 'Borehole/well Yield/Discharge (Litres/Hour)',
                'type' => '',
                'order' => 8,
                'status' => 'active',
                'critical_stage' => 1,
                'facility_id' => 1,
            ],

            [
                'question' => 'Outfall(drainage) provided during BH/Well pumping test?',
                'type' => '',
                'order' => 9,
                'status' => 'active',
                'critical_stage' => 1,
                'facility_id' => 1,
            ],

            [
                'question' => 'Dynamic water level(meters)',
                'type' => '',
                'order' => 10,
                'status' => 'active',
                'critical_stage' => 1,
                'facility_id' => 1,
            ],

            [
                'question' => 'Static water level(meters)',
                'type' => '',
                'order' => 11,
                'status' => 'active',
                'critical_stage' => 1,
                'facility_id' => 1,
            ],

            [
                'question' => 'Water samples for analysis taken by qualified personnel?',
                'type' => '',
                'order' => 12,
                'status' => 'active',
                'critical_stage' => 1,
                'facility_id' => 1,
            ],


            [
                'question' => 'Remark',
                'type' => '',
                'order' => 12,
                'status' => 'active',
                'critical_stage' => 1,
                'facility_id' => 1,
            ],


            [
                'question' => 'Water quality analysis carried out by the Contractor?(sightreport)',
                'type' => '',
                'order' => 13,
                'status' => 'active',
                'critical_stage' => 2,
                'facility_id' => 1,
            ],

            [
                'question' => 'Name of the off-site laboratory',
                'type' => '',
                'order' => 14,
                'status' => 'active',
                'critical_stage' => 2,
                'facility_id' => 1,
            ],

            [
                'question' => 'Biological Characteristics acceptable?',
                'type' => '',
                'order' => 15,
                'status' => 'active',
                'critical_stage' => 2,
                'facility_id' => 1,
            ],

            [
                'question' => 'Chemical Characteristics acceptable?',
                'type' => '',
                'order' => 16,
                'status' => 'active',
                'critical_stage' => 2,
                'facility_id' => 1,
            ],

            [
                'question' => 'Physical Characteristics acceptable?',
                'type' => '',
                'order' => 17,
                'status' => 'active',
                'critical_stage' => 2,
                'facility_id' => 1,
            ],

            [
                'question' => 'Material used for sanitary seal/grouting',
                'type' => '',
                'order' => 18,
                'status' => 'active',
                'critical_stage' => 2,
                'facility_id' => 1,
            ],

            [
                'question' => 'Length of sanitary seal/grouting(meters)',
                'type' => '',
                'order' => 18,
                'status' => 'active',
                'critical_stage' => 2,
                'facility_id' => 1,
            ],

            [
                'question' => 'Coordinates (Smartphone)',
                'type' => '',
                'order' => 19,
                'status' => 'active',
                'critical_stage' => 2,
                'facility_id' => 1,
            ],

            [
                'question' => 'REMARKS',
                'type' => '',
                'order' => 19,
                'status' => 'active',
                'critical_stage' => 2,
                'facility_id' => 1,
            ],

            [
                'question' => 'REMARKS',
                'type' => '',
                'order' => 19,
                'status' => 'active',
                'critical_stage' => 2,
                'facility_id' => 1,
            ],

            [
                'question' => 'If Aggregates for concrete is YES,use all numberings with B, if NO use the numberings without B',
                'type' => '',
                'order' => 20,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'Excavation for stanchion footings to specification?',
                'type' => '',
                'order' => 21,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'Excavation for stanchion footings and treatment house foundation to specification?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'Aggregates for concrete?',
                'type' => '',
                'order' => 21,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'Aggregates for concrete works with strength of blocks for treatment house?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'Cement of good quality?',
                'type' => '',
                'order' => 21,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'Blinding on excavations?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'Concrete mix ratio?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'Concrete workable?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'Reinforcements of good quality,size and deformed type 2?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'Bending and placing of reinforcements as in design?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'Effective cover to reinforcements provided?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'Holding Down bolts of the right size?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'HD bolts properly fixed and plumbed?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],

            [
                'question' => 'REMARKS',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 3,
                'facility_id' => 1,
            ],
//
            
            [
                'question' => 'Base plate dimensions to specification?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'Universal beam/column sections?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'Angle irons?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'Steel grating?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'Number of PVC tanks as specified?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'PVC tanks new',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'Colour of tanks black?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'Volume of each tank as specified?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'Size/diameter of all pipes?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'Pressure rating of all pipes as specified?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'Solar panels new free of cracks and defects?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'Total wattage of panels to specification?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'Size/diameter of all cables as specified?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'REMARKS',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],

            [
                'question' => 'Treatment required?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 4,
                'facility_id' => 1,
            ],


            [
                'question' => 'Solar pump type SQ flex and CU 200?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 5,
                'facility_id' => 1,
            ],

            [
                'question' => 'Cable installed complete?, if NO use the numberings without B',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 5,
                'facility_id' => 1,
            ],

            [
                'question' => 'Level Switch installed?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 5,
                'facility_id' => 1,
            ],

            [
                'question' => 'Excavation for pump security to specification?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 5,
                'facility_id' => 1,
            ],

            [
                'question' => 'Metal steel box of the right gauge, size and done as in the drawing?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 5,
                'facility_id' => 1,
            ],

            [
                'question' => 'Padlocks installed on the steel box as specified?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 5,
                'facility_id' => 1,
            ],


            [
                'question' => 'Bending and placing of reinforcements as in design?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 5,
                'facility_id' => 1,
            ],

            [
                'question' => 'Concrete mix ratio adequate and placed as specified?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 5,
                'facility_id' => 1,
            ],
            [
                'question' => 'Locally-assembled Lightening?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 5,
                'facility_id' => 1,
            ],

            [
                'question' => 'Capture solar pump with CU 200',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 5,
                'facility_id' => 1,
            ],

            [
                'question' => 'Capture metal steel box for pump security',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 5,
                'facility_id' => 1,
            ],

            [
                'question' => 'Capture pump security being done showing, steel box, reinforcements and concrete',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 5,
                'facility_id' => 1,
            ],

            //

            [
                'question' => 'Reticulation and tap island done?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'System test-ran?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'Period of test run (Hours)?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'Final checks on completed stanchion done?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'All components of facility functional?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'Signpost installed?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'Facility fenced?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'Entire system disinfected?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'What chemical was used to disinfect the system?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'All components for treatment supplied and installed as specified?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'Treatment components functioning as specified?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'Final checks on completed treatment house?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'Post treatment water quality analysis carried out by the Contractor? (sight report)?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'Name of the off-site laboratory',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'Biological Characteristics acceptable?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'Chemical Characteristics acceptable?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'Physical Characteristics acceptable?',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            [
                'question' => 'Remark',
                'type' => '',
                'order' => 22,
                'status' => 'active',
                'critical_stage' => 6,
                'facility_id' => 1,
            ],

            


            

            

            

            

            

            

            

            

          
            


        ]);


    }
}
