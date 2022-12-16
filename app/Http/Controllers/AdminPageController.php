<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\ReportImage;

use App\Models\Lot;

use App\Models\Site;

use App\Models\SiteProfileAttribute;

use App\Models\CriticalStageQuestion;

use App\Models\MeasurementQuestion;


use App\Models\Contract;


use Illuminate\Support\Facades\Http;


use Auth;

class AdminPageController extends Controller
{
    //

    public function index()
    {

      

        $users = User::latest()->get();

        $lots = Lot::latest()->get();

        $sites = Site::latest()->get();


   

        // dd($reports);


        return view('admin_dashboard.index',compact('lots', 'users', 'sites'));
    }

    public function lots()
    {

        $lots = Lot::with(['contractor', 'state', 'sites'])->get();

        // return $lots;
        
                
        return view('admin_dashboard.lots',compact('lots'));
    }

    public function lot($lot_code)
    {

        $lot = Lot::with(['contractor', 'state', 'sites.lga', 'facility'])->where('code', $lot_code)->first();
        $site_profile_attributes = SiteProfileAttribute::get();

        // return $lot;
        
                
        return view('admin_dashboard.lot',compact('lot', 'site_profile_attributes'));
    }

    public function contracts()
    {

        $contracts = Contract::with(['state.lga','lots'])->get();


        $sites = Site::get();

        $lots = Lot::get();



        // return $lots;
        
                
        return view('admin_dashboard.contracts',compact('contracts', 'sites', 'lots'));
    }

    public function site($site_id)
    {

        $site = Site::with(['lga', 'facility', 'lot'])->find($site_id);

        $site_profile = SiteProfileAttribute::where('facility_id', $site->facility_id)->get();

        $critical_stage_questions = CriticalStageQuestion::where('facility_id', 1)->get();

        $measurement_questions = MeasurementQuestion::where('facility_id', $site->facility_id)->get();

        // return $critical_stage_questions;
        
                
        return view('admin_dashboard.site_profile',compact(
            'site', 
            'site_profile', 
            'critical_stage_questions',
            'measurement_questions'
        )); 
    }

    public function sites()
    {

        $sites = Site::all();

        // $site_profile = SiteProfileAttribute::where('facility_id', $site->facility_id)->get();

        // $critical_stage_questions = CriticalStageQuestion::where('facility_id', 1)->get();

        // $measurement_questions = MeasurementQuestion::where('facility_id', $site->facility_id)->get();

        // return $critical_stage_questions;
        
                
        return view('admin_dashboard.sites',compact(
            'sites', 
            // 'site_profile', 
            // 'critical_stage_questions',
            // 'measurement_questions'
        )); 
    }

    public function notifications()
    {
        return view('admin_dashboard.notifications');
    }

    public function valuations()
    {
        return view('admin_dashboard.valuations');
    }


}
