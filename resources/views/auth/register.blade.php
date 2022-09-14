@extends('base')

@section('content')

@section('title', 'Register')
<body>
    <div class="container col-md-4 offset-md-4 mt-5">
        <div class="col-md-4 offset-md-4">
            <img src="images/logo.png" alt="logo" class="img-fluid mb-3 rounded-circle mt-3 img-responsive center-block d-block mx-auto">
        </div>
        <div class="card shadow mb-5 border border-light rounded">
            <div class="card-header" style="background-color: rgba(127, 169, 199, 0.527)">
                <h3 class='text-center'>Register</h3>
            </div>
            <div class="card-body">
                <form action="{{ '/register' }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="name" name="name" id="name" placeholder="Name" class="form-control">
                        </div>
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        </div>
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control">
                        </div>
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <a href="{{ '/' }}">Already have an account</a>
                        </div>
                        <button class="btn btn-primary px-5">Register</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>
@endsection

<style>
    #basic-addon1 {
    width: 40px;
    text-align: center;
    background-color: rgba(127, 169, 199, 0.527);
}
body{
    background-image: url("images/cover.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
}
</style>
