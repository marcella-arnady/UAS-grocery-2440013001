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
        <h2 class="text-center">Register</h2>
        <div class="form-group">
            <label for="">First Name</label>
            <input type="text" name="first_name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" name="last_name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password" placeholder="Re-enter Password">
        </div>
        <div class="form-group">
            <label for="">Gender</label>
            <div class="custom-control custom-radio">
                <input type="radio" id="male" name="gender" class="custom-control-input" value="male" required>
                <label class="custom-control-label" for="male">Male</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="female" name="gender" class="custom-control-input" value="female" required>
                <label class="custom-control-label" for="female">Female</label>
              </div>
        </div>
        <div class="form-group">
            <label for="inputRole">Role</label>
            <select id="inputRole" name="role" class="form-control" required>
              <option value="registered">User</option>
              <option value="administrator">Admin</option>
            </select>
          </div>

          <div class="form-group">
              <label for="photo">Profile Picture</label>
              <input type="file" class="form-control" id="photo" name="photo" />
            </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
    </form>
    <p class="text-center">
       Have account?
        <a href="{{route('login_user')}}"><u>Login here</u></a>
    </p>
</div>

@endsection
