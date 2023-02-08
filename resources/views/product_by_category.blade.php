@extends('navbar')

@section('content')
<div class="container">
<div class="card mt-3 mb-3">
    <div class="card-header text-kuning">
        @php
            if($products[0]->category_id == '1'){
                $category_name = 'Vegetable';
            } elseif($products[0]->category_id == '2'){
                $category_name = 'Meat & Fish';
        @endphp
        {{$category_name}}
    </div>
    <div class="container">
    <div class="row mb-5">
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

<div class="float-right" style="margin: 2rem">
    {{$products->links()}}
</div>
</div>
@endsection
