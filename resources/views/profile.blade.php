@extends('navbar')

@section('content')
<div class="col d-flex justify-content-center mb-3 p-5">
<div class="card w-50 mt-3">
<h2 class="card-header text-center">Profil</h2>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">Nama</label>
            <input type="text" name="name" class="form-control text-capitalize" placeholder="{{ Auth::user()->name }}" readonly>
        </div>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" placeholder="{{ Auth::user()->email }}" readonly>
        </div>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">Jenis Kelamin</label>
            <input type="text" name="gender" class="form-control text-capitalize" placeholder="{{ Auth::user()->gender }}" readonly>
        </div>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">Negara</label>
            <input type="text" name="email" class="form-control text-capitalize" placeholder="{{ Auth::user()->country }}" readonly>
        </div>
</div>
</div>
@endsection
