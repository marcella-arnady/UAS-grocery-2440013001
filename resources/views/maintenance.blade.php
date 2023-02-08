@extends('navbar')

@section('content')
@if(Auth::user() && Auth::user()->role == 'administrator')
<div class="container mt-5 mb-3">
    @if ($errors->any())
        <strong>{{$errors->first()}}</strong>
    @endif


    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            @foreach ($users as $users)
            <div class="row p-2 bg-white border rounded mt-2">
                <div class="col-md-5 mt-1">
                    <h5>{{ $users->first_name }}</h5>
                    <p>Role: {{ $users->role }}</p>
                </div>
                <div class="align-items-center align-content-center col-md-6 border-left ">
                    <div class="d-flex flex-column d-grid gap-2 mt-4" data-toggle="buttons">
                        <a class="btn btn-outline-warning" href="{{route('update_user_form', ["user_id" => $users->id])}}" role="button"><i class="fa fa-edit"> Edit</i></a>
                        <form action={{route('delete_user')}} method="POST" class="d-flex flex-column mt-2">
                            @csrf
                            @method("DELETE")
                            <input type="hidden" name="user_id" value="{{$users->id}}">
                            <button class="btn btn-outline-danger" type="submit" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"> Delete</i></button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
        
    </div>
</div>
@elseif(Auth::user() && Auth::user()->role == 'registered')
<script>window.location = "/home";</script>
@else
<script>window.location = "/";</script>
@endif

@endsection