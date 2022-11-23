<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class ChooseRoleController extends Controller
{
    //

    public function choose()
    {
        if (Auth::check()) {
            # code...
            if (Auth::user()->role =='admin') {
                return redirect('/admin');
            }
    
            elseif (Auth::user()->role =='field') {
                return redirect('/field');
            }
    
            elseif (Auth::user()->role =='unicef') {
                return redirect('/unicef');
            }
            else{
                abort(403);
            }
        }else{
            return redirect('/login');
        }
    }

}
