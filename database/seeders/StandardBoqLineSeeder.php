<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandardBoqLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('standard_boq_lines')->insertOrIgnore([
            [
                'facility_id' => '1',
                'category' => 'PRELIMINARY',
                'description' => 'Initial Mobilization and final Demobilization of equipment and personnel to and from site from contractor’s base office.',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '150000',
                'amount' => '150000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'PRELIMINARY',
                'description' => 'Inter sites Mobilization and Demobilization of equipment and personnel.',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '50000',
                'amount' => '50000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'PRELIMINARY',
                'description' => 'Clearing of site',
                'category_description' => '1',
                'unit' => 'M²',
                'qty' => '100',
                'rate' => '400',
                'amount' => '50000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'BOREHOLE DRILLING',
                'description' => 'Conduct geophysical survey (field work, interpretation and report to locate productive borehole sites, delineate aquiferous zones and identify horizons vulnerable to saltwater intrusion and mineralization) for the location of borehole at a suitable site.',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '70000',
                'amount' => '70000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'BOREHOLE DRILLING',
                'description' => 'Drilling of borehole in basement/sedimentary formation',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '120',
                'rate' => '6000',
                'amount' => '720000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'BOREHOLE DRILLING',
                'description' => 'Supply and install 125mm diameter uPVC casings of 12 bar pressure rating.',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '108',
                'rate' => '4500',
                'amount' => '486000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'BOREHOLE DRILLING',
                'description' => 'Supply and install 125mm diameter uPVC screen of 12 bar pressure rating.',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '12',
                'rate' => '4700',
                'amount' => '56400',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'BOREHOLE DRILLING',
                'description' => 'Supply and place approved gravel 5-10mm size for casings and screens below ground surface.',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '50000',
                'amount' => '50000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'BOREHOLE DRILLING',
                'description' => 'Borehole cleaning and development till water is clear and silt free.',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '60000',
                'amount' => '60000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'BOREHOLE DRILLING',
                'description' => 'Conduct continuous borehole pump test for not less than 6 hour period.',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '120000',
                'amount' => '120000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'BOREHOLE DRILLING',
                'description' => 'Conduct water quality analysis (biological, chemical and physical) and borehole disinfection',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '70000',
                'amount' => '70000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'BOREHOLE DRILLING',
                'description' => 'Provide and place cement grout down to 5m from surface to protect borehole from surface water.',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '80000',
                'amount' => '80000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'BOREHOLE DRILLING',
                'description' => 'Supply and Install pump type SQ flex 3-105 + CU200 switch box. (Refer to pump and wattage table) branded or with engraving as specified by RUWASSA. NOTE: All pump cartons must be returned to the state RUWASSA office for destruction',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '70000',
                'amount' => '70000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'description' => 'Supply and Install pump type SQ flex 3-105 + CU200 switch box. (Refer to pump and wattage table) branded or with engraving as specified by RUWASSA. NOTE: All pump cartons must be returned to the state RUWASSA office for destruction',
                'category_description' => '1',
                'unit' => 'Set',
                'qty' => '1',
                'rate' => '950000',
                'amount' => '950000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'description' => 'Supply and Install 3M scotch cast Cable jointing kit & earthing',
                'category_description' => '1',
                'unit' => 'Set',
                'qty' => '1',
                'rate' => '30000',
                'amount' => '30000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'description' => 'Supply & Install Solar mono/polycrystalline panels as in TSS',
                'category_description' => '1',
                'unit' => 'Watts',
                'qty' => '2000',
                'rate' => '220',
                'amount' => '440000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'description' => 'Supply & Install Solar mono/polycrystalline panels as in TSS',
                'category_description' => '1',
                'unit' => 'Watts',
                'qty' => '2000',
                'rate' => '220',
                'amount' => '440000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'description' => 'Supply & Install Support Structure and frame for panels as in drawing no 3&6',
                'category_description' => '1',
                'unit' => 'NR',
                'qty' => '1',
                'rate' => '170000',
                'amount' => '170000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'description' => 'Supply and Install 4X6mm2 pump motor cables',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '120',
                'rate' => '1500',
                'amount' => '180000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'description' => 'Supply and Install 4mm2 inter-connector cables( Nigeria Cables)',
                'category_description' => '1',
                'unit' => 'Set',
                'qty' => '1',
                'rate' => '50000',
                'amount' => '50000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'description' => 'Supply and Install Marine rope (10mm) as antidrop for the pump',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '120',
                'rate' => '200',
                'amount' => '24000',
                'status' => 'active', 
            ],


            [
                'facility_id' => '1',
                'category' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'description' => 'Supply and Install High pressure 32mm uPVC piping (8bar) for pump installation',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '110',
                'rate' => '1700',
                'amount' => '187000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'description' => 'Supply and Install Locally assembled lightening protection set (with a hard drawn high conductivity copper tape of 1 x  3mm), using made in UK accessories.',
                'category_description' => '1',
                'unit' => 'Set',
                'qty' => '1',
                'rate' => '20000',
                'amount' => '20000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'description' => 'Supply and Install  level switch',
                'category_description' => '1',
                'unit' => 'Set',
                'qty' => '1',
                'rate' => '',
                'amount' => '',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'SOLAR PUMP AND POWER REQUIREMENTS',
                'description' => 'Construct & Install security for the solar pump including reinforced concrete box on the 2 stage opening metal box over the the well head. Note that this MUST be completely underground (REFER TO THE DRAWING No 1&2)',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '120000',
                'amount' => '120000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => 'Excavate:1200mmx1200mmx900mm for pad footings',
                'category_description' => '1',
                'unit' => 'NR',
                'qty' => '4',
                'rate' => '10000',
                'amount' => '40000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => '100mm thick blinding on pad foundations',
                'category_description' => '1',
                'unit' => 'm³',
                'qty' => '0.6',
                'rate' => '30000',
                'amount' => '18000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => 'Pad footing (1200mmx1200mm x900mm)',
                'category_description' => '1',
                'unit' => 'm³',
                'qty' => '5.2',
                'rate' => '21000',
                'amount' => '109200',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => 'Reinforcements for the pad(5 lengths of starter bars Y22 dia with threaded ends and 5.5 lengths of Y16 ',
                'category_description' => '1',
                'unit' => 'length',
                'qty' => '11.5',
                'rate' => '12000',
                'amount' => '138000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => 'Provide base plate 500mmx500mm with 4no, 22.5mm dia.holes (16mm thick)',
                'category_description' => '1',
                'unit' => 'NR',
                'qty' => '4',
                'rate' => '49000',
                'amount' => '196000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => 'Provide 152mmx152mmx37kg/m UC (H-Channel); welded, braced and bolted to 16mm base plate',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '28',
                'rate' => '27000',
                'amount' => '756000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => 'Provide 152mmx152mmx37kg/m as primary beams',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '7.8',
                'rate' => '27000',
                'amount' => '210600',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => 'Provide 152mmx152mmx37kg/m as secondary beams',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '18',
                'rate' => '27000',
                'amount' => '486000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => '60X60X6mm angle bars for brazing & rail',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '102',
                'rate' => '2400',
                'amount' => '244800',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => '60X60X6mm angle bars for brazing',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '45',
                'rate' => '2400',
                'amount' => '108000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => '25mm steel grating 100mmx50mm',
                'category_description' => '1',
                'unit' => 'm²',
                'qty' => '11.7',
                'rate' => '48000',
                'amount' => '561600',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => 'Allow for steel ladder cage, hand rails',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '150000',
                'amount' => '150000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => 'Bolts, gusset plate, angle iron and connection/ plate accessories ',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '90000',
                'amount' => '90000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => 'Prepare tower to receive paint (scrapping, brushing & cleaning rust and dirt), treat with 3 coats of red oxide and apply 3 coats of approved paint (Berger or equivalent) on tower (Aluminium colour) ',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '120000',
                'amount' => '120000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'TANK AND STANCHION',
                'description' => 'Supply  and install approved 4,000Litres BLACK PVC tank and complete with technical specifications ',
                'category_description' => '1',
                'unit' => 'NR',
                'qty' => '2',
                'rate' => '200000',
                'amount' => '400000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'PLUMBING, TAP ISLAND AND RETICULATION',
                'description' => 'Excavate trench 600mmx600mm to receive pvc water distribution pipes to tank location.',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '30',
                'rate' => '800',
                'amount' => '24000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'PLUMBING, TAP ISLAND AND RETICULATION',
                'description' => 'Pipe 32mm water inlet pvc pipes from the borehole location to tank, complete with accessories',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '30',
                'rate' => '2100',
                'amount' => '63000',
                'status' => 'active', 
            ],
            
            [
                'facility_id' => '1',
                'category' => 'PLUMBING, TAP ISLAND AND RETICULATION',
                'description' => 'Excavate  trench (600mm×600mm) and lay Pipe 4 bar 50mm pressure pipe from tank to 6 locations (Tap Islands) in the host community (Priotising the school) , total cummulative distance of 0.8km',
                'category_description' => '1',
                'unit' => 'M',
                'qty' => '800',
                'rate' => '890',
                'amount' => '712000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'PLUMBING, TAP ISLAND AND RETICULATION',
                'description' => 'Provide and install 25mm diameter double head 3 stand posts with (6) PVC sprouts embedded in ',
                'category_description' => '1',
                'unit' => 'NR',
                'qty' => '6',
                'rate' => '180000',
                'amount' => '1080000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'PLUMBING, TAP ISLAND AND RETICULATION',
                'description' => 'Flush and disinfect the whole system (tank, pipes and reticulation line) using high test hypochlorite ',
                'category_description' => '1',
                'unit' => 'LS',
                'qty' => '1',
                'rate' => '80000',
                'amount' => '80000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'PLUMBING, TAP ISLAND AND RETICULATION',
                'description' => 'Provide 5 copies of spiral bound report of work with a soft copy on CD',
                'category_description' => '1',
                'unit' => 'COPY',
                'qty' => '5',
                'rate' => '1000',
                'amount' => '5000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'EXCAVATION AND EARTH WORK',
                'description' => 'Excavate trench to receive fence foundation 600mmx450mmx 50meters total perimeter',
                'category_description' => ' Bill of Quantities For Fencing of solar installations using blocks&wire mesh (Type A, Perimeter = 30m)',
                'unit' => 'm3',
                'qty' => '8.1',
                'rate' => '1000',
                'amount' => '8100',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'EXCAVATION AND EARTH WORK',
                'description' => 'Backfill and ram foundation spread and remove surplus excavated materials from site',
                'category_description' => ' Bill of Quantities For Fencing of solar installations using blocks&wire mesh (Type A, Perimeter = 30m)',
                'unit' => 'm3',
                'qty' => '5',
                'rate' => '600',
                'amount' => '3000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'CONCRETE WORK',
                'description' => 'Pour concrete 1:2:4 in footing for GI pipes 450mmx450mmx 600mm (13 Nr)',
                'category_description' => ' Bill of Quantities For Fencing of solar installations using blocks&wire mesh (Type A, Perimeter = 30m)',
                'unit' => 'm3',
                'qty' => '2',
                'rate' => '20000',
                'amount' => '40000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'CONCRETE WORK',
                'description' => 'Pour concrete 1:2:4 in wall footing 150mm thick ',
                'category_description' => ' Bill of Quantities For Fencing of solar installations using blocks&wire mesh (Type A, Perimeter = 30m)',
                'unit' => 'm3',
                'qty' => '1.7',
                'rate' => '23000',
                'amount' => '39100',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'CONCRETE WORK',
                'description' => 'Provide Coping  50mm thick 250mm wide on top of block work',
                'category_description' => ' Bill of Quantities For Fencing of solar installations using blocks&wire mesh (Type A, Perimeter = 30m)',
                'unit' => 'm3',
                'qty' => '0.5',
                'rate' => '20000',
                'amount' => '10000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'CONCRETE WORK',
                'description' => 'Pour concrete 1:3:6 in Floor 75mm thick of the entire fenced area (covering both the wellhead security)',
                'category_description' => ' Bill of Quantities For Fencing of solar installations using blocks&wire mesh (Type A, Perimeter = 30m)',
                'unit' => 'm3',
                'qty' => '4.3',
                'rate' => '120000',
                'amount' => '516000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'BLOCK WORK',
                'description' => 'Install 150mm sandcrete blocks 450mm high the specified perimeter at sub-structure',
                'category_description' => ' Bill of Quantities For Fencing of solar installations using blocks&wire mesh (Type A, Perimeter = 30m)',
                'unit' => 'm2',
                'qty' => '11',
                'rate' => '32000',
                'amount' => '352000',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'BLOCK WORK',
                'description' => 'Install 150mm sandcrete blocks 450mm high the specified perimeter at super-structure',
                'category_description' => ' Bill of Quantities For Fencing of solar installations using blocks&wire mesh (Type A, Perimeter = 30m)',
                'unit' => 'm2',
                'qty' => '14',
                'rate' => '3400',
                'amount' => '47600',
                'status' => 'active', 
            ],

            [
                'facility_id' => '1',
                'category' => 'FORM WORK',
                'description' => 'Sides and soffits of copping',
                'category_description' => ' Bill of Quantities For Fencing of solar installations using blocks&wire mesh (Type A, Perimeter = 30m)',
                'unit' => 'm',
                'qty' => '7.5',
                'rate' => '1200',
                'amount' => '9000',
                'status' => 'active', 
            ],




        ],

            
            
        ]);
    }
}
