@extends('navbar')

@section('content')

<a class="btn btn-secondary mt-3 mb-3" href="{{route('manage_product')}}" role="button">Back</a>

@if(Auth::user() && Auth::user()->role == 'administrator')
<div class="card mt-1 mb-3">
    <div class="card-header">Update Produk</div>
    <div class="d-flex p-3 flex-column align-items-center">

        @foreach ($errors->all() as $error)
            {{error}}
        @endforeach
        <form action="{{route('update_product_logic')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
              </div>
              <div class="form-group">
                <label for="category_id">Kategori</label>
                <select class="form-control" name="category_id" id="category_id" value="{{$product->category_id}}">
                    <option value="1">Kayu</option>
                    <option value="2">Rotan</option>
                    <option value="3">Bambu</option>
                </select>
              </div>
              <div class="form-group">
                <label for="detail">Detail</label>
                <textarea class="form-control" id="detail" rows="3" name="detail">{{$product->detail}}</textarea>
              </div>
              <div class="form-group">
                <label for="price">Harga</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">IDR</div>
                  </div>
                  <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}">
                </div>
              </div>
              <div class="form-group">
                <label for="photo">Gambar</label>
                <input type="file" class="form-control" id="photo" name="photo" value="{{$product->photo}}" />
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
  </div>
  @else
  <center>
    <h2>Only admin can access this page</h2>
  </center>
@endif

@endsection
