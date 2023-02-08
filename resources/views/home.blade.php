@extends('navbar')

@section('content')
@if ( auth()->check() )
<div class="banner">
    <div class="container ">
        <div class=" konten-banner float-right">
                <div class="py-5">
                <h1 class="text-banner">Amazing E-Grocery</h1>
                <h3 class="text-banner">The Best Virtual Supermarket in Town</h3>
                </div>
            
        </div>
    </div>
</div>

<div class="container mt-3">
    @if ($errors->any())
        <strong>{{$errors->first()}}</strong>
    @endif



    @if (count($products) < 1)
        <h4>NO PRODUCTS FOUND</h4>
    @else
        
        <div class="container mb-3">
            <div class="container">
            <div class="row mb-4">
                @foreach ($products as $product)
                <div class="col-sm-3 mt-3">
                    <div class="card card-border" style="color: black">
                        <img src="{{ asset("storage/images/$product->photo") }}" class="card-img-top img-thumbnail thumb" alt="">
                        <div class="card-body">
                            <p class="card-title text-truncate">{{ $product->name }}</p>
                            <p class="card-text"><strong>IDR {{ $product->price }}</strong></p>
                            <a class="text-white btn btn-block bg-kuning" href="/detail/{{$product->id}}">Detail</a>
                        </div>
                    </div>
                </div>
                
                @endforeach
                
            </div>
            
            </div>
        </div>
       
 
    @endif
</div>
<div class="container">
<div class="float-center" style="margin: 2rem">
                {{$products->links()}}
            </div>
</div>

@else
<script>window.location = "/";</script>
@endif
@endsection