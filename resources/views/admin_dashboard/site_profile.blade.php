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
                        <div class="col-md-6">
                            @foreach ($site_profile as $question)
                           
                            <div class="d-flex justify-content-start">
                                {{-- {{$question->id}}
                                {{$site_profile_answers->where('site_profile_attribute_id', $question->id)->first()}} --}}
                                @if ($site_profile_answers->where('site_profile_attribute_id', $question->id)->first())
                                <div class="custom-control custom-checkbox px-5">
                                    <input type="checkbox" class="shadow custom-control-input" id="customCheck1" name="siteProfileAnswers[]" value="{{$question->id}}" checked>
                                    <label class="custom-control-label " for="customCheck1"></label>
                                </div>
                                @else
                                <div class="custom-control custom-checkbox px-5">
                                    <input type="checkbox" class="shadow custom-control-input" id="customCheck1" name="siteProfileAnswers[]" value="{{$question->id}}">
                                    <label class="custom-control-label " for="customCheck1"></label>
                                </div>
                                @endif

                                <div class="c">
                                    {{$question->question}} 

                                </div>
                               
                               

                            </div>
                            
                            
                            @endforeach
                        </div>

                       
                    

                        
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

                        <div class="form-group d-flex justify-content-start py-3">
                            <button class="btn btn-primary ">Update Critical Stage 1</button>
                        </div>
                    </form>

                        <div class="container-fluid">

                            <h6 class="text-center card card-body">Media</h6>
                            <div class="row">

                                @foreach ($site->images as $siteImage)
                                <div class="col-md-4 mb-2 ">
                                    <img style="height: 120px;" class="" src="{{asset($siteImage->path)}}" alt="">
                                    <div class="py-2">
                                        <input style="width: 250px;" type="text" class="form-control form-control-sm" value="{{$siteImage->description}}" placeholder="Description">
                                    </div>
                                    <div class="py-2">
                                        <button type="submit" class="btn btn-secondary">update image</button>
                                    </div>
                                </div>
                                @endforeach
                                

                          

                                <div class="col-md-4 mb-2">

                                  
                                    <form action="{{route('uploadImages')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="site_id" value="{{$site->id}}">
                                        

                                 
                                    <img  style="height: 120px;" id="previewImg" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
                                    <div class="py-2">
                                        <input style="width: 250px;" type="text" class="form-control form-control-sm shadow" name="description" placeholder="Description">
                                    </div>
                                    <div class="custom-file py-2 ">
                                        <input onchange="previewFile4(this.id);" type="file" name="siteImage" class="custom-file-input col-md-6" id="customFile">
                                    
                                    </div>
                                    <div class="py-2">
                                        <button type="submit" class="btn btn-primary shadow">+ upload image</button>
                                    </div>

                                    </form>
                                </div>

                              


                                

                            </div>
                            
                        </div>

                    </div>
                    <div class="tab-pane fade" id="primary-pills-profile" role="tabpanel">
                        
                        @if(Session::has('msg2'))
                        <p class="alert alert-success">{{ Session::get('msg2') }}</p>
                        @endif
                        <form action="{{route('criticalStageReport.store')}}" method="post">
                    
                                @csrf
                                <input type="hidden" name="site_id" value="{{$site->id}}">
                                <input type="hidden" name="stage" value="2">

                    
                            <div class="row">

                                @forelse ($critical_stage_questions->where('critical_stage', 2) as $critical)

                                @php

                                $answer = $critical_stage_questions_answers
                                ->where('stage', 2)
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

                            <div class="form-group d-flex justify-content-start py-3">
                                <button class="btn btn-primary ">Update Critical Stage 2</button>
                            </div>
                        </form>

                    </div>
                    <div class="tab-pane fade " id="primary-pills-contact" role="tabpanel">

                        @if(Session::has('msg2'))
                        <p class="alert alert-success">{{ Session::get('msg2') }}</p>
                        @endif
                        <form action="{{route('criticalStageReport.store')}}" method="post">
                    
                                @csrf
                                <input type="hidden" name="site_id" value="{{$site->id}}">
                                <input type="hidden" name="stage" value="3">

                    
                            <div class="row">

                                @forelse ($critical_stage_questions->where('critical_stage', 3) as $critical)

                                @php

                                $answer = $critical_stage_questions_answers
                                ->where('stage', 3)
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

                            <div class="form-group d-flex justify-content-start py-3">
                                <button class="btn btn-primary ">Update Critical Stage 3</button>
                            </div>
                        </form>
                        
                     

                    </div>

                    <div class="tab-pane fade " id="primary-pills-s4" role="tabpanel">

                        @if(Session::has('msg2'))
                        <p class="alert alert-success">{{ Session::get('msg2') }}</p>
                        @endif
                        <form action="{{route('criticalStageReport.store')}}" method="post">
                    
                                @csrf
                                <input type="hidden" name="site_id" value="{{$site->id}}">
                                <input type="hidden" name="stage" value="4">

                    
                            <div class="row">

                                @forelse ($critical_stage_questions->where('critical_stage', 4) as $critical)

                                @php

                                $answer = $critical_stage_questions_answers
                                ->where('stage', 4)
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

                            <div class="form-group d-flex justify-content-start py-3">
                                <button class="btn btn-primary ">Update Critical Stage 4</button>
                            </div>
                        </form>
                        
                     

                    </div>

                    <div class="tab-pane fade " id="primary-pills-s5" role="tabpanel">

                        @if(Session::has('msg2'))
                        <p class="alert alert-success">{{ Session::get('msg2') }}</p>
                        @endif
                        <form action="{{route('criticalStageReport.store')}}" method="post">
                    
                                @csrf
                                <input type="hidden" name="site_id" value="{{$site->id}}">
                                <input type="hidden" name="stage" value="5">

                    
                            <div class="row">

                                @forelse ($critical_stage_questions->where('critical_stage', 5) as $critical)

                                @php

                                $answer = $critical_stage_questions_answers
                                ->where('stage', 5)
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

                            <div class="form-group d-flex justify-content-start py-3">
                                <button class="btn btn-primary ">Update Critical Stage 5</button>
                            </div>
                        </form>
                        
                     

                    </div>

                    <div class="tab-pane fade " id="primary-pills-s6" role="tabpanel">

                        @if(Session::has('msg2'))
                        <p class="alert alert-success">{{ Session::get('msg2') }}</p>
                        @endif
                        <form action="{{route('criticalStageReport.store')}}" method="post">
                    
                                @csrf
                                <input type="hidden" name="site_id" value="{{$site->id}}">
                                <input type="hidden" name="stage" value="6">

                    
                            <div class="row">

                                @forelse ($critical_stage_questions->where('critical_stage', 6) as $critical)

                                @php

                                $answer = $critical_stage_questions_answers
                                ->where('stage', 6)
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

                            <div class="form-group d-flex justify-content-start py-3">
                                <button class="btn btn-primary ">Update Critical Stage 6</button>
                            </div>
                        </form>
                        
                     

                    </div>

                    <div class="tab-pane fade " id="primary-pills-s7" role="tabpanel">

                        @if(Session::has('msg2'))
                        <p class="alert alert-success">{{ Session::get('msg2') }}</p>
                        @endif
                        <form action="{{route('criticalStageReport.store')}}" method="post">
                    
                                @csrf
                                <input type="hidden" name="site_id" value="{{$site->id}}">
                                <input type="hidden" name="stage" value="7">

                    
                            <div class="row">

                                @forelse ($critical_stage_questions->where('critical_stage', 7) as $critical)

                                @php

                                $answer = $critical_stage_questions_answers
                                ->where('stage', 7)
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

                            <div class="form-group d-flex justify-content-start py-3">
                                <button class="btn btn-primary ">Update Critical Stage 7</button>
                            </div>
                        </form>
                        
                     

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
                        <div class="nav d-flex justify-content-start">
@for ($i = 0; $i < count($cat); $i++)
<button 
                                style="text-align: left; min-width: 230px; height: 45px; font-size: 10px;" 
                                class="border text-right btn font-weight-bold m-2 nav-link {{($i==0)?'active':''}}" 
                                id="v-pills-home-tab" data-toggle="pill" 
                                data-target="#v-pills-pills{{$i}}" 
                                type="button" 
                                role="tab" 
                                aria-controls="v-pills-home" 
                                aria-selected="true">{{$cat[$i]}}</button>
    
@endfor

                          
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="tab-content" id="v-pills-tabContent">

                        @for ($i = 0; $i < count($cat); $i++)

                        <div class="tab-pane fade show {{($i==0)?'active':''}}" id="v-pills-pills{{$i}}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                          {{$cat[$i]}}
                           @foreach ($site->siteLineBoq as $item)

                           @if ($item->lotBoq->category == $cat[$i])
                           <div class="content card card-body">
                               {{-- <h6 class="">{{$item->lotBoq->category}}</h6> --}}
                               <h6>{{$item->lotBoq->description}}</h6>
                               <ul>
                                   <li>Unit: <span class="font-weight-bold">{{$item->lotBoq->unit}}</span></li>
                                   <li>Qty: <span class="font-weight-bold">{{$item->lotBoq->qty}}</span></li>
                                   <li>Rate: <span class="font-weight-bold">{{$item->lotBoq->rate}}</span></li>
                               </ul>
                               @if(Session::has('msg'.$item->id))
                                <p class="alert alert-danger">{{ Session::get('msg'.$item->id) }}</p>
                                @endif

                                @if(Session::has('msg2'.$item->id))
                                <p class="alert alert-success">{{ Session::get('msg2'.$item->id) }}</p>
                                @endif

                               <form action="{{route('siteLotBoqLineAnswers')}}" method="post">
                                <input type="hidden" name="line_id" value="{{$item->id}}">
                                @csrf
                                   <div class="row">
                                       <div class="col-3">
                                           <label for="">L</label>
                                           <input type="number" class="form-control" name="length" value="{{$item->length}}">
   
                                       </div>
                                       <div class="col-3">
                                           <label for="">B</label>
                                           <input type="number" class="form-control" name="breadth" value="{{$item->breadth}}">
   
                                       </div>
                                       <div class="col-3">
                                           <label for="">D</label>
                                           <input type="number" class="form-control" name="depth" value="{{$item->depth}}">
   
                                       </div>
                                       <div class="col-3">
                                           <label for="">Num</label>
                                           <input type="number" class="form-control" name="number" value="{{$item->number}}">
   
                                       </div>
                                       <div class="col-9">
                                           <label for="">Measurement Comment</label>
                                           <input type="text" class="form-control" name="comments" value="{{$item->comments}}">
                                       </div>
                                   </div>
                                   <div class="form-group py-3 float-right">
                                    <button type="submit" class="btn btn-primary ">Submit</button>
                                </div>
                               </form>

                           </div>
                               
                           @else
                               
                           @endif
                               
                           @endforeach
                        </div>
                            
                        @endfor


                      
                      
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

<script>
    function previewFile4(chooser){
        console.log('hello');


        var file = $('#' + chooser).get(0).files[0];

        if(file){
            var reader = new FileReader();

            reader.onload = function(){
                var previewer = chooser +'_preview';
            
                // $('#' + previewer).css('background-image', 'url("' + reader.result + '")');
                $("#previewImg").attr("src", reader.result);
                
                // $("#bg-img").css("background-image", "url(" + reader.result + ")");
            }

            reader.readAsDataURL(file);
        }
    }
</script>
