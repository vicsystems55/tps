<?php

namespace App\Imports;

use App\Models\AllSite;
use App\Models\TestLot;
use App\Models\TestState;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AllProject implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //

        foreach ($collection as $collect ) {

            $testState = TestState::updateOrCreate(
                [
                    'name' => $collect['state']
                ],
                [

                'name' => $collect['state']
                
            ]);

            $testLot = TestLot::updateOrCreate(
                [
                    'name' => $collect['lots']
                ],
                [

                'name' => $collect['lots']
                
            ]);

            AllSite::updateOrCreate([
                'location' => $collect['location']
            ],[
                'test_state_id' => TestState::where('name', $collect['state'])->first()->id,
                'test_lot_id' => TestLot::where('name', $collect['lots'])->first()->id,
                'ward' => $collect['ward'],
                'location' => $collect['location']

            ]);
            
            
        }
    }
}
