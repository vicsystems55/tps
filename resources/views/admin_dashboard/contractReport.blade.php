@extends('layouts.app')

@section('content')


<div class="page-content">
    <div class="p-2"></div>
    <h4>Contract </h4>
    <div class="p-3"></div>



    @foreach ($sites->unique('facility_id') as $item)
    <div class="card">
        <div class="card-body">

            <h5 class="font-weight-bold">{{$item->facility->name}}</h5>
            <div class="row">
                @foreach ($site_profile_attributes->where('facility_id', $item->facility->id) as $attribute)
                
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-1">{{$loop->iteration}}</div>
                        <div class="col border">{{$attribute->question}}</div>
                    </div>
                </div>

                @endforeach


            </div>
            <table class="table">
                <thead>
                    <th>LGA</th>
                    <th>LOCATION</th>

                    @foreach ($site_profile_attributes->where('facility_id', $item->facility->id) as $attribute)
                
                    <th>{{$loop->iteration}}</th>

                    @endforeach
                    <th>%</th>



                   
                </thead>

                <tbody>

                    @foreach ($sites as $site)
                        
                        <tr>
                            <td>{{$site->lga->name}}</td>
                            <td>{{$site->location}}</td>

                           

                                @foreach ($site_profile_attributes->where('facility_id', $item->facility->id) as $attribute)

                                @if ($site->site_profile->where('site_profile_attribute_id', $attribute->id)->first())
                                <td>
                                    <input type="checkbox" checked>
                                </td>
                                @else

                                <td>
                                    <input type="checkbox">
                                </td>

                                @endif
                                
                    
                                
            
                                @endforeach

                                <td><b>{{$site->percent_completion->percent??0}}%</b></td>

                                    
                                
                       

                            

                           
                        </tr>

                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
    @endforeach
   






 
    
       
      </div>



</div>
    
@endsection