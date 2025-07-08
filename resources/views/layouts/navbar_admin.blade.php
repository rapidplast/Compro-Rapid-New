<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rapit Plast</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <!-- Custom Navbar CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <div class="logo">
                @auth
                    <a href="{{ url('/admin/home') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Rapid Plast Logo">
                    </a>
                @else
                    <a href="{{ url('/admin') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Rapid Plast Logo">
                    </a>
                @endauth
            </div>

            <!-- Navbar Toggle for Mobile -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin/about_us') ? 'active' : '' }}"
                                href="{{ url('/admin/about_us') }}">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin/inovation') ? 'active' : '' }}"
                                href="{{ url('/admin/inovation') }}">Innovation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin/product') ? 'active' : '' }}"
                                href="{{ url('/admin/product') }}">Product & Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin/quality') ? 'active' : '' }}"
                                href="{{ url('/admin/quality') }}">Quality Commitment & Sustainability</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin/carrier') ? 'active' : '' }}"
                                href="{{ url('/admin/carrier') }}">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin/contact_us') ? 'active' : '' }}"
                                href="{{ url('/admin/contact_us') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ url('/logout') }}" method="POST" class="form-inline">
                                @csrf
                                <button type="submit" class="nav-link">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('about_us') ? 'active' : '' }}"
                                href="{{ url('/about_us') }}">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('inovation') ? 'active' : '' }}"
                                href="{{ url('/inovation') }}">Innovation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('product') ? 'active' : '' }}"
                                href="{{ url('/product') }}">Product & Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('quality') ? 'active' : '' }}"
                                href="{{ url('/quality') }}">Quality Commitment & Sustainability</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('carrier') ? 'active' : '' }}"
                                href="{{ url('/carrier') }}">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('contact_us') ? 'active' : '' }}"
                                href="{{ url('/contact_us') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/login_admin') }}" class="nav-link">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

     <!-- JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>