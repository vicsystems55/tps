<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;

use App\Models\TruckRoute;

use App\Models\Inventory;

use App\Models\Deployment;

use App\Models\Notification;

use App\Models\Message;

use App\Models\Project;

use App\Models\ReportImage;

use App\Models\DeploymentReport;

use Auth;

use Session;

class TechnicianPageController extends Controller
{
    //

    public function index()
    {


        $user_id = Auth::user()->id;

        $projects = Project::latest()->get();

        $deployments = Deployment::latest()->get();

        $truck_routes = TruckRoute::where('driver_assigned', $user_id)->latest()->get();


        
        return view('technician_dashboard.index',[
            'projects' => $projects,
            'deployments' => $deployments,
            'truck_routes' => $truck_routes
        ]);
    }

    public function truck_routes()
    {

        $user_id = Auth::user()->id;

        $truck_routes = TruckRoute::where('driver_assigned', $user_id)->first();

        $trucka_routes = TruckRoute::with('deployments')->with('drivers')->where('inventory_id', 1)->get();

        $truckb_routes = TruckRoute::with('deployments')->with('drivers')->where('inventory_id', 2)->get();
        
        return view('general.truck_routes',[

            'truck_routes' => $truck_routes,
            'trucka_routes' => $trucka_routes,
            'truckb_routes' => $truckb_routes,
            
        ]);
    }


    public function deployment($deployment_id)
    {

        $deployment = Deployment::where('id', $deployment_id)->first();
        
        return view('general.deployment');
    }

    public function notifications()
    {

        $notifications = Notification::where('user_id', Auth::user()->id)->get();

        $notificationx = Notification::where('user_id', Auth::user()->id)->update([
            'status' => 'read'
        ]);


        $users = User::latest()->get();


        
        return view('general.notifications',[
            'notifications' => $notifications,
            'users' => $users
        ]);
    }

    public function messages()
    {

        $messages = Message::where('t_o', Auth::user()->id)->get();
        $users = User::latest()->get();

        
        return view('general.messages',[
            'messages' => $messages,
            'users' => $users

            
        ]);
    }

    public function profile()
    {

        $user = User::where('id', Auth::user()->id)->first();
        
        return view('general.profile',[
            'user' => $user
        ]);
    }

    public function create_report()
    {
        $user_id = Auth::user()->id;

        // check if session exist with listing code


        $report = DeploymentReport::where('status', 'not delivered')->where('report_code', Session::get('report_code'))->where('reporter_id', $user_id)->first();

        if (Session::get('report_code') && $report) {
            # code...

            // dd(Session::get('listing_code'));
            
        }else{

           session([
                'report_code' => rand(11100,99999)
            ]);

            $report = DeploymentReport::create([
                'report_code' => Session::get('report_code'),
                'reporter_id' => $user_id,
                'status' => 'pending'
            ]);

            // dd($vehicle_listing);

        }

        $deployments = Deployment::latest()->get();


        return view('technician_dashboard.create_report',[
            'deployments' => $deployments 
        ]);
    }


    public function projects()
    {

        $projects = Project::latest()->get();
        
        return view('general.projects',[

            'projects' => $projects

        ]);
    }

    public function project($project_id)
    {

        $project = Project::where('id', $project_id)->first();

        $deployments = Deployment::latest()->get();
        
        
        return view('general.project',[
            'project' => $project,
            'deployments' => $deployments
        ]);
    }

    
    public function deployments()
    {
        $project = Project::where('id', 1)->first();

        $deployments = Deployment::latest()->get();
        
        
        return view('general.deployments',[

            'deployments' => $deployments,
            'project' => $project
        ]);
    }

    public function reports()
    {
        $user_id = Auth::user()->id;

        $reports = DeploymentReport::where('reporter_id', $user_id )->where('status', 'submitted')->with('report_images')->with('reporters')->latest()->get();

        // dd($reports);

        
        
        return view('technician_dashboard.reports',[
            'reports' => $reports
        ]);
    }

    public function report($report_id)
    {

        $report = DeploymentReport::with('report_images')->with('reporters')->where('id', $report_id)->first();

        
        $deployments = Deployment::latest()->get();
        
        return view('technician_dashboard.report',[
            'report' => $report,
            'deployments' => $deployments
        
        ]);
    }

}
