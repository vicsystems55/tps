@extends('layouts.app')


@section('content')

    <div class="page-content">
        <div class="p-2"></div>

        <h4>Boq Lines Register</h4>


        <div class="card">
            <div class="card-body">
                <table class="table">
                
                        <tr>
        
                            
                            <th style="width: 250px;">Description</th>
                            <th style="width: 120px;">Unit</th>
                            <th style="width: 120px;">Rate</th>
                            <th style="width: 120px;">Amount</th>
                        </tr>
                    
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header"><h6>PRELIMINARY</h6></div>
            <div class="card-body">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'PRELIMINARY') as $line)
                        <tr>
        
                            
                            <td style="width: 250px;">{{$line->description}}</td>
                            <td style="width: 120px;">{{$line->unit}}</td>
                            <td style="width: 120px;">N {{number_format($line->rate,2)}}</td>
                            <td style="width: 120px;">N {{number_format($line->amount,2)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-header"><h6>BOREHOLE DRILLING</h6></div>
            <div class="card-body">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'BOREHOLE DRILLING') as $line)
                        <tr>
        
                        
                            <td  style="width: 250px;">{{$line->description}}</td>
                            <td style="width: 120px;">{{$line->unit}}</td>
                            <td style="width: 120px;">N {{number_format($line->rate,2)}}</td>
                            <td style="width: 120px;">N {{number_format($line->amount,2)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-header"><h6>SOLAR PUMP AND POWER REQUIREMENTS</h6></div>
            <div class="card-body">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'SOLAR PUMP AND POWER REQUIREMENTS') as $line)
                        <tr>
        
                            
                            <td  style="width: 250px;">{{$line->description}}</td>
                            <td style="width: 120px;">{{$line->unit}}</td>
                            <td style="width: 120px;">N {{number_format($line->rate,2)}}</td>
                            <td style="width: 120px;">N {{number_format($line->amount,2)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-header"><h6>TANK AND STANCHION</h6></div>
            <div class="card-body">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'TANK AND STANCHION') as $line)
                        <tr>
        
                            
                            <td  style="width: 250px;">{{$line->description}}</td>
                            <td style="width: 120px;">{{$line->unit}}</td>
                            <td style="width: 120px;">N {{number_format($line->rate,2)}}</td>
                            <td style="width: 120px;">N {{number_format($line->amount,2)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-header"><h6>PLUMBING, TAP ISLAND AND RETICULATION</h6></div>
            <div class="card-body">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'PLUMBING, TAP ISLAND AND RETICULATION') as $line)
                        <tr>
        
                            
                            <td  style="width: 250px;">{{$line->description}}</td>
                            <td style="width: 120px;">{{$line->unit}}</td>
                            <td style="width: 120px;">N {{number_format($line->rate,2)}}</td>
                            <td style="width: 120px;">N {{number_format($line->amount,2)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-header"><h6>EXCAVATION AND EARTH WORK</h6></div>
            <div class="card-body">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'EXCAVATION AND EARTH WORK') as $line)
                        <tr>
        
                            
                            <td  style="width: 250px;">{{$line->description}}</td>
                            <td style="width: 120px;">{{$line->unit}}</td>
                            <td style="width: 120px;">N {{number_format($line->rate,2)}}</td>
                            <td style="width: 120px;">N {{number_format($line->amount,2)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>


            
        <div class="card">
            <div class="card-header"><h6>CONCRETE WORK</h6></div>
            <div class="card-body">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'CONCRETE WORK') as $line)
                        <tr>
        
                            
                            <td  style="width: 250px;">{{$line->description}}</td>
                            <td style="width: 120px;">{{$line->unit}}</td>
                            <td style="width: 120px;">N {{number_format($line->rate,2)}}</td>
                            <td style="width: 120px;">N {{number_format($line->amount,2)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        
        <div class="card">
            <div class="card-header"><h6>BLOCK WORK</h6></div>
            <div class="card-body">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'BLOCK WORK') as $line)
                        <tr>
        
                            
                            <td  style="width: 250px;">{{$line->description}}</td>
                            <td style="width: 120px;">{{$line->unit}}</td>
                            <td style="width: 120px;">N {{number_format($line->rate,2)}}</td>
                            <td style="width: 120px;">N {{number_format($line->amount,2)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        

        <div class="card">
            <div class="card-header"><h6>FORM WORK</h6></div>
            <div class="card-body">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'FORM WORK') as $line)
                        <tr>
        
                            
                            <td  style="width: 250px;">{{$line->description}}</td>
                            <td style="width: 120px;">{{$line->unit}}</td>
                            <td style="width: 120px;">N {{number_format($line->rate,2)}}</td>
                            <td style="width: 120px;">N {{number_format($line->amount,2)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-header"><h6>METAL WORK</h6></div>
            <div class="card-body">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'METAL WORK') as $line)
                        <tr>
        
                            
                            <td  style="width: 250px;">{{$line->description}}</td>
                            <td style="width: 120px;">{{$line->unit}}</td>
                            <td style="width: 120px;">N {{number_format($line->rate,2)}}</td>
                            <td style="width: 120px;">N {{number_format($line->amount,2)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        

        <div class="card">
            <div class="card-header"><h6>FINISHES</h6></div>
            <div class="card-body">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'FINISHES') as $line)
                        <tr>
        
                            
                            <td  style="width: 250px;">{{$line->description}}</td>
                            <td style="width: 120px;">{{$line->unit}}</td>
                            <td style="width: 120px;">N {{number_format($line->rate,2)}}</td>
                            <td style="width: 120px;">N {{number_format($line->amount,2)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        

        <div class="card">
            <div class="card-header"><h6>SIGNBOARD</h6></div>
            <div class="card-body">
                <table class="table ">
                    
                  
                        @foreach ($boqLines->where('category', 'SIGNBOARD') as $line)
                        <tr>
        
                            
                            <td  style="width: 250px;">{{$line->description}}</td>
                            <td style="width: 120px;">{{$line->unit}}</td>
                            <td style="width: 120px;">N {{number_format($line->rate,2)}}</td>
                            <td style="width: 120px;">N {{number_format($line->amount,2)}}</td>
                        </tr>
                            
                        @endforeach
                   
                </table>

            </div>
        </div>

        

        

        


      

    </div>

    
@endsection