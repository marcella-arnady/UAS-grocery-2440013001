@extends('navbar')

@section('content')

<div class="login-form">
    <form action="{{route('login_logic')}}" method="POST"">
        @csrf
        <h2 class="text-center">Login</h2>
        @if(session('error'))
            <div class="alert alert-danger">
            <b>Oops!</b> {{session('error')}}
            </div>
        @endif
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
        </div>
        <div class="clearfix">
            <label for="float-left form-check-label">
                <input type="checkbox" name="remember" value="1">
                 Remember Me
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
    </form>

    <div class="d-flex justify-content-center">
        <p>- or login with -</p>
    </div>
    
    <div class="d-flex justify-content-center mb-3">
        <a class="btn btn-danger" href="{{ '/auth/redirect'}}"><i class="fa fa-google">  Login with Google </i></a>
    </div>

    <p class="text-center">
        Don't have account?
        <a href="{{route('register_form')}}"><u>Register here</u></a>
    </p>
</div>

@endsection
