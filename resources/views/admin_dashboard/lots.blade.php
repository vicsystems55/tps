@extends('layouts.app')

@section('content')


<div class="page-content">
    <div class="p-2"></div>
    <h4>Lots  ({{$lots->count()}})</h4>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search lots" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                        </div>
                      </div>
                </div>
                
            </div>
            
        </div>
    </div>

    <div style="min-width: 350px; overflow-x: scroll;" class="accordion" id="accordionExample">

        <div class="mb-1">
            <div class="card card-header">
             <h6>
                <div class="row">
                    <div class="col-1">
                        #
                    </div>
                    <div class="col">
                        Contractor
                    </div>
                    <div class="col">
                        State
                    </div>
                    <div class="col">
                        Code
                    </div>
                    <div class="col-1">
                        Lot
                    </div>
                    <div class="col-1">
                        Sites
                    </div>
                </div>
             </h6>

            </div>
        </div>


        @forelse ($lots as $lot)
        <div>    
            <div  class="">
            <div class="card p-1 bg-warning" id="headingOne{{$lot->id}}">
                <div class="mb-0">

                    <div class="" type="button" data-toggle="collapse" data-target="#collapseOne{{$lot->id}}" aria-expanded="true" aria-controls="collapseOne{{$lot->id}}">
                        
                        <div class="row ">
                            <div class="col-1">
                                <span style="width: 12px;" >
                                    {{$loop->iteration}}
                                
                                </span>
                            </div>
                            <div class="col">
                                
                                {{substr($lot->contractor->name,0,15)}}
                            </div>
                            <div class="col">
                                {{$lot->state->name}}
        
                            </div>
                            <div class="col">
                              {{$lot->code}}
                            </div>
                            <div class="col-1">
                              {{$lot->lot_no}}
                            </div>
                            <div class="col-1">
                                {{$lot->sites->count()}}
                              </div>
                              <div class="col-1">
                                <a href="{{route('admin.lot', $lot->code)}}" class="btn btn-primary p-1">view</a>
                              </div>
                        </div>

                        
                    </div>


                </div>
                
            </div>
        
            <div id="collapseOne{{$lot->id}}" class="collapse " aria-labelledby="headingOne{{$lot->id}}" data-parent="#accordionExample">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Ward</th>
                                <th>Location</th>
                                <th>Facility</th>
                                <th>Field Officer</th>
                                <th>Completion</th>
                                <th></th>

                            </tr>
                            
                        </thead>
                        <tbody>
                            @forelse  ($lot->sites as $site)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$site->ward}}</td>
                                <td>{{$site->location}}</td>
                                <td>{{$lot->facility->name}}</td>
                                <td>--</td>
                                <td>0%</td>

                                <td>
                                    <a href="{{route('admin.site', $site->id)}}" class="btn btn-primary btn-sm">view</a>
                                </td>
                            </tr>
                                
                            @empty

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>no records...</td>
                                <td></td>
                                <td></td>

                                <td>
                                    
                                </td>
                            </tr>

                            @endforelse
                                
                          
                                
                          


                        </tbody>
                    </table>
                    </div>
            </div>


            </div>

        </div>

        @empty

        <div class="p-5 text-center">
            No Lots yet.
        </div>
            
        @endforelse

    </div>
    
       
      </div>



</div>
    
@endsection