@extends('layout.app')

@section('content')



<main class="login-form">

    @if(session('error'))
    <div class="alert mt-5 mb-5">
      <p class="error-msg"> {{session('error')}}</p>  
      <p class="closebtn" onclick="this.parentElement.style.display='none';">&times;</>
    </div>    
    @endif

    <div class="cotainer mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="login-brand text-center">
                        <img src="{{('user/login.jpg')}}" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
</main>
@endsection