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

                        @foreach ($site_profile_attributes->where('facility_id', $lot->facility->id) as $attribute)
                        <td>

                            @if ($site->site_profile)

                            {{-- {{$site->site_profile->where('site_profile_attribute_id', $attribute->id)->first()}} --}}

                                @if ($site->site_profile->where('site_profile_attribute_id', $attribute->id)->first())
                                    
                                <input type="checkbox" name="" id="" checked>
                                @else

                                <input type="checkbox" name="" id="" >

                                    
                                @endif
                                
                            @else

                                 <input type="checkbox" name="" id="" >

                                
                            @endif

                           
                        </td>
                            
                        @endforeach
                       
        
        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h6>Measurements</h6>
        </div>
        <div class="card-body">
            <div class="py-5 text-center">
                <a target="_blank" href="{{route('lotBoq', $lot->id)}}" class="btn btn-success">View Boq</a>
            </div>
            <div class="col-md-6 mx-auto">

                @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="alert alert-warning">{{$error}}</p>
            @endforeach
        @endif


                <form action="{{route('import_boq')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="lot_id" value="{{$lot->id}}">
                    <div class="form-group">
                        <label for="boq">Upload BOQ</label>
                        <input type="file" name="uploadedBoq" class="form-control">
                    </div>
    
                    <div class="form-group py-2">
                        <label for="boq">Facility Type</label>
                        <select name="facility_id" id="" class="form-control">
                            <option value="1">SM</option>
                            <option value="2">HPBH</option>
                        </select>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn  btn-primary text-center">Update BOQ</button>
                    </div>
                </form>
            </div>

        </div>
    </div>




  


</div>
    
@endsection