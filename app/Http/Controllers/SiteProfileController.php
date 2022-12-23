<?php

namespace App\Http\Controllers;

use App\Models\SiteProfile;
use Illuminate\Http\Request;

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
