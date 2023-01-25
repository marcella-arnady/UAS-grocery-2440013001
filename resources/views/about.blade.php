@extends('navbar')

@section('content')

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{asset('storage/assets/kursirotan.jpg')}}"></div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center align-items-center text-center bg-kuning" style="border-top-left-radius: 50px; border-top-right-radius: 50px">
                    <h1 class="text-white mt-3">Fortune100</h1>
                </div>
                <div class="d-flex justify-content-center align-items-center bg-kuning" style="border-bottom-left-radius: 50px; border-bottom-right-radius: 50px">
                    <div class="text-white">
                        <div class="d-flex justify-content-start w-100 mt-5 px-5 mb-5">
                            <h7>Menghadirkan keindahan dan fungsionalitas karya kerajinan berkualitas tinggi dari bahan alam yang dibuat oleh tangan terampil para pengrajin lokal. <br><br>
                            Kami menyediakan platform bagi pelanggan yang ingin berkunjung secara virtual ke toko kami. Silakan berkunjung dan melihat hasil karya kerajinan yang indah dan fungsional, tak lupa sekaligus melestarikan alam dengan menggunakan bahan alami. <br><br>
                            Produk siap diantar ke rumah Anda menggunakan Gojek/Grab dengan pengemasan seaman mungkin untuk memastikan produkmu sampai dengan selamat.
                        </h7>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
