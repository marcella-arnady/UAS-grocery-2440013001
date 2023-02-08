@extends('navbar')

@section('content')
@if ( auth()->check() )
<div class="col d-flex justify-content-center mb-3 p-5">
<div class="card w-50 mt-3">
<h2 class="card-header text-center">Profile</h2>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">First Name</label>
            <input type="text" name="first_name" class="form-control text-capitalize" placeholder="{{ Auth::user()->first_name }}" readonly>
        </div>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">Last Name</label>
            <input type="text" name="last_name" class="form-control text-capitalize" placeholder="{{ Auth::user()->last_name }}" readonly>
        </div>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" placeholder="{{ Auth::user()->email }}" readonly>
        </div>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">Gender</label>
            <input type="text" name="gender" class="form-control text-capitalize" placeholder="{{ Auth::user()->gender }}" readonly>
        </div>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">Role</label>
            <input type="text" name="role" class="form-control text-capitalize" placeholder="{{ Auth::user()->role }}" readonly>
        </div>
        <div class="card-body col-sm-12 mx-auto">
        <div class="preview-pic tab-content">
        <label for="">Profile Picture</label>
            <div class="tab-pane active" id="pic-1"><img src="{{ asset('/storage/images/'.Auth::user()->photo) }}" /></div>
        </div>
        </div>
        
@else
<script>window.location = "/";</script>
@endif
@endsection
