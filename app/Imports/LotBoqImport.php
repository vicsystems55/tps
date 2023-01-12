<?php

namespace App\Imports;

use App\Models\LotBoq;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class LotBoqImport implements ToModel, WithHeadingRow 
{

    public function  __construct($lot_id, $facility_id)
    {
        $this->lot_id= $lot_id;
        $this->facility_id= $facility_id;

    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new LotBoq([
            //
            'lot_id' => $this->lot_id,
            'facility_id' => $this->facility_id,
            'category' => $row['category'],
            'description' => $row['description'],
            'unit' => $row['unit'],
            'qty' => $row['qty'],
            'rate' => $row['rate'],
            'amount' => $row['amount'],
            'status' => 'active',

        ]);
    }
}

