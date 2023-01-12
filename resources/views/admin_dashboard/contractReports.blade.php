@extends('layouts.app')

@section('content')


<div class="page-content">
    <div class="p-2"></div>
    <h4>Contracts Reports </h4>
    <div class="p-3"></div>
    <div class="accordion " id="accordionExample">

        @foreach ($supervisionTeams as $supervisionTeam)
        <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOnex{{$supervisionTeam->id}}" aria-expanded="true" aria-controls="collapseOne">
                  {{$supervisionTeam->name}}
                </button>
              </h2>
            </div>
        
            <div id="collapseOnex{{$supervisionTeam->id}}" class="collapse {{$loop->first?'show':''}}" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
            
                @foreach ($supervisionTeam->sites->where('supervision_team_id', $supervisionTeam->id)->unique('contract_id') as $item)
                    
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="c">

                                {{$item->contracts->name}}
                            </div>
                            <div class="f">
                                <a href="{{route('admin.contractReport', $item->contracts->id)}}" class="btn btn-sm btn-primary p-1">view report</a>

                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
           
              </div>
            </div>
          </div>
        @endforeach
       
     
      </div>

 
    
       
      </div>



</div>
    
@endsection