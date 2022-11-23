<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // $this->call(UserTableSeeder::class);
        
        // $this->call(StatesTableSeeder::class);
        // $this->call(Lgas_1_TableSeeder::class);
        // $this->call(Lgas_2_TableSeeder::class);
        // $this->call(Lgas_3_TableSeeder::class);
        // $this->call(Lgas_4_TableSeeder::class);
        // $this->call(ProgrammeSeeder::class);
        // $this->call(ContractsSeeder::class);

        // $this->call(ContractorSeeder::class);
        // $this->call(SupervisionTeamSeeder::class);
        // $this->call(FacilitySeeder::class);
        // $this->call(SiteProfileAttributesSeeder::class);
        $this->call(CriticalStageQuestionsSeeder::class);

        // $this->call(LotsSeeder::class);





        // $this->call(InventorySeeder::class);
        // $this->call(AccountMappingSeeder::class);

        
    }
}
