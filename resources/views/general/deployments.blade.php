@extends('layouts.app')


@section('content')


<div class="page-content">
    <div class="p-5"></div>

    <div class="row">
        <div class="col-md-6">
            
            <h4>{{$project->title}}</h4>
            <h6>{{$project->code}}</h6>

            <p>
                {{$project->description}}
            </p>
        </div>
        <div class="col-md-6">

            <a href="{{route('admin.truck_routes')}}" class="{{Auth::user()->role=='admin'?'':'d-none'}} btn btn-lg btn-primary col-md-6">
                View Logistic Plan
            </a>

        </div>
    </div>

    <div class="col-md-12">
        <div class="car">
            <h4>Deployments</h4>
            <div class="card-bod">

                <div class="fo text-center mb-3">
                    <a href="{{route('superadmin.create_deployment')}}" class="
                    {{Auth::user()->role=='superadmin'?'':'d-none'}}
                    btn btn-primary shadow col-md-5">Add New</a>
                </div>

                <div class="row">

                    @forelse ($deployments as $deployment)

                        <div class="col-md-4">
                            <div style="height: 250px;" class="card {{$deployment->status=='delivered'?'border border-success':''}}">
                                <div class="card-body">
        
                                    <table class="table table-striped">
                                        <tr>
                                            <td style="width: 120px;">State: </td>
                                            <td>
                                            <span style="font-weight: bold;" class="font-weight-bold">
                                                {{$deployment->state}}
                                            </span>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>Facility Name: </td>
                                            <td>
                                            <span style="font-weight: bold;" class="font-weight-bold" title="{{$deployment->facility_name}}">
                                                {{$deployment->facility_name}}
                                            </span>
                                            </td>
                                            </tr>
                                        
                                        
                                            {{-- <tr>
                                            <td>Contact Number: </td>
                                            <td>
                                            <span style="font-weight: bold;" class="font-weight-bold" title="{{$deployment->contact_email}}">
                                                {{$deployment->contact_number}}
                                            </span>
                                            </td>
                                            </tr> --}}
                                        
                                            {{-- <tr>
                                            <td>Number of UCCs: </td>
                                            <td>
                                            <span style="font-weight: bold;" class="font-weight-bold">
                                                {{$deployment->no_ucc}}
                                            </span>
                                            </td>
                                            </tr> --}}
        
                                            <tr>
                                                <td>Delivery Status: </td>
                                                <td>
                                                <span style="" class=" badge rounded-pill bg-{{$deployment->status=='delivered'?'success':'warning'}} text-{{$deployment->status=='delivered'?'white':'dark'}}">
                                                    {{$deployment->status}}
                                                </span>
                                                </td>
                                                </tr>

                                                <tr>
                                                    <td>Installation Status: </td>
                                                    <td>
                                                    <span style="" class=" badge rounded-pill bg-{{$deployment->status=='delivered'?'success':'warning'}} text-{{$deployment->status=='delivered'?'white':'dark'}}">
                                                       not installed
                                                    </span>
                                                    </td>
                                                    </tr>
                                    </table>

                                    <div class="row">
                                        <div class="col-6 text-center">
                                            <a href="" class="btn btn-primary btn-block btn-sm shadow">Deployment</a>
                                        </div>
                                        <div class="col-6 text-center">
                                            <a href="" class="btn btn-primary btn-block btn-sm shadow">Installation</a>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                   
               @empty



                </div>
            

                  


                    

                        <h6>No Delivery data...</h6>
                           
                       @endforelse

                  
            </div>
        </div>
    </div>


    


</div>
    
@endsection