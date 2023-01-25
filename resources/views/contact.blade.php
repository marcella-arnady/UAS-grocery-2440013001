@extends('navbar')

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset("storage/assets/contactus.jpg") }}" alt="First slide">
      </div>
    </div>
</div>
<div class="jumbotron text-center bg-kuning text-white">
    <h1 class="display-4">Hi! Kami siap membantu!</h1>
    <p class="lead">Kami sangat menjaga kerahasiaan pelanggan setia kami dan kami <br> memerhatikan seluruh detail yang diberikan melalui platform ini.</p>
</div>
<div class="bg-kuning-telor p-5">
<div class="login-form">
    <form action="{{route('contact_message')}}" method="POST"">
        @csrf
        <h2 class="">HUBUNGI KAMI</h2>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Ketik Email Disini" required>
        </div>
        <div class="form-group">
            <label for="">Nama</label>
            <input type="name" name="name" class="form-control" placeholder="Ketik Nama Disini" required>
        </div>
        <div class="form-group">
            <label for="">Pesan</label>
            <textarea class="form-control" name="message" id="textAreaExample1" placeholder="Ketik Pesan Disini" rows="4"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="text-white btn btn-block bg-kuning">KIRIM</button>
        </div>
    </form>
</div>
</div>

@endsection
