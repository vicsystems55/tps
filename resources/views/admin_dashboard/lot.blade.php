@extends('layouts.app')

@section('content')


<div class="page-content">
    <div class="p-2"></div>
    <h4>Lot Report</h4>

    <div class="card">
        <div class="card-body">

            <div class="row">
                @foreach ($site_profile_attributes->where('facility_id', $lot->facility->id) as $attribute)
                
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-1">{{$loop->iteration}}</div>
                        <div class="col">{{$attribute->question}}</div>
                    </div>
                </div>

                @endforeach


            </div>
            <table class="table d-none">

                <tr>
                    <th>Key</th>
                    <th>Description</th>
                </tr>
                @foreach ($site_profile_attributes->where('facility_id', $lot->facility->id) as $attribute)
            

                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$attribute->question}}</td>
                </tr>
                    
                @endforeach
                
            </table>
        </div>
    </div>

    <table class="table table-responsive">
        <thead>
            <tr>
                <th>LGA</th>
                <th>LOT</th>
                <th>SITE</th>
                @foreach ($site_profile_attributes->where('facility_id', $lot->facility->id) as $attribute)
                <th>{{$loop->iteration}}</th>
                    
                @endforeach
                
            </tr>
        </thead>
        <tbody>
            @foreach ($lot->sites as $site)
                
            <tr>
                <td>{{$site->lga->name}}</td>
                <td>{{$lot->code}}</td>
                <td>{{$site->location}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>


            </tr>
            @endforeach
        </tbody>
    </table>


  


</div>
    
@endsection