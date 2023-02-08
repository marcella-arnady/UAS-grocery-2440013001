@extends('navbar')

@section('content')

@if ( auth()->check() )
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
                    <h5><strong>Description</strong></h5>
                    <p class="product-description">{{ $product_detail->detail}}</p>                 
                    <h5><strong>Price:</strong></h5>
                    <p>IDR {{ $product_detail->price }}</p>

                  

                    <form action="{{route('add_to_wishlist')}}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="product_id" value="{{$product_detail->id}}">

                        <div class="action">
                            <button class="btn btn-default bg-kuning text-white" type="submit">Add to Cart<i class="ml-2 fa fa-shopping-cart"></i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@else
<script>window.location = "/";</script>
@endif
@endsection
