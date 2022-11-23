@extends('layouts.app')

@section('content')


<div class="page-content">
    <div class="p-2"></div>
    <h4>Contracts  ({{$contracts->count()}})</h4>

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
                        Contracts
                    </div>
                    <div class="col">
                        State
                    </div>
                    <div class="col">
                        Lots
                    </div>
                  
                </div>
             </h6>

            </div>
        </div>


        @forelse ($contracts as $contract)
        <div>    
            <div  class="">
            <div class="card card-body bg-warning" id="headingOne{{$contract->id}}">
                <div class="mb-0">

                    <div class="" type="button" data-toggle="collapse" data-target="#collapseOne{{$contract->id}}" aria-expanded="true" aria-controls="collapseOne{{$contract->id}}">
                        
                        <div class="row ">
                            <div class="col-1">
                                <span style="width: 12px;" >
                                    {{$loop->iteration}}
                                
                                </span>
                            </div>
                            <div class="col">
                                
                                {{$contract->name}}
                            </div>

                            <div class="col">
                                
                                {{$contract->state->name}}
                            </div>

                            <div class="col">
                                
                               {{$contract->lots->count()}} 
                            </div>
                            
                        </div>

                        
                    </div>


                </div>
                
            </div>
        
            <div id="collapseOne{{$contract->id}}" class="collapse " aria-labelledby="headingOne{{$contract->id}}" data-parent="#accordionExample">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Lot Code</th>
                                <th>Contractor</th>
                                <th>Facility</th>
                                <th>No. Sites</th>
                                <th>Field Officer</th>
                                <th>Completion</th>
                                <th></th>

                            </tr>
                            
                        </thead>
                        <tbody class="d-none">
                          
                                
                            @forelse ($sites->whereIn('lga_id', $contract->state->lga->pluck('id')) as $site)

                       
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$site->ward}}</td>
                                <td>{{$site->location}}</td>
                                <td>{{$site->facility->name}}</td>
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

                        <tbody class="">
                          
                                
                            @forelse ($lots->where('state_id', $contract->state_id) as $lot)

                       
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$lot->code}}</td>
                                <td>{{$lot->contractor->name}}</td>
                                <td>{{$lot->facility->name}}</td>
                                <td>{{$lot->sites->count()}}</td>
                                <td>--</td>
                                <td>0%</td>

                                <td>
                                    <a href="{{route('admin.lot', $lot->code)}}" class="btn btn-primary btn-sm">view</a>
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
            No Contracts  yet.
        </div>
            
        @endforelse

    </div>
    
       
      </div>



</div>
    
@endsection