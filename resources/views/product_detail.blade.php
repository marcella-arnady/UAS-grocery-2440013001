@extends('navbar')

@section('content')


<div class="container mb-3">
    <div class="card card-detail">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                      <div class="tab-pane active" id="pic-1"><img src="{{ asset("storage/images/$product_detail->photo") }}" /></div>
                    </div>
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">{{ $product_detail->name }}</h3>
                    <div class="rating mb-3">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <span class="review-no">41 terjual</span>
                    </div><br><br>
                    <h5><strong>Deskripsi</strong></h5>
                    <p class="product-description">{{ $product_detail->detail}}</p>                 
                    <h5><strong>Harga :</strong></h5>
                    <p>IDR {{ $product_detail->price }}</p>
                    <h5><strong>Material :</strong></h5>
                    @php
                    if($product_detail->category_id == '1'){
                        $category_name = 'Kayu';
                    } elseif($product_detail->category_id == '2'){
                        $category_name = 'Rotan';
                    } else {
                        $category_name = 'Bambu';
                    }
                    @endphp
                    <p class="text-kuning">{{ $category_name }}</p>

                    @if ( Auth::user() && Auth::user()->role == 'registered' )
                    <form action="{{route('add_to_wishlist')}}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="product_id" value="{{$product_detail->id}}">

                        <div class="action">
                            <button class="btn btn-default bg-kuning text-white" type="submit">Tambah ke Wishlist<i class="ml-2 fa fa-heart"></i></button>
                        </div>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
