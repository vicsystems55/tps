<?php

namespace App\Http\Controllers;

use App\Models\StandardBoqLine;
use App\Http\Requests\StoreStandardBoqLineRequest;
use App\Http\Requests\UpdateStandardBoqLineRequest;

class StandardBoqLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin_dashboard.standardBoqLine');
        
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
     * @param  \App\Http\Requests\StoreStandardBoqLineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStandardBoqLineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StandardBoqLine  $standardBoqLine
     * @return \Illuminate\Http\Response
     */
    public function show(StandardBoqLine $standardBoqLine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StandardBoqLine  $standardBoqLine
     * @return \Illuminate\Http\Response
     */
    public function edit(StandardBoqLine $standardBoqLine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStandardBoqLineRequest  $request
     * @param  \App\Models\StandardBoqLine  $standardBoqLine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStandardBoqLineRequest $request, StandardBoqLine $standardBoqLine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StandardBoqLine  $standardBoqLine
     * @return \Illuminate\Http\Response
     */
    public function destroy(StandardBoqLine $standardBoqLine)
    {
        //
    }
}
