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
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Rapid Plast Logo" style="height: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('about_us') ? 'active' : '' }}" href="{{ url('/about_us') }}">Company</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('inovation') ? 'active' : '' }}" href="{{ url('/inovation') }}">Innovation</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('product') ? 'active' : '' }}" href="{{ url('/product') }}">Product & Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('quality') ? 'active' : '' }}" href="{{ url('/quality') }}">Quality Commitment & Sustainability</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('carrier') ? 'active' : '' }}" href="{{ url('/carrier') }}">Career</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('contact_us') ? 'active' : '' }}" href="{{ url('/contact_us') }}">Contact Us</a>
        </li>
    </ul>
</div>

    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>