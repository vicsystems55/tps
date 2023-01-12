<?php

namespace App\Http\Controllers;

use Auth;

use App\Models\Lot;

use App\Models\Site;

use App\Models\User;

use App\Models\Contract;

use App\Models\ReportImage;

use App\Models\SiteProfile;

use Illuminate\Http\Request;


use App\Models\CriticalStageReport;


use App\Models\MeasurementQuestion;


use App\Models\SiteProfileAttribute;
use Illuminate\Support\Facades\Http;
use App\Models\CriticalStageQuestion;
use App\Models\LotBoq;
use App\Models\SiteLotBoqLineAnswer;
use App\Models\SupervisionTeam;

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

        $lot = Lot::with(['contractor', 'state', 'sites.lga','sites.site_profile', 'facility'])->where('code', $lot_code)->first();
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

        $site = Site::with(['images', 'lga', 'facility', 'lot', 'siteLineBoq.lotBoq'])->find($site_id);

        $lotBoq = LotBoq::where('lot_id', $site->lot->id)->get();

        $boqCategories = $lotBoq->pluck('category')->unique();

        $cat = [];

        foreach ($boqCategories as $category) {
            # code...$
            array_push($cat, $category);
        }

      

        
        $site_profile = SiteProfileAttribute::where('facility_id', $site->facility_id)->get();
        
        $site_profile_answers = SiteProfile::where('site_id', $site_id)->get();
        
        $critical_stage_questions = CriticalStageQuestion::where('facility_id', $site->facility_id)->get();
        // return $critical_stage_questions;

        $critical_stage_questions_answers = CriticalStageReport::where('site_id', $site_id)->get();
        

        $measurement_questions = MeasurementQuestion::where('facility_id', $site->facility_id)->get();

        // return $critical_stage_questions_answers;

        // return $site->siteLineBoq;

        // return $site;
        
                
        return view('admin_dashboard.site_profile',compact(
            'site', 
            'site_profile', 
            'site_profile_answers',
            'critical_stage_questions',
            'critical_stage_questions_answers',
            'measurement_questions',
            'cat'
        )); 
    }

    public function contractReports()
    {

        $contracts = Contract::with(['state.lga','lots', 'sites.supervision_team'])->get();

        $supervisionTeams = SupervisionTeam::with(['sites.supervision_team','sites.contracts'])->get();


        $sites = Site::with('contracts')->get();

        $lots = Lot::get();

        // return $sites;

        
        return view('admin_dashboard.contractReports', compact('contracts', 'sites', 'lots', 'supervisionTeams'));
    }

    public function contractReport($contractId)
    {

        $contracts = Contract::with(['state.lga','lots', 'sites.supervision_team'])->get();

        $supervisionTeams = SupervisionTeam::with(['sites.supervision_team','sites.contracts'])->get();


        $sites = Site::with(['site_profile', 'facility', 'percent_completion'])->where('contract_id', $contractId)->get();

        $site_profile_attributes = SiteProfileAttribute::get();

        $lots = Lot::get();

        // return $sites;

        
        return view('admin_dashboard.contractReport', compact('contracts', 'sites', 'lots', 'supervisionTeams', 'site_profile_attributes'));
    }

    public function sites()
    {

        $sites = Site::with('percent_completion')->get();

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

        $lots = Lot::with(['contractor', 'state', 'sites'])->get();

        // return $lots;
    
        return view('admin_dashboard.valuations',compact('lots'));
    }

    public function valuation($site_id)
    {

        $boqLines = SiteLotBoqLineAnswer::where('site_id', $site_id)->with('lotBoq')->get();

        // return $lots;

        // return $siteValuation;
    
        return view('admin_dashboard.valuation',compact('boqLines'));
    }


}
