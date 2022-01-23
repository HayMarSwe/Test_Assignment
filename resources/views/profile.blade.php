@extends('layout.master')

@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title"> Profile </h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> User Profile </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">

    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="col-lg-8 col-xlg-9">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material mx-2" action="{{url('update')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-12"> Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Name"
                                        class="form-control form-control-line" value="{{ $data->name }}" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="Email"
                                        class="form-control form-control-line" name="email"
                                        value="{{$data->email}}">
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="col-md-12">Make New Password</label>
                                <div class="col-md-12">
                                    <input type="password" value=""
                                        class="form-control form-control-line" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success text-white"> Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection


