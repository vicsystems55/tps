@extends('layouts.app')


@section('content')

<style>
    .form-control{
        font-size: 80%;
    }
</style>

    <div style="font-size: 80%; text-align: left; width: 100%; overflow:auto;" class="page-content">
        <div class="p-2"></div>

        <h4>Valuation Report</h4>


        <div style="width: 100%;" class="card d-none">
            <div class=" table-responsive">
                <table class="table table-striped">
                
                        <tr>
        
                            
                            <td  class="bg-secondary">p</td>
                            <td class="bg-danger">p</td>
                            <td  class="bg-info">p</td>

                            <td  class="bg-danger">p</td>
                            <td  class="bg-primary">p</td>

                            <td >L</td>
                            <td >B</td>
                            <td >D</td>
                            <td >p</td>
                            <td>p</td>
                            <td >p</td>
                            <td >p</td>
                            <td></td>



                        </tr>
                    
                </table>
            </div>
        </div>
   

        <div style="width: 100%;" class="card">
            <div class="card-header"><h6>PRELIMINARY</h6></div>
            <div class="table-">
                <table class="table table-striped">

                    <tr>
        
                            
                        <th style="with: 300px;" class="border">Description</th>
                        <th class="border">Unit</th>
                        <th  class="border">Qty</th>

                        <th  class="border">Rate</th>
                        <th  class="border">Amount</th>

                        <th  class="border">L</th>
                        <th  class="border">B</th>
                        <th  class="border">D</th>
                        <th  class="border">Num</th>


                        <th  class="border">Comments</th>
                        <th class="border">Cert.Qty</th>
                        <th  class="border">Cert.Cpltn</th>
                        <th  class="border">Cert.Amount</th>
                        <th class="border"></th>



                    </tr>

                    
                  
                    @foreach ($boqLines as $item)

                    @if ($item->lotBoq->category == 'PRELIMINARY')
                    <tr>
    
                        
                        <td style="width: 250px;" class=" border  ">{{$item->lotBoq->description}}</td>
                        <td style="width: 50px;" class="border ">{{$item->lotBoq->unit}}</td>
                        <td style="width: 50px;" class="border " >{{$item->lotBoq->qty}}</td>

                        
                        <td style="width: 100px;" class="border  ">{{number_format($item->lotBoq->rate,2)}}</td>
                        <td style="width: 100px;" class="border  ">{{number_format($item->lotBoq->amount,2)}}</td>
                        <td style="width: 50px;" class="border ">
                            <input type="text" class="form-control form-control-sm" value="{{$item->length}}">
                        </td>
                        <td style="width: 50px;" class="border ">
                            <input type="text" class="form-control form-control-sm" value="{{($item->breadth)}}">
                        </td>
                        <td style="width: 50px;" class="border ">
                            <input type="text" class="form-control form-control-sm" value="{{($item->depth)}}">
                        </td>
                        <td style="width: 60px;" class="border ">
                            <input type="text" class="form-control form-control-sm" value="{{($item->number)}}">
                        </td>
                        <td style="width: 150px;" class="border ">
                            <textarea name="" class="form-control form-control-sm" id="" cols="30" rows="4">{{($item->comments)}}</textarea>
                          
                        </td>

                        <td style="width: 50px;" class="border ">
                            {{($item->cert_qty)}}
                        </td>
                        <td style="width: 50px;" class="border ">
                            {{($item->cert_completion)}}
                        </td>
                        <td style="width: 50px;" class="border ">
                            {{($item->cert_amount)}}
                        </td>
                        <td>
                            <a style="font-size: 80%" href="" class="btn btn-sm btn-primary p-1">update</a>
                        </td>


                        

                    </tr>
                        
                    @endif
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-header"><h6>BOREHOLE DRILLING</h6></div>
            <div class="">
                <table class="table table-striped">
                    
                  
                    @foreach ($boqLines as $item)

                    @if ($item->lotBoq->category == 'BOREHOLE DRILLING')
                    <tr>
    
                        
                        <td style="width: 300px;" class="bg-secondary">{{$item->lotBoq->description}}</td>
                        <td style="width: 100px;" class="">{{$item->lotBoq->unit}}</td>
                        <td style="width: 100px;" >{{$item->lotBoq->qty}}</td>

                        
                        <td style="width: 100px;">{{number_format($item->lotBoq->rate,2)}}</td>
                        <td style="width: 100px;">{{number_format($item->lotBoq->amount,2)}}</td>
                        <td style="width: 100px;">{{$item->length}}</td>
                        <td style="width: 100px;">{{($item->breadth)}}</td>
                        <td style="width: 100px;">{{($item->depth)}}</td>
                        <td style="width: 100px;">{{($item->comments)}}</td>

                        <td style="width: 100px;">{{($item->cert_qty)}}</td>
                        <td style="width: 100px;">{{($item->cert_completion)}}</td>
                        <td style="width: 100px;">{{($item->cert_amount)}}</td>

                    </tr>
                        
                    @endif
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-header"><h6>SOLAR PUMP AND POWER REQUIREMENTS</h6></div>
            <div class="">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'SOLAR PUMP AND POWER REQUIREMENTS') as $line)
                        <tr>
        
                            <td style="width: 300px;" class="bg-seconday">{{$item->lotBoq->description}}</td>
                            <td style="width: 100px;" class="">{{$item->lotBoq->unit}}</td>
                            <td style="width: 100px;" >{{$item->lotBoq->qty}}</td>
    
                            
                            <td style="width: 100px;">{{number_format($item->lotBoq->rate,2)}}</td>
                            <td style="width: 100px;">{{number_format($item->lotBoq->amount,2)}}</td>
                            <td style="width: 100px;">{{$item->length}}</td>
                            <td style="width: 100px;">{{($item->breadth)}}</td>
                            <td style="width: 100px;">{{($item->depth)}}</td>
                            <td style="width: 100px;">{{($item->comments)}}</td>
    
                            <td style="width: 100px;">{{($item->cert_qty)}}</td>
                            <td style="width: 100px;">{{($item->cert_completion)}}</td>
                            <td style="width: 100px;">{{($item->cert_amount)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-header"><h6>TANK AND STANCHION</h6></div>
            <div class="">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'TANK AND STANCHION') as $line)
                        <tr>
        
                            
                            <td style="width: 300px;" class="bg-seconday">{{$item->lotBoq->description}}</td>
                            <td style="width: 100px;" class="">{{$item->lotBoq->unit}}</td>
                            <td style="width: 100px;" >{{$item->lotBoq->qty}}</td>
    
                            
                            <td style="width: 100px;">{{number_format($item->lotBoq->rate,2)}}</td>
                            <td style="width: 100px;">{{number_format($item->lotBoq->amount,2)}}</td>
                            <td style="width: 100px;">{{$item->length}}</td>
                            <td style="width: 100px;">{{($item->breadth)}}</td>
                            <td style="width: 100px;">{{($item->depth)}}</td>
                            <td style="width: 100px;">{{($item->comments)}}</td>
    
                            <td style="width: 100px;">{{($item->cert_qty)}}</td>
                            <td style="width: 100px;">{{($item->cert_completion)}}</td>
                            <td style="width: 100px;">{{($item->cert_amount)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-header"><h6>PLUMBING, TAP ISLAND AND RETICULATION</h6></div>
            <div class="">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'PLUMBING, TAP ISLAND AND RETICULATION') as $line)
                        <tr>
        
                            
                            <td style="width: 300px;" class="bg-seconday">{{$item->lotBoq->description}}</td>
                            <td style="width: 100px;" class="">{{$item->lotBoq->unit}}</td>
                            <td style="width: 100px;" >{{$item->lotBoq->qty}}</td>
    
                            
                            <td style="width: 100px;">{{number_format($item->lotBoq->rate,2)}}</td>
                            <td style="width: 100px;">{{number_format($item->lotBoq->amount,2)}}</td>
                            <td style="width: 100px;">{{$item->length}}</td>
                            <td style="width: 100px;">{{($item->breadth)}}</td>
                            <td style="width: 100px;">{{($item->depth)}}</td>
                            <td style="width: 100px;">{{($item->comments)}}</td>
    
                            <td style="width: 100px;">{{($item->cert_qty)}}</td>
                            <td style="width: 100px;">{{($item->cert_completion)}}</td>
                            <td style="width: 100px;">{{($item->cert_amount)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-header"><h6>EXCAVATION AND EARTH WORK</h6></div>
            <div class="">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'EXCAVATION AND EARTH WORK') as $line)
                        <tr>
        
                            <td style="width: 300px;" class="bg-seconday">{{$item->lotBoq->description}}</td>
                            <td style="width: 100px;" class="">{{$item->lotBoq->unit}}</td>
                            <td style="width: 100px;" >{{$item->lotBoq->qty}}</td>
    
                            
                            <td style="width: 100px;">{{number_format($item->lotBoq->rate,2)}}</td>
                            <td style="width: 100px;">{{number_format($item->lotBoq->amount,2)}}</td>
                            <td style="width: 100px;">{{$item->length}}</td>
                            <td style="width: 100px;">{{($item->breadth)}}</td>
                            <td style="width: 100px;">{{($item->depth)}}</td>
                            <td style="width: 100px;">{{($item->comments)}}</td>
    
                            <td style="width: 100px;">{{($item->cert_qty)}}</td>
                            <td style="width: 100px;">{{($item->cert_completion)}}</td>
                            <td style="width: 100px;">{{($item->cert_amount)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>


            
        <div class="card">
            <div class="card-header"><h6>CONCRETE WORK</h6></div>
            <div class="">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'CONCRETE WORK') as $line)
                        <tr>
        
                            <td style="width: 300px;" class="bg-seconday">{{$item->lotBoq->description}}</td>
                            <td style="width: 100px;" class="">{{$item->lotBoq->unit}}</td>
                            <td style="width: 100px;" >{{$item->lotBoq->qty}}</td>
    
                            
                            <td style="width: 100px;">{{number_format($item->lotBoq->rate,2)}}</td>
                            <td style="width: 100px;">{{number_format($item->lotBoq->amount,2)}}</td>
                            <td style="width: 100px;">{{$item->length}}</td>
                            <td style="width: 100px;">{{($item->breadth)}}</td>
                            <td style="width: 100px;">{{($item->depth)}}</td>
                            <td style="width: 100px;">{{($item->comments)}}</td>
    
                            <td style="width: 100px;">{{($item->cert_qty)}}</td>
                            <td style="width: 100px;">{{($item->cert_completion)}}</td>
                            <td style="width: 100px;">{{($item->cert_amount)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        
        <div class="card">
            <div class="card-header"><h6>BLOCK WORK</h6></div>
            <div class="">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'BLOCK WORK') as $line)
                        <tr>
        
                            
                            <td style="width: 300px;" class="bg-seconday">{{$item->lotBoq->description}}</td>
                            <td style="width: 100px;" class="">{{$item->lotBoq->unit}}</td>
                            <td style="width: 100px;" >{{$item->lotBoq->qty}}</td>
    
                            
                            <td style="width: 100px;">{{number_format($item->lotBoq->rate,2)}}</td>
                            <td style="width: 100px;">{{number_format($item->lotBoq->amount,2)}}</td>
                            <td style="width: 100px;">{{$item->length}}</td>
                            <td style="width: 100px;">{{($item->breadth)}}</td>
                            <td style="width: 100px;">{{($item->depth)}}</td>
                            <td style="width: 100px;">{{($item->comments)}}</td>
    
                            <td style="width: 100px;">{{($item->cert_qty)}}</td>
                            <td style="width: 100px;">{{($item->cert_completion)}}</td>
                            <td style="width: 100px;">{{($item->cert_amount)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        

        <div class="card">
            <div class="card-header"><h6>FORM WORK</h6></div>
            <div class="">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'FORM WORK') as $line)
                        <tr>
                            <td style="width: 300px;" class="bg-seconday">{{$item->lotBoq->description}}</td>
                            <td style="width: 100px;" class="">{{$item->lotBoq->unit}}</td>
                            <td style="width: 100px;" >{{$item->lotBoq->qty}}</td>
    
                            
                            <td style="width: 100px;">{{number_format($item->lotBoq->rate,2)}}</td>
                            <td style="width: 100px;">{{number_format($item->lotBoq->amount,2)}}</td>
                            <td style="width: 100px;">{{$item->length}}</td>
                            <td style="width: 100px;">{{($item->breadth)}}</td>
                            <td style="width: 100px;">{{($item->depth)}}</td>
                            <td style="width: 100px;">{{($item->comments)}}</td>
    
                            <td style="width: 100px;">{{($item->cert_qty)}}</td>
                            <td style="width: 100px;">{{($item->cert_completion)}}</td>
                            <td style="width: 100px;">{{($item->cert_amount)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-header"><h6>METAL WORK</h6></div>
            <div class="">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'METAL WORK') as $line)
                        <tr>
        
                            
                            <td style="width: 300px;" class="bg-seconday">{{$item->lotBoq->description}}</td>
                            <td style="width: 100px;" class="">{{$item->lotBoq->unit}}</td>
                            <td style="width: 100px;" >{{$item->lotBoq->qty}}</td>
    
                            
                            <td style="width: 100px;">{{number_format($item->lotBoq->rate,2)}}</td>
                            <td style="width: 100px;">{{number_format($item->lotBoq->amount,2)}}</td>
                            <td style="width: 100px;">{{$item->length}}</td>
                            <td style="width: 100px;">{{($item->breadth)}}</td>
                            <td style="width: 100px;">{{($item->depth)}}</td>
                            <td style="width: 100px;">{{($item->comments)}}</td>
    
                            <td style="width: 100px;">{{($item->cert_qty)}}</td>
                            <td style="width: 100px;">{{($item->cert_completion)}}</td>
                            <td style="width: 100px;">{{($item->cert_amount)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        

        <div class="card">
            <div class="card-header"><h6>FINISHES</h6></div>
            <div class="">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'FINISHES') as $line)
                        <tr>
        
                            <td style="width: 300px;" class="bg-seconday">{{$item->lotBoq->description}}</td>
                            <td style="width: 100px;" class="">{{$item->lotBoq->unit}}</td>
                            <td style="width: 100px;" >{{$item->lotBoq->qty}}</td>
    
                            
                            <td style="width: 100px;">{{number_format($item->lotBoq->rate,2)}}</td>
                            <td style="width: 100px;">{{number_format($item->lotBoq->amount,2)}}</td>
                            <td style="width: 100px;">{{$item->length}}</td>
                            <td style="width: 100px;">{{($item->breadth)}}</td>
                            <td style="width: 100px;">{{($item->depth)}}</td>
                            <td style="width: 100px;">{{($item->comments)}}</td>
    
                            <td style="width: 100px;">{{($item->cert_qty)}}</td>
                            <td style="width: 100px;">{{($item->cert_completion)}}</td>
                            <td style="width: 100px;">{{($item->cert_amount)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        

        <div class="card">
            <div class="card-header"><h6>SIGNBOARD</h6></div>
            <div class="">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'SIGNBOARD') as $line)
                        <tr>
        
                            <td style="width: 300px;" class="bg-seconday">{{$item->lotBoq->description}}</td>
                            <td style="width: 100px;" class="">{{$item->lotBoq->unit}}</td>
                            <td style="width: 100px;" >{{$item->lotBoq->qty}}</td>
    
                            
                            <td style="width: 100px;">{{number_format($item->lotBoq->rate,2)}}</td>
                            <td style="width: 100px;">{{number_format($item->lotBoq->amount,2)}}</td>
                            <td style="width: 100px;">{{$item->length}}</td>
                            <td style="width: 100px;">{{($item->breadth)}}</td>
                            <td style="width: 100px;">{{($item->depth)}}</td>
                            <td style="width: 100px;">{{($item->comments)}}</td>
    
                            <td style="width: 100px;">{{($item->cert_qty)}}</td>
                            <td style="width: 100px;">{{($item->cert_completion)}}</td>
                            <td style="width: 100px;">{{($item->cert_amount)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        

        

        


      

    </div>

    
@endsection