@extends('layouts.main')
@section('content')
<!-- Material form register -->
<div class="container">
    <div class="card">
    
        <h5 class="card-header text-center py-4">
            <strong>Tambah Siswa</strong>
        </h5>

        @if (session('successMsg'))

    <div class="alert alert-success" role="alert">
        {{ session('successMsg')}}
    </div>
    
        @endif
    
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
    
            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="{{ route('store') }}" method="POST">
                
                {{ csrf_field() }}

                <div class="form-row">
                    <div class="col">
                        <!-- First name -->
                        <div class="md-form">
                            <input name="firstname" type="text" id="materialRegisterFormFirstName" class="form-control">
                            <label for="materialRegisterFormFirstName">First name</label>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                            <input name="lastname" type="text" id="materialRegisterFormLastName" class="form-control">
                            <label for="materialRegisterFormLastName">Last name</label>
                        </div>
                    </div>
                </div>
    
                <!-- E-mail -->
                <div class="md-form mt-0">
                    <input name="email" type="email" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">E-mail</label>
                </div>
    
                <!-- Phone number -->
                <div class="md-form">
                    <input name="phone" type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                    <label for="materialRegisterFormPhone">Phone number</label>
                </div>
    
            
                <!-- Sign up button -->
                <button class="btn btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Tambah</button>
    
               
    
            </form>
            <!-- Form -->
    
        </div>
    
    </div>
</div>
<!-- Material form register -->
@endsection