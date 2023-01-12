<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\SiteProfile;
use Illuminate\Http\Request;
use App\Models\SitePercentCompletion;
use App\Models\SiteProfileAttribute;

class SiteProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        SiteProfile::where('site_id', $request->site_id)->delete();

        for ($i=0; $i < count($request->siteProfileAnswers); $i++) { 
            # code...
            SiteProfile::create([
                'site_id' => $request->site_id,
                'order' => 1,
                'site_profile_attribute_id' => $request->siteProfileAnswers[$i],
                'status' => 'acitve',
            ]);
    
        }

        $site = Site::with('site_profile')->find($request->site_id);

        // return $site;

        $site_profile = SiteProfile::with('site_attributes')->where('site_id', $site->id)->get();

        // return $site_profile->sum('site_attributes.weight');

        $site_total = SiteProfileAttribute::where('facility_id', $site->facility_id)->get();

        // $site_weight_sum = $site_profile->site_attributes->sum('weight');

        // return $site_total->sum('weight');

        $percent = ($site_profile->sum('site_attributes.weight') / $site_total->sum('weight'))*100;

        SitePercentCompletion::updateOrCreate([
            'site_id' => $site->id,
        ],[
            'site_id' => $site->id,
            'percent' => $percent
        ]);

     
        return back()->with('msg', 'Site Profile Updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteProfile  $siteProfile
     * @return \Illuminate\Http\Response
     */
    public function show(SiteProfile $siteProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteProfile  $siteProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteProfile $siteProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteProfile  $siteProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteProfile $siteProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteProfile  $siteProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteProfile $siteProfile)
    {
        //
    }
}
