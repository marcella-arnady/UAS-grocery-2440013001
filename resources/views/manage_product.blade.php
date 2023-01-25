@extends('navbar')

@section('content')

@if(Auth::user() && Auth::user()->role == 'administrator')
<div class="container mt-5 mb-3">
    @if ($errors->any())
        <strong>{{$errors->first()}}</strong>
    @endif
    <div class="form-row">
        <form class="d-flex" action={{route('search_product_admin')}}>
            <input class="form-control me-2" type="search" name="name" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <form class="ml-auto" action={{route('product_add_form')}}>
            <button class="btn btn-secondary" type="submit"><i class="fa fa-plus"> Add Product</i></button>
        </form>
    </div>

    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            @foreach ($products as $product)
            <div class="row p-2 bg-white border rounded mt-2">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{ asset("storage/images/$product->photo") }}"></div>
                <div class="col-md-6 mt-1">
                    <h5>{{ $product->name }}</h5>
                    <div class="mt-1 mb-1 spec-1"><span>{{$product->detail}}</span></div>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">IDR {{$product->price}}</h4>
                    </div>
                    <div class="d-flex flex-column d-grid gap-2 mt-4" data-toggle="buttons">
                        <a class="btn btn-outline-warning" href="{{route('update_product_form', ["product_id" => $product->id])}}" role="button"><i class="fa fa-edit"> Edit</i></a>
                        <form action={{route('delete_product')}} method="POST" class="d-flex flex-column mt-2">
                            @csrf
                            @method("DELETE")
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <button class="btn btn-outline-danger" type="submit" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"> Delete</i></button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
        <div class="float-right" style="margin: 2rem">
            {{$products->links()}}
        </div>
    </div>
</div>
@else
  <center>
    <h2>Only admin can access this page</h2>
  </center>
@endif

@endsection
