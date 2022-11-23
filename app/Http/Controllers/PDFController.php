<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

use App\Models\Site;

use App\Models\SiteProfileAttribute;

use App\Models\CriticalStageQuestion;


use Illuminate\Support\Facades\Storage;

use Auth;

class PDFController extends Controller
{
    //

    public function generate_pdf()
    {


            $data = [
                'name' => 'victor'
            ];
      

        $pdf = Pdf::loadView('pdf.report', $data)->setPaper('a4', 'portrait')->setOptions([
        
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true
        
        ]);;


      

        $file_name = rand(123, 1233);
            
        return $file = Storage::put('public/receipts/'.$file_name.'.pdf', $pdf->output());
    }

    public function generate_report(Request $request)
    {

        $site_id = $request->site_id;

        $site = Site::with(['lga', 'facility', 'lot'])->find($site_id);

        $site_profile = SiteProfileAttribute::where('facility_id', $site->facility_id)->get();

        $critical_stage_questions = CriticalStageQuestion::where('facility_id', 1)->get();

    
  

        $pdf = Pdf::loadView('pdf.report_template', [
            'site' => $site
        ])->setPaper('a4', 'portrait')->setOptions([
        
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true
        
        ]);

        $file_name = rand(123, 1233);
        
        Storage::put('public/receipts/'.$file_name.'.pdf', $pdf->output());

        $role = Auth::user()->role;
        
        return redirect($role.'/success');
    }

    public function preview_report(Request $request)
    {
        
        $site_id = $request->site_id;

        $site = Site::with(['lga', 'facility', 'lot'])->find($site_id);

        $site_profile = SiteProfileAttribute::where('facility_id', $site->facility_id)->get();

        $critical_stage_questions = CriticalStageQuestion::where('facility_id', 1)->get();

        // return $site;


        return view('pdf.report_template', compact('site', 'site_profile', 'critical_stage_questions'));
    }
}
