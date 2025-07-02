<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapit Plast</title>
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .nav-link {
            color: black !important;
            font-weight: 600;
        }
        .nav-link:hover {
            color: #D30B0B !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="logo">
            @auth
                <a href="{{ url('/admin/home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="Rapid Plast Logo"></a>
            @else
                <a href="{{ url('/admin') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="Rapid Plast Logo"></a>
            @endauth
        </div>
        <ul class="navbar-nav ml-auto">
            @auth
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/about_us') ? 'active' : '' }}"" href="{{ url('/admin/about_us') }}" style="font-weight: bold">Company</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/inovation') ? 'active' : '' }}" href="{{ url('/admin/inovation') }}" style="font-weight: bold">Inovation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/product') ? 'active' : '' }}" href="{{ url('/admin/product') }}" style="font-weight: bold">Product & Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/quality') ? 'active' : '' }}" href="{{ url('/admin/quality ') }}" style="font-weight: bold">Quality Commitment & Sustainability</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/carrier') ? 'active' : '' }}" href="{{ url('/admin/carrier') }}" style="font-weight: bold">Carrier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/contact_us') ? 'active' : '' }}" href="{{ url('/admin/contact_us') }}" style="font-weight: bold">Contact Us</a>
                </li>
                <li>
                    <form action="{{ url('/logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn" style="background: red; color: white;">Logout</button>
                    </form>
                </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about_us') }}" style="font-weight: bold">Company</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/inovation') }}" style="font-weight: bold">Innovation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/product') }}" style="font-weight: bold">Product & Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/quality ') }}" style="font-weight: bold">Quality Commitment & Sustainability</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/carrier') }}" style="font-weight: bold">Career</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact_us') }}" style="font-weight: bold">Contact Us</a>
            </li>
                <li><a href="{{ url('/login_admin') }}" class="btn"
                        style="background: red; color: white; width: 140%;">Login</a>
                </li>
            @endauth
        </ul>
    </nav>
</body>

</html>
