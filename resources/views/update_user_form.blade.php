@extends('navbar')

@section('content')
@if(Auth::user() && Auth::user()->role == 'administrator')
<div class="card mt-1 mb-3">
    <div class="card-header">Update Profile</div>
    <div class="d-flex p-3 flex-column align-items-center">


        <form action="{{route('update_user_logic')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <h5>{{ $user->first_name}}</h5>
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" name="role" id="role" value="{{$user->role}}">
                    <option value="registered">User</option>
                    <option value="administrator">Admin</option>
                </select>
              </div>

              <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
  </div>
  @elseif(Auth::user() && Auth::user()->role == 'registered')
<script>window.location = "/home";</script>
@else
<script>window.location = "/";</script>
@endif
@endsection