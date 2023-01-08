{{-- Header --}}
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <h2 class="me-5">P2WEB </h2>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
            </a>
            <ul class="dropdown-menu">
                @foreach (DB::table('kategoris')->get() as $item)
                    <li><a class="dropdown-item" href="{{ url("kategori/$item->slug") }}">{{ $item->name }}</a></li>
                @endforeach
            </ul>
        </li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" name="search" placeholder="Search..." aria-label="Search">
        </form>


        @can('admin')
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">My Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        @endcan

         @can('user')
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                        @if (auth()->user()->roles == 'user')
                        <li><a class="dropdown-item" href="histori">Histori</a></li>
                        @endif
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        @endcan


        @guest
        <div class="text-end">
                <a href="{{ route('login') }}" class="btn btn-outline-light me-2" role="buttton">Login</a>
                <a href="{{ route('register') }}" class="btn btn-warning" role="buttton">Sign Up</a>
            </div>
        @endguest

      </div>
    </div>
</header>

