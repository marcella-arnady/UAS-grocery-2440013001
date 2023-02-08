

@include('head')
<div class="konten">
<div class="card text-white bg-info mb-0">
  <img class="card-img-top">
  <div class="card-body">
  <h1 class="text-center text-atas">Amazing E-Grocery</p>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-kuning">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mr-auto">

      @if ( auth()->check() )
        @if (Auth::user() && Auth::user()->role == 'registered')

          <li class="nav-item">
              <a class="nav-link text-navbar" href="/home">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-navbar" href="/wishlist">Cart</a>
          </li>
         
          <li class="nav-item">
              <a class="nav-link text-navbar" href="/profile">Profile</a>
          </li>
          @elseif (Auth::user() && Auth::user()->role == 'administrator')
          <li class="nav-item">
              <a class="nav-link text-navbar" href="/home">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-navbar" href="/wishlist">Cart</a>
          </li>
         
          <li class="nav-item">
              <a class="nav-link text-navbar" href="/profile">Profile</a>
          </li>

          <li class="nav-item">
              <a class="nav-link text-navbar" href="/maintenance">Maintenance</a>
          </li>

          
          @endif
      @else
        @endif
      </ul>

      <ul class="nav navbar-nav">
        @if ( auth()->check() )
        <li class="nav-item">
        <a class="nav-link text-white btn btn-block bg-info" href="{{ route('logout_logic') }}">Logout</a>
        </li>

          
        @else
            <li class="nav-item">
                <a class="nav-link text-navbar" href="{{ route('login_user') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white btn btn-block bg-dark" href="{{ route('register_form') }}">Register</a>
            </li>
        @endif
      </ul>
    </div>
    </div>
</nav>

<div class="">
    @yield('content')
</div>


<footer>
<div class="foot text-center p-3 bg-info">
    © Amazing E-Grocery 2023;
  </div>
  </footer>
</div>
