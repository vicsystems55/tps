<?php

namespace App\Http\Controllers;

use App\Models\SiteLotBoqLineAnswer;
use Illuminate\Http\Request;

class SiteLotBoqLineAnswerController extends Controller
{
    //

    public function siteLotBoqLineAnswers(Request $request)
    {
        # code...

        // return $request->all();

        if ($request->length <= 0) {

            $length = 1;
            # code...
        }else{

            $length = $request->length;
        }

        if ($request->breadth <= 0) {

            $breadth = 1;
            # code...
        }else{

            $breadth = $request->breadth;
        }

        if ($request->depth <= 0) {

            $depth = 1;
            # code...
        }else{

            $depth = $request->depth;
        }

        if ($request->number <= 0) {

            $number = 1;
            # code...
        }else{

            $number = $request->number;
        }

   


        $lineRef = SiteLotBoqLineAnswer::with('lotBoq')->find($request->line_id);


        $certAmount = $lineRef->lotBoq->rate * ($length * $breadth * $depth * $number);

        // return $lineRef->lotBoq->amount;

        if ($lineRef->lotBoq->amount < $certAmount) {
            # code...

            return back()->with('msg'.$request->line_id, 'Please check your values');

        }else{

            $line = SiteLotBoqLineAnswer::where('id', $request->line_id)->update([
                'length' => $request->length,
                'breadth' => $request->breadth,
                'depth' => $request->depth,
                'comments' => $request->comments,
                'number' => $request->number,
                'cert_qty' => $length * $breadth * $depth * $number,
                'cert_amount' => $certAmount
    
            ]);
    
            $lineRefNew = SiteLotBoqLineAnswer::with('lotBoq')->find($request->line_id);
    
            $compltn = ($lineRefNew->cert_amount * 100) / $lineRef->lotBoq->amount;
    
    
            $lineRefNew->update([
                
                'cert_completion' => $compltn
            ]);
    
        
            
    
            return back()->with('msg2'.$request->line_id, 'Records submitted');

        }



    
    }
}
