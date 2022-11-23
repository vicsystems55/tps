<?php

namespace App\Imports;

use App\Models\Site;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class SiteImport implements ToModel, WithHeadingRow 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Site([
            //

            'facility_id' => $row['facility_id'],
            'contract_id' => $row['contract_id'],
            'supervision_team_id' => $row['supervision_team_id'],
            'lga_id' => $row['lga'],
            'lot_id' => $row['lot_id'],
            'percentage_completion' => 0,
            'location' => $row['location'],
            'ward' => $row['ward']
    
        ]);
    }
}
