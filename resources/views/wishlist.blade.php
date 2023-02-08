@extends('navbar')

@section('content')
@if ( auth()->check() )
@if (count($wishlists) < 1)
    <h4 class="p-5 text-center"><strong>Tidak ada produk di Wishlist</strong></h4>
@else
<div class="container mb-2">
<div class="d-flex justify-content-center row">
    <div class="col-md-10 p-5">
        @foreach ($wishlists as $wishlist)
        @php
            $product = $wishlist->products;
        @endphp
        <div class="row p-2 bg-white border rounded mt-2">
            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{ asset("storage/images/$product->photo") }}"></div>
            <div class="col-md-6 mt-1">
                <h5 class="text-truncate">{{$product->name}}</h5>
                <div class="mt-1 mb-4 spec-1"><span>Harga : IDR {{$product->price}}</span></div>
            </div>
            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                <div class="d-flex flex-column d-grid gap-2 mt-2" data-toggle="buttons">
                   
                    <form action={{route('delete_wishlist')}} method="POST" class="d-flex flex-column mt-2">
                        @csrf
                        @method("DELETE")
                        <input type="hidden" name="wishlist_id" value="{{$wishlist->id}}">
                        <button class="btn btn-outline-danger" type="submit" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"> Hapus </i></button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
</div>


<div class="container mb-2">
<div class="d-flex justify-content-center row">
    <div class="col-md-10 p-5">
        
    <form action={{route('buy_wishlist')}} method="POST" class="d-flex flex-column mt-2">
                            @csrf
                            @method("DELETE")
                    
                            <input type="hidden" name="wishlist_id" value="{{$wishlist->id}}">
<button  type="submit" data-toggle="tooltip" class="btn btn-primary btn-lg float-right">Purchase</button>

</form>
</div>
</div>
</div>


@endif
@else
<script>window.location = "/";</script>
@endif
@endsection
