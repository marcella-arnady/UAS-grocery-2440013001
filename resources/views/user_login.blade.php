@extends('navbar')

@section('content')

<div class="login-form">
    <form action="{{route('login_logic')}}" method="POST"">
        @csrf
        <h2 class="text-center">Masuk</h2>
        @if(session('error'))
            <div class="alert alert-danger">
            <b>Opps!</b> {{session('error')}}
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
                 Ingat saya
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </div>
    </form>

    <div class="d-flex justify-content-center">
        <p>- atau lanjutkan dengan -</p>
    </div>
    
    <div class="d-flex justify-content-center mb-3">
        <a class="btn btn-danger" href="{{ '/auth/redirect'}}"><i class="fa fa-google">  Masuk dengan Google </i></a>
    </div>

    <p class="text-center">
        Belum punya akun?
        <a href="{{route('register_form')}}"><u>Daftar disini</u></a>
    </p>
</div>

@endsection
