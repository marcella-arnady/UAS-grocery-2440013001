@extends('navbar')

@section('content')

<form class="d-flex" action={{route('search_product')}}>
    <input class="form-control me-2" type="search" name="name" placeholder="Search" aria-label="Search">
    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
</form>
<div class="card">
    <div class="card-header">
        Search Result
    </div>
    <div class="container">
    <div class="row mb-5">
        @foreach ($search_products as $product)
        <div class="col-sm-3 mt-3">
            <div class="card card-border">
                <a href="/detail/{{$product->id}}" style="text-decoration: none">
                <img src="{{ asset("storage/images/$product->photo") }}" class="card-img-top img-thumbnail thumb" alt="">
                <div class="card-body">
                    <p class="card-title text-truncate">{{ $product->name }}</p>
                    <p class="card-text"><strong>IDR {{ $product->price }}</strong></p>
                </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>

<div class="float-right" style="margin: 2rem">
    {{$search_products->links()}}
</div>
@endsection
