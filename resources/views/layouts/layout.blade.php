<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Qz4I2/56JkJcjxjDoJJ2Pz3FpU+w3I1dIbv5OHGJ0wARW6HJ30cZC1gJ6u7QenjR4E1f1/8fdr1z4iKWCXh+YQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .navbar .navbar-collapse form {
        margin-left: auto;
        margin-right: 60px; 

    }
    .navbar .navbar-collapse form .form-control {
        width: 200px; 
    }
    .navbar {
        background-color: #000000; 
    }
</style>
    
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/employee">Employees Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form action="{{ route('search') }}" method="GET"   class="form-inline my-2 my-lg-0">
                <div class="row">
                    <div class="col">
                        <input class="form-control mr-sm-2" name="name" type="search" placeholder="Name" aria-label="name">
                    </div>
                    <div class="col">
                        <input class="form-control mr-sm-2" name="email" type="search" placeholder="Email" aria-label="Email">
                    </div>
                    <div class="col">
                        <input class="form-control mr-sm-2" name="mobile" type="search" placeholder="Mobile" aria-label="mobile">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </div>
                </div>
            </form>
            @guest
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('registration')}}"><i class="glyphicon glyphicon-user"></i>Register</a></li>
                <li style="margin-left: 20px; margin-right: 0px;"><a href="{{url('login')}}"><i class="glyphicon glyphicon-log-in"></i>Login</a></li>
            </ul> 
            @else
            <li style="margin-right: 20px;"><a href="{{url('logout')}}"><i class="glyphicon glyphicon-log-in"></i>Logout</a></li>
            @endguest
           
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div> 
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('flash_message'))
    <div class="alert alert-success">
        {{ session('flash_message') }}
    </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
