<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-3">
      <a href="{{ route('home') }}" class="navbar-brand">
        <img src="{{ url('frontend/images/logo.png') }}" alt="logo nomads" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mr-3">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Paket Travel</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              id="navbardrop"
            >
              Services
            </a>
            <ul class="dropdown-menu dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Testimonial</a>
          </li>
        </ul>
        @guest
          <!-- mobile button -->
        <form class="form-inline d-sm-block d-md-none">
          <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">Masuk</button>
        </form>
        <!-- desktop button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
            Masuk
          </button>
        </form>  
        @endguest

        @auth
        <!-- mobile button -->
        <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}"  method="POST">
          @csrf
          <button class="btn btn-login my-2 my-sm-0" type="submit">Keluar</button>
        </form>
        <!-- desktop button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
          @csrf
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
            Keluar
          </button>
        </form>  
        @endauth
      </div>
    </nav>
  </div>