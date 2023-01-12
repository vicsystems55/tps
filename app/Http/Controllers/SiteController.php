<?php

namespace App\Http\Controllers;

use App\Imports\AllProject;
use App\Models\Site;
use Illuminate\Http\Request;

use App\Imports\SiteImport;
use App\Models\Mediabank;
use Maatwebsite\Excel\Facades\Excel;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function import_sites()
    {
        //
        Excel::import(new SiteImport, 'sites.xlsx');

        // Excel::import(new AllProject, 'testallprojects.xlsx');

        
        // return $sites;
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
    }

    public function uploadImages(Request $request)
    {
        # code...

        $request->file('siteImage');
        $doc = $request->file('siteImage');

        
        $new_name = rand().".".$doc->getClientOriginalExtension();
        
        $file1 = $doc->move(public_path('siteImages'), $new_name);
        

        // return $path;

        $imageUploaded = Mediabank::create([
            'path' => config('app.url').'siteImages/'.$new_name,
            'media_type' => 'image',
            'description' => $request->description,
            'mediabankable_type' => Site::class,
            'mediabankable_id' => $request->site_id,
        ]);

        return back();

        
        // $new_name = rand().".".$doc->getClientOriginalExtension();
        
        // $file1 = $doc->move(public_path('featured_images'), $new_name);


      

        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }
}
