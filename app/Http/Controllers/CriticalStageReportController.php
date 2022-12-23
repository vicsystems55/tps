<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\CriticalStageReport;
use App\Models\CriticalStageQuestion;

class CriticalStageReportController extends Controller
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

        CriticalStageReport::where('stage', $request->stage)->where('site_id', $request->site_id)->delete();



        for ($i=0; $i < count($request->criticalQuestions); $i++) { 
            # code...
            $question = CriticalStageQuestion::find($request->criticalQuestions[$i]);

            // return $question_id;
            

            CriticalStageReport::create([
                
                'site_id' => $request->site_id,
                'order' => 2,
                'critical_stage_question_id' => $question->id,
                'answer' => $request->criticalAnswers[$i],
                'status' => 'active',
                'stage' => $request->stage,
                'inspection_date' => '2022-12-01',
                'mobilized_date' => '2022-12-01',
            ]);


        }

        return back()->with('msg2', 'Critical Stage Updated');


        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CriticalStageReport  $criticalStageReport
     * @return \Illuminate\Http\Response
     */
    public function show(CriticalStageReport $criticalStageReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CriticalStageReport  $criticalStageReport
     * @return \Illuminate\Http\Response
     */
    public function edit(CriticalStageReport $criticalStageReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CriticalStageReport  $criticalStageReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CriticalStageReport $criticalStageReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CriticalStageReport  $criticalStageReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(CriticalStageReport $criticalStageReport)
    {
        //
    }
}
