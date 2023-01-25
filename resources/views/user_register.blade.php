@extends('navbar')

@section('content')

<div class="login-form">
    @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
    @endif
    <form action="{{route('register_logic')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2 class="text-center">Daftar</h2>
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Ketik Nama Disini" required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Ketik Email Disini" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Ketik Password Disini">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Konfirmasi Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password" placeholder="Ketik Ulang Password Disini">
        </div>
        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <div class="custom-control custom-radio">
                <input type="radio" id="male" name="gender" class="custom-control-input" value="male" required>
                <label class="custom-control-label" for="male">Pria</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="female" name="gender" class="custom-control-input" value="female" required>
                <label class="custom-control-label" for="female">Wanita</label>
              </div>
        </div>
        <div class="form-group">
            <label for="inputCountry">Negara</label>
            <select id="inputCountry" name="country" class="form-control" required>
              <option selected value="indonesia">Pilih Negara</option>
              <option value="indonesia">Indonesia</option>
              <option value="japan">Japan</option>
              <option value="singapore">Singapore</option>
              <option value="malaysia">Malaysia</option>
              <option value="laos">Laos</option>
            </select>
          </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
        </div>
    </form>
    <p class="text-center">
       Sudah memiliki akun?
        <a href="{{route('login_user')}}"><u>Masuk disini</u></a>
    </p>
</div>

@endsection
