@extends('layouts.app')

@section('content')

<div class="page-content">

    <div class="container">
        <h4 class="py-5">Hi, {{Auth::user()->name}}</h4>
    </div>
    <div class="col-12 ">
        <div class="card radius-10  border-0 border-3">
            <div class="card-body">
                <div class="">
                    <div>
                        <h4 class="mb-0 text-secondary text-center">

                        IMPROVING WATER SANITATION AND HYGIENE CODE: IWASH 2022</h4>
                       
                     
                    </div>
                    {{-- <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
                        <i class='lni lni-cog'></i>
                    </div> --}}
                </div>
            </div>
        </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            

            
            <a href="" class="">
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">LOTS</p>
                                    <h4 class="my-1 text-info">{{$lots->count()}}</h4>
                                 
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
                                    <i class='lni lni-delivery'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

                 
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">STATES</p>
                                <h4 class="my-1 text-success">
                                 3
                                </h4>
                               
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                                <i class='lni lni-delivery' ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="" class="">
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">SITES</p>
                                    <h4 class="my-1 text-info">{{$sites->count()}}</h4>
                                 
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
                                    <i class='lni file'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>


      
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">REPORTS</p>
                                <h4 class="my-1 text-warning">0</h4>
                               
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div><!--end row-->

         <div class="row">
        <div class="col-12 col-lg-12 col-xl-12 d-none">
          <div class="card radius-10">
            <div class="card-header bg-transparent">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0 py-1">Installation Points</h6>
                    </div>
                    
                </div>
               </div>
             <div class="card-bod d-none">
                    {{-- <div id="dashboard-map" style="height: 250px"></div> --}}
                    <map-component></map-component>
                    
                   
                    
                    
              </div>
           </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8 col-xl-8">
            <div class="card radius-10">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0 py-1">Activity Log</h6>
                        </div>
                        
                    </div>
                </div>
                <div class="card-body">
                        <div id="dashboard-map" style="height: 250px"></div>
                        
                        <div class="mb-4 d-none">
                            <p class="mb-2"><i class="flag-icon flag-icon-us me-1"></i> USA <span class="float-end">50%</span></p>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-gradient-bloody" role="progressbar" style="width: 50%"></div>
                            </div>
                        </div>
                        
                        
                </div>
            </div>
            </div>

            <div class="col-12 col-lg-4 col-xl-4">
                <div class="card radius-10">
                    <div class="card-header bg-transparent">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0 py-1">Messages</h6>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-body">
                    <div id="chart11" style="height:250px;"></div>
                </div>
            </div>

            

            
            </div>
        </div><!--End Row-->

        <div class=" d-none col-12 col-lg-4 col-xl-4">
            <div class="card radius-10">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0 py-1">Sales This Week</h6>
                        </div>
                        
                    </div>
                   </div>
                <div class="card-body">
                 <div id="chart11" style="height:250px;"></div>
               </div>
           </div>

           

          
        </div>
     </div><!--End Row-->
</div>


    
@endsection