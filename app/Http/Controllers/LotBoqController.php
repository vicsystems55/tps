<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\LotBoq;
use Illuminate\Http\Request;

use App\Imports\LotBoqImport;
use App\Models\SiteLotBoqLineAnswer;
use Maatwebsite\Excel\Facades\Excel;

class LotBoqController extends Controller
{
    //

    public function importBoq(Request $request)
    {
        // upload boq for a lot


        // return $request->lot_id;

        $request->validate([
            'lot_id' => 'required',
            'facility_id' => 'required',
            'uploadedBoq' => 'mimes:xlsx,xls,'
        ]);


        // return $request->file('uploadedBoq');

        $doc = $request->file('uploadedBoq');

        // return $doc->getClientOriginalExtension();

        $new_name = rand() . "." . $doc->getClientOriginalExtension();

        $doc->move(public_path(), $new_name);



        $boq = Excel::import(new LotBoqImport($request->lot_id, $request->facility_id), $new_name);

        $allSites = Site::where('lot_id', $request->lot_id)->get();

        $lotBoqLines = LotBoq::where('lot_id', $request->lot_id)->get();

        foreach ($allSites as $site) {
            # code...

            foreach ($lotBoqLines as $lotBoqLine) {
                # code...
                SiteLotBoqLineAnswer::updateOrCreate([
                    'site_id' => $site->id,
                    'lot_boq_id' => $lotBoqLine->id
                ],[
                    'site_id' => $site->id,
                    'lot_boq_id' => $lotBoqLine->id
                ]);
            }
        }

    }

    public function lotBoq($lot)
    {
        # code...

        $boqLines = LotBoq::where('lot_id', $lot)->get();

        return view('admin_dashboard.lot_boq', compact('boqLines'));
    }
}
