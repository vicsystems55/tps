<?php

namespace App\Imports;

use App\Models\Lot;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LotImport implements ToModel, WithHeadingRow 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Lot([
            //
            'id' => $row['id'],
            'contractor_id' => $row['contractor_id'],
            'state_id' => $row['state_id'],
            'code' => $row['code'],
            'lot_no' => $row['lot_no'],
            'surfix' => $row['surfix'],
            'prefix' => $row['prefix'],
            'total_cost' => $row['total_cost'],
            'unicef_cost' => $row['unicef_cost'],
            'contract_id' => $row['contract_id'],
            'facility_id' => $row['facility_id'],


        ]);
    }
}
