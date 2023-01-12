@extends('layouts.app')

@section('content')


<div class="page-content">
    <div class="p-2"></div>
    <h4>Sites  ({{$sites->count()}})</h4>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search sites" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                        </div>
                      </div>
                </div>
                
            </div>
            
        </div>
    </div>

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th>#</th>
               
                        <th>LOCATION</th>
                        <th>LGA</th>
                        <th>STATE</th>
                        <th>FACILITY</th>
                        <th>LOT CODE</th>
              
                        <th>COMPLETION</th>
                        <th></th>

                    </tr>
                    
                </thead>
                <tbody>
                    @forelse  ($sites as $site)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                     
                        <td>{{$site->location}}</td>
                        <td>{{strtoupper($site->lga->name)}}</td>
                        <td>{{strtoupper($site->lga->state->name)}}</td>
                        <td>{{$site->facility->name}}</td>
                        <td>{{strtoupper($site->lot->code)}}</td>
                 
                        <td>
                          

                            <div class="progress">
                                <div 
                                    class="progress-bar progress-bar-striped" 
                                    role="progressbar" 
                                    style="width: {{$site->percent_completion->percent??0}}%" 
                                    aria-valuenow="{{$site->percent_completion->percent??0}}" 
                                    aria-valuemin="0" 
                                    aria-valuemax="100">{{$site->percent_completion->percent??0}}%
                                </div>
                            </div>
                        
                        </td>

                        <td>
                            <a href="{{route('admin.site', $site->id)}}" class="btn btn-primary btn-sm">view site profile</a>
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
    
@endsection