@extends('layouts.app')


@section('content')


    <div class="page-content">

        <div class="p-5"></div>


        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-warning">{{$error}}</p>
                            @endforeach
                        @endif

                        
                        @if(Session::has('staff_record_msg'))
                        <p class="alert alert-info">{{ Session::get('staff_record_msg') }}</p>
                        @endif


                        <form action="{{route('create_staff_account')}}" method="post">
                            @csrf
       
                       <div class="form-group mb-3">
                           <label for="">Fullname:</label>
                           <input type="text" class="form-control" name="name" placeholder="Enter Staff Fullname">
               
                       </div>
               
                       <div class="form-group mb-3">
                           <label for="">Email:</label>
                           <input type="email" class="form-control" name="email" placeholder="Enter Staff Email">
               
                       </div>
           
                       <div class="form-group mb-3">
                           <label for="">Select Role:</label>
                           <select name="role" id="" class="form-control">
                               <option value="">--Select Role--</option>
                               <option value="admin">Office Executive</option>
                               <option value="superadmin">Super Admin</option>
                               <option value="technician">Technician</option>
                               <option value="driver">Driver</option>
                               <option value="secretary">Secretary</option>
                               <option value="accounts">Accountant</option>
                           </select>
                       </div>
           
                       <div class="form-group mb-3">
                           <label for="">Create Password:</label>
                           <input type="password" class="form-control" name="password">
                       </div>


                       <div class="form-group mb-3">
                            <label for="">Confrim Password:</label>
                            <input type="password" class="form-control" name="password-confirmation">
                        </div>

                        <div class="form-group mb-3">
                            <button class="btn btn-primary shadow btn-lg">
                                Create Account
                            </button>
                        </div>
           
                    </form>
                    </div>
                </div>
            </div>
        </div>




    </div>
    
@endsection