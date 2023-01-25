<!-- @if(auth()->check())
                    @if(\Illuminate\Support\Facades\Auth::user()->role == 'member')
                        <a href="/aboutus" class="text-decoration-none text-black px-3 fw-semibold">About Us</a>
                        <a href="/products" class="text-decoration-none text-black px-3 fw-semibold">Products</a>
                        <a href="/transaction" class="text-decoration-none text-black px-3 fw-semibold">My Transactions</a>
                    @else
                        <a href="/aboutus" class="text-decoration-none text-black px-3 fw-semibold">About Us</a>
                        <a href="/products" class="text-decoration-none text-black px-3 fw-semibold">Manage Products</a>
                        <a href="/addcategory" class="text-decoration-none text-black px-3 fw-semibold">Add Category</a>
                    @endif
                @else
                    <a href="/aboutus" class="text-decoration-none text-black px-3 fw-semibold">About Us</a>
                    <a href="/products" class="text-decoration-none text-black px-3 fw-semibold">Products</a>
                @endif -->

@include('head')
<div class="konten">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
    <a class="navbar-brand text-navbar" href="{{ route('home') }}"><strong>Fortune100</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mr-auto">

      @if ( auth()->check() )
        @if (Auth::user() && Auth::user()->role == 'registered')
          <li class="nav-item">
              <a class="nav-link text-navbar" href="/about">Tentang Kami</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-navbar" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Kategori
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/category/1">Kayu</a>
              <a class="dropdown-item" href="/category/2">Rotan</a>
              <a class="dropdown-item" href="/category/3">Bambu</a>
            </div>
          </li>
          <li class="nav-item">
              <a class="nav-link text-navbar" href="/contact">Kontak</a>
          </li>
          @elseif (Auth::user() && Auth::user()->role == 'administrator')
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-navbar" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Kategori
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/category/1">Kayu</a>
              <a class="dropdown-item" href="/category/2">Rotan</a>
              <a class="dropdown-item" href="/category/3">Bambu</a>
            </div>
          </li>
          <li class="nav-item">
                <a class="nav-link text-navbar" href="{{ route('manage_product') }}">Kelola Produk</a>
          </li>
          @endif
      @else
      <li class="nav-item">
            <a class="nav-link text-navbar" href="/about">Tentang Kami</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-navbar" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Kategori
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/category/1">Kayu</a>
            <a class="dropdown-item" href="/category/2">Rotan</a>
            <a class="dropdown-item" href="/category/3">Bambu</a>
          </div>
        </li>
        <li class="nav-item">
            <a class="nav-link text-navbar" href="/contact">Kontak</a>
        </li>
        @endif
      </ul>

      <ul class="nav navbar-nav">
        @if ( auth()->check() )
        @if (Auth::user() && Auth::user()->role == 'registered')
        <a class="collapse navbar-collapse text-decoration-none mr-2 text-navbar" href="{{route('wishlist')}}" role="button">Wishlist</a>
        @endif
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-navbar" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->name}}
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('profile') }}">Profil</a>
                    @if (Auth::user()->role == 'registered')
                        <a class="dropdown-item" href="{{ route('wishlist') }}">Wishlist</a>
                    @endif
                    <a class="dropdown-item" href="{{ route('logout_logic') }}">Keluar</a>
                </div>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link text-navbar" href="{{ route('login_user') }}">Masuk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white btn btn-block bg-kuning" href="{{ route('register_form') }}">Daftar</a>
            </li>
        @endif
      </ul>
    </div>
    </div>
</nav>

<div class="">
    @yield('content')
</div>


<footer class="text-center text-lg-start bg-kuning text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block text-white">
        <span>Terhubung dengan kami di rangkaian sosial media:</span>
      </div>

      <div>
        <a href="https://www.facebook.com/Fortune100.id" class="me-4 text-reset">
          <i class="fa fa-facebook-f"></i>
        </a>
        <a href="https://www.twitter.com/" class="me-4 text-reset">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="https://www.google.com/" class="me-4 text-reset">
          <i class="fa fa-google"></i>
        </a>
        <a href="https://instagram.com/fortune100.id?igshid=YmMyMTA2M2Y=" class="me-4 text-reset">
          <i class="fa fa-instagram"></i>
        </a>
      </div>

    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="text-white">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-left">
            <!-- Content -->
            <h4 class="font-weight-bold text-uppercase fw-bold mb-4">
              Fortune100
            </h4>
            <p>
                Kerajinan tangan berkualitas tinggi dari bahan alam
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Produk
            </h6>
            <p>
              <a href="/category/1" class="text-reset">Kayu</a>
            </p>
            <p>
              <a href="/category/2" class="text-reset">Rotan</a>
            </p>
            <p>
              <a href="/category/3" class="text-reset">Bambu</a>
            </p>
          </div>
          <!-- Grid column -->


          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
            <p><i class="fa fa-home me-3"></i> Ruko Pasar Intermoda blok C 11 BSD City</p>
            <p>
              <i class="fa fa-envelope me-3"></i>
              info@fortune.com
            </p>
            <p><i class="fa fa-phone me-3"></i> + 62 812 3456 7890</p>
            <p><i class="fa fa-print me-3"></i> + 62 21 7595 2145</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4 text-white" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright: Fortune100
    </div>
    <!-- Copyright -->
  </footer>
</div>
