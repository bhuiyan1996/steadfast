@extends('backend.master')
@section('backend_content')


      


            <div class="col-md-4 col-lg-4 col-sm-6  p-4">
                <div class="card-body bg-warning">
                    <a class="nav-link" href="{{route('user.list')}}">
                        <h5 class="card-title text-white bg-dark">User</h5></a>
                    
                    <p class="mb-4">
                        <span class="fw-bold">{{\App\Models\User::count()}}</span>
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-6  p-4">
                
                <div class="card-body bg-primary">
                    <a href="{{route('vat_cal.list')}}">
                        <h5 class="card-title text-white text-light bg-dark">Vat Valculator</h5></a>
                   
                    <p class="mb-4">
                        <span class="fw-bold"></span>
                    </p>
                </div>
            </div> 



        


                




@endsection
