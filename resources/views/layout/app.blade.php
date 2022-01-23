<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> TEST </title>
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/style.min.css')}}" rel="stylesheet">
  <style>
    alert {
  opacity: 1;
  transition: opacity 0.6s;
}
.alert {
  background-color: #CB6D51;
  margin: auto;
  width: 60%;
  height: 50px;
  padding: 10px;
  color: white;
  text-align: center;
  margin-bottom: -50px;
}
.error-msg{
  float: left;
}

.closebtn {
  margin-left: 5px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

</style>
</head>


<body style="background-image:url('');">
    <div class="container">
        <nav class="navbar top-navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
            <div class="container">
                <a class="navbar-brand mr-auto" href="#">
                    Test Assignment
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav float-end">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @include('inc.messages')
        
        @yield('content')
        
    </div>

  <script src="{{ asset('assets/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/sidebarmenu.js')}}"></script> 
  <script src="{{ asset('assets/custom.min.js')}}"></script>

</body>
</html>
