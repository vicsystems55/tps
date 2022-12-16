<?php

namespace App\Http\Controllers;

use App\Imports\LotBoqImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LotBoqController extends Controller
{
    //

    public function importBoq(Request $request)
    {
        // upload boq for a lot

        $validated = $request->validate([
            'lot_id' => 'required',
            'facility_id' => 'required',
        ]);

        $boq = Excel::import(new LotBoqImport($request->lot_id, $request->facility_id), 'boq.xlsx');
        
    }
}
