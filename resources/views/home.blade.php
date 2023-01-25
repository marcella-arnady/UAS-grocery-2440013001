@extends('navbar')

@section('content')

<div class="banner">
    <div class="container">
        <div class="row centered">
            <div class="col-sm-5">
                <div class="py-5">
                <h1>Fortune100</h1>
                <p>Menghadirkan keindahan dan fungsionalitas karya kerajinan berkualitas tinggi dari bahan alam yang dibuat oleh tangan terampil para pengrajin lokal</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    @if ($errors->any())
        <strong>{{$errors->first()}}</strong>
    @endif

    <form class="d-flex" action={{route('search_product')}}>
        <input class="form-control me-2" type="search" name="name" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
    </form>

    @if (count($categories) < 1)
        <h4>NO PRODUCTS FOUND</h4>
    @else
        @foreach ($categories as $category)
        <div class="container mb-3">
        <div class="card text-kuning">
            <div class="card-header font-weight-bold">
                {{$category->name}}
                <a class="ml-3 font-weight-normal" href="/category/{{$category->id}}" style="color: grey">Lihat semua</a>
            </div>
            <div class="container">
            <div class="row mb-4">
                @foreach ($category->products as $product)
                <div class="col-sm-3 mt-3">
                    <div class="card card-border" style="color: black">
                        <img src="{{ asset("storage/images/$product->photo") }}" class="card-img-top img-thumbnail thumb" alt="">
                        <div class="card-body">
                            <p class="card-title text-truncate">{{ $product->name }}</p>
                            <p class="card-text"><strong>IDR {{ $product->price }}</strong></p>
                            <a class="text-white btn btn-block bg-kuning" href="/detail/{{$product->id}}">Lihat</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>
        </div>
        @endforeach

    @endif
</div>

@endsection
