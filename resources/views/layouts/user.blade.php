<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumoh Aneuk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body { 
            background-color: #e6f2ef; 
            font-family: 'Segoe UI', sans-serif; 
        }
        .navbar { 
            background-color: #a3d9c9; 
            padding: 10px; 
        }
        .navbar-brand { 
            font-weight: bold;
            font-size: 25px;
            color: #093b3b;
        }
        .nav-link {
            margin-right: 30px;
            font-size: 20px;
            font-weight: bold;
            color: #08584a;
        }
        .nav-link:hover {
            color: rgb(255, 255, 255);
        }
        .nav-link.active { 
            background-color: rgb(255, 255, 255); 
            border-radius: 5px; 
            color:rgb(255, 255, 255);
        }
        .container-custom { 
            margin-top: 50px; 
        }
        .btn-login {
            background-color:#08584a;
            color: white !important;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: bold;
        }
        .btn-login:hover {
            background-color: #08584a;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">RUMOH ANEUK</a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('donasi') ? 'active' : '' }}" href="{{ route('donasi.form') }}">Donasi</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('tentang-kami') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('pelaporan') ? 'active' : '' }}" href="{{ route('pelaporan.form') }}">Pelaporan</a></li>
                <li class="nav-item ms-2">
                    <a class="btn btn-login" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container container-custom">
    @yield('content')
</div>

</body>
</html>
