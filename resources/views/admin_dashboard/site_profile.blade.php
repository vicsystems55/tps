@extends('layouts.app')


@section('content')

    <div class="page-content">
        <div class="p-2"></div>

        
        <div class="d-flex justify-content-between py-3">
            <h4>Site Profile</h4>
            <form action="{{route('preview.report')}}" method="post">
                
                <input type="hidden" class="hidde" name="site_id" value="{{$site->id}}">
                @csrf
                <button class="btn btn-primary float-right">PREVIEW</button>
            
            </form>

            {{-- <button  id="toPrint" class="btn btn-primary float-right">PREVIEW</button> --}}

        </div>
        
        <div id="print">
            
        <div class="card col-md-12">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-4">
                               <div class="text-muted"> LGA: </div>
                            </div>
                            <div class="col-8">
                                <div class="">{{$site->lga->name}}</div>
                            </div>
                            <hr>
                        </div>
                        
                        <div class="row">
                            <div class="col-4">
                                <div class="text-muted"6>LOCATION: </div>
                            </div>
                            <div class="col-8">
                                <div class="">{{$site->location}}</div>
                            </div>
                            <hr>
        
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-4">
                                <div class="text-muted"6>FACILITY TYPE: </div>
                            </div>
                            <div class="col-8">
                                <div class="">{{$site->facility->name}}</div>
                            </div>
                            <hr>
        
                        </div>
                        
        
                        <div class="row">
                            <div class="col-4">
                                <div class="text-muted"6>LOT CODE: </div>
                            </div>
                            <div class="col-8">
                                <div class="">{{$site->lot->code}}</div>
                            </div>
                            <hr>
        
                        </div>

                    </div>
                </div>
                

            </div>
        </div>

        <div class="card col-md-12">
            <div class="card-body">
                @if(Session::has('msg'))
                <p class="alert alert-success">{{ Session::get('msg') }}</p>
                @endif

                <form action="{{route('siteProfile.store')}}" method="post">
                   
                    @csrf
                    <input type="hidden" name="site_id" value="{{$site->id}}">
                <div class="row">
                    @foreach ($site_profile as $question)
                        <div class="col-md-6">
                           
                            <div class="d-flex justify-content-start">
                                {{-- {{$question->id}}
                                {{$site_profile_answers->where('site_profile_attribute_id', $question->id)->first()}} --}}
                                @if ($site_profile_answers->where('site_profile_attribute_id', $question->id)->first())
                                <div class="custom-control custom-checkbox px-5">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="siteProfileAnswers[]" value="{{$question->id}}" checked>
                                    <label class="custom-control-label " for="customCheck1"></label>
                                </div>
                                @else
                                <div class="custom-control custom-checkbox px-5">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="siteProfileAnswers[]" value="{{$question->id}}">
                                    <label class="custom-control-label " for="customCheck1"></label>
                                </div>
                                @endif

                                <div class="c">
                                    {{$question->question}} : 

                                </div>
                               
                               

                            </div>
                            
                            
                        </div>

                        
                        
                        
                        @endforeach

                        
                </div>

                <div class="form-group d-flex justify-content-end">
                    <button class="btn btn-primary ">Update Site</button>
                </div>
            </form>
                
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <h6 class="text-center">CRITICAL STAGES</h6>
                <ul class="nav nav-pills nav-fill shadow" role="tablist">
                    <li class="nav-item " role="presentation">
                        <a class="nav-link active" data-bs-toggle="pill" href="#primary-pills-home" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                            
                                <div class="tab-title">1</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-profile" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                            
                                <div class="tab-title">2</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-bs-toggle="pill" href="#primary-pills-contact" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center">
                            
                                <div class="tab-title">3</div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-bs-toggle="pill" href="#primary-pills-s4" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center">
                            
                                <div class="tab-title">4</div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-bs-toggle="pill" href="#primary-pills-s5" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center">
                            
                                <div class="tab-title">5</div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-bs-toggle="pill" href="#primary-pills-s6" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center">
                            
                                <div class="tab-title">6</div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-bs-toggle="pill" href="#primary-pills-s7" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center">
                            
                                <div class="tab-title">7</div>
                            </div>
                        </a>
                    </li>

                </ul>
                <div class="tab-content pt-5" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="primary-pills-home" role="tabpanel">
                        @if(Session::has('msg2'))
                        <p class="alert alert-success">{{ Session::get('msg2') }}</p>
                        @endif
                        <form action="{{route('criticalStageReport.store')}}" method="post">
                   
                            @csrf
                            <input type="hidden" name="site_id" value="{{$site->id}}">
                            <input type="hidden" name="stage" value="1">

                  
                        <div class="row">

                            @forelse ($critical_stage_questions->where('critical_stage', 1) as $critical)

                            @php

                            $answer = $critical_stage_questions_answers
                            ->where('stage', 1)
                            ->where('critical_stage_question_id', $critical->id)
                            ->first()
                                
                            @endphp

                            
                        
                               <div class="col-md-6  mb-3">
                                    <div class="row table-striped">
                                        <div class="col-md-5 ">
                                            <h6>{{$critical->question}}</h6>
                                        </div>
                                        <div class="col-md-7 ">
                                         <input type="hidden" class="form-control" placeholder="Answer" name="criticalQuestions[]" value="{{$critical->id??''}}">

                                         <input type="text" class="form-control" placeholder="Answer" name="criticalAnswers[]" value="{{$answer->answer??''}}">
                                        </div>
                                    </div>
                               </div>
    
                                
                            @empty
                                
                            @endforelse
    
                        </div>

                        <div class="form-group d-flex justify-content-end">
                            <button class="btn btn-primary ">Update Critical Stage</button>
                        </div>
                    </form>

                        <div class="container-fluid">

                            <h6 class="text-center">Media</h6>
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
                                </div>

                                <div class="col-md-4 mb-2">
                                    <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
                                </div>

                                <div class="col-md-4 mb-2">
                                    <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
                                </div>

                                <div class="col-md-4 mb-2">
                                    <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
                                </div>

                                <div class="col-md-4 mb-2">
                                    <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
                                </div>

                                <div class="col-md-4 mb-2">
                                    <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
                                </div>

                                

                            </div>
                            
                        </div>

                    </div>
                    <div class="tab-pane fade" id="primary-pills-profile" role="tabpanel">
                        
                        <div class="row">

                            @forelse ($critical_stage_questions->where('critical_stage', 2) as $critical)
                               <div class="col-md-6 border mb-3">
                                    <div class="row table-striped">
                                        <div class="col-md-5 ">
                                            <h6>{{$critical->question}}</h6>
                                        </div>
                                        <div class="col-md-7 ">
                                         <input type="text" class="form-control" placeholder="Answer">
                                        </div>
                                    </div>
                               </div>
    
                                
                            @empty
                                
                            @endforelse
    
                        </div>

                    </div>
                    <div class="tab-pane fade " id="primary-pills-contact" role="tabpanel">

                        <div class="row">

                            @forelse ($critical_stage_questions->where('critical_stage', 3) as $critical)
                               <div class="col-md-6 border mb-3">
                                    <div class="row table-striped">
                                        <div class="col-md-5 ">
                                            <h6>{{$critical->question}}</h6>
                                        </div>
                                        <div class="col-md-7 ">
                                         <input type="text" class="form-control" placeholder="Answer">
                                        </div>
                                    </div>
                               </div>
    
                                
                            @empty
                                
                            @endforelse
    
                        </div>
                        
                     

                    </div>

                    <div class="tab-pane fade " id="primary-pills-s4" role="tabpanel">

                        <div class="row">

                            @forelse ($critical_stage_questions->where('critical_stage', 4) as $critical)
                               <div class="col-md-6 border mb-3">
                                    <div class="row table-striped">
                                        <div class="col-md-5 ">
                                            <h6>{{$critical->question}}</h6>
                                        </div>
                                        <div class="col-md-7 ">
                                         <input type="text" class="form-control" placeholder="Answer">
                                        </div>
                                    </div>
                               </div>
    
                                
                            @empty
                                
                            @endforelse
    
                        </div>
                        
                     

                    </div>

                    <div class="tab-pane fade " id="primary-pills-s5" role="tabpanel">

                        <div class="row">

                            @forelse ($critical_stage_questions->where('critical_stage', 5) as $critical)
                               <div class="col-md-6 border mb-3">
                                    <div class="row table-striped">
                                        <div class="col-md-5 ">
                                            <h6>{{$critical->question}}</h6>
                                        </div>
                                        <div class="col-md-7 ">
                                         <input type="text" class="form-control" placeholder="Answer">
                                        </div>
                                    </div>
                               </div>
    
                                
                            @empty
                                
                            @endforelse
    
                        </div>
                        
                     

                    </div>

                    <div class="tab-pane fade " id="primary-pills-s6" role="tabpanel">

                        <div class="row">

                            @forelse ($critical_stage_questions->where('critical_stage', 6) as $critical)
                               <div class="col-md-6 border mb-3">
                                    <div class="row table-striped">
                                        <div class="col-md-5 ">
                                            <h6>{{$critical->question}}</h6>
                                        </div>
                                        <div class="col-md-7 ">
                                         <input type="text" class="form-control" placeholder="Answer">
                                        </div>
                                    </div>
                               </div>
    
                                
                            @empty
                                
                            @endforelse
    
                        </div>
                        
                     

                    </div>

                    <div class="tab-pane fade " id="primary-pills-s7" role="tabpanel">

                        <div class="row">

                            @forelse ($critical_stage_questions->where('critical_stage', 7) as $critical)
                               <div class="col-md-6 border mb-3">
                                    <div class="row table-striped">
                                        <div class="col-md-5 ">
                                            <h6>{{$critical->question}}</h6>
                                        </div>
                                        <div class="col-md-7 ">
                                         <input type="text" class="form-control" placeholder="Answer">
                                        </div>
                                    </div>
                               </div>
    
                                
                            @empty
                                
                            @endforelse
    
                        </div>
                        
                     

                    </div>

                    <div class="tab-pane fade " id="primary-pills-contact" role="tabpanel">

                        <div class="row">

                            @forelse ($critical_stage_questions->where('critical_stage', 3) as $critical)
                               <div class="col-md-6 border mb-3">
                                    <div class="row table-striped">
                                        <div class="col-md-5 ">
                                            <h6>{{$critical->question}}</h6>
                                        </div>
                                        <div class="col-md-7 ">
                                         <input type="text" class="form-control" placeholder="Answer">
                                        </div>
                                    </div>
                               </div>
    
                                
                            @empty
                                
                            @endforelse
    
                        </div>
                        
                     

                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="text-center py-3">MEASUREMENT</h4>

            </div>
            <div class="card-body">

                
                  


                <div class="row">
                    <div  class="col-12">
                      <div  style="width: 100%; overflow-x: scroll; overflow-y: hidden" class="nav nav-pill" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <div class="d-flex justify-content-start">

                            @foreach ($measurement_questions as $measure)
                                <button 
                                style="text-align: left; min-width: 230px; height: 45px; font-size: 10px;" 
                                class="border text-right btn font-weight-bold m-2 nav-link {{$loop->first?'active':''}}" 
                                id="v-pills-home-tab" data-toggle="pill" 
                                data-target="#v-pills-{{$measure->id}}" 
                                type="button" 
                                role="tab" 
                                aria-controls="v-pills-home" 
                                aria-selected="true">{{$measure->name}}</button>
                                
                            @endforeach
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="tab-content" id="v-pills-tabContent">

                        @foreach ($measurement_questions as $measure)

                        <div class="tab-pane fade show {{$loop->first?'active':''}}" id="v-pills-{{$measure->id}}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="content">
                                <h6 class="">{{$measure->name}}</h6>
                                <h6>Pour concrete 1:2:4 in footing for GI pipes 450mmx450mmx 600mm (13 Nr)</h6>
                                <ul>
                                    <li>Unit: m3</li>
                                    <li>Qty: 2</li>
                                    <li>Rate: 20,000.00</li>
                                </ul>
                                <form action="">
                                    <div class="row">
                                        <div class="col-3">
                                            <label for="">L</label>
                                            <input type="text" class="form-control">
    
                                        </div>
                                        <div class="col-3">
                                            <label for="">B</label>
                                            <input type="text" class="form-control">
    
                                        </div>
                                        <div class="col-3">
                                            <label for="">D</label>
                                            <input type="text" class="form-control">
    
                                        </div>
                                        <div class="col-3">
                                            <label for="">Num</label>
                                            <input type="text" class="form-control">
    
                                        </div>
                                        <div class="col-9">
                                            <label for="">Measurement Comment</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                            
                        @endforeach


                      
                      
                      </div>
                    </div>
                  </div>
            </div>
        </div>



        </div>

      

    </div>

    
@endsection

@section('script-content')


    <script>
       

            $('#toPrint').click(function () {
                alert('yusuf');

            var doc = new jsPDF();

                doc.fromHTML($('#print').html(), 15, 15, {
                    'width': 170,
                       
                });
                doc.save('sample-file.pdf');
            });
    </script>

@endsection
