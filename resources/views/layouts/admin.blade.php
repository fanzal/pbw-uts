<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Rumoh Aneuk</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            min-height: 100vh;
            background-color: #def2f1;
        }
        .sidebar {
            width: 220px;
            background-color: #a1d6e2;
            padding: 30px 20px;
        }
        .logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 40px;
        }
        .logo img {
            width: 60px;
            margin-bottom: 10px;
        }
        .logo h2 {
            font-size: 28px;
            text-align: center;
            color: #333;
        }
        .nav-link {
            display: block;
            padding: 10px 15px;
            margin-bottom: 10px;
            text-decoration: none;
            color: #000;
            border-radius: 5px;
        }
        .nav-link.active, .nav-link:hover {
            background-color: #2d9cdb;
            color: #fff;
        }
        .content {
            flex: 1;
            padding: 30px;
            position: relative;
        }
        .logout {
            position: absolute;
            top: 20px;
            right: 30px;
            background-color: #2d9cdb;
            color: white;
            border: none;
            padding: 7px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .summary-card {
            background-color: #e9f6ec;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
            width: 50%;
        }

        .summary-card h2 {
            margin: 0;
            font-size: 24px;
            color: #2e7d32;
        }

        .summary-card p {
            font-size: 28px;
            font-weight: bold;
            color: #1b5e20;
        }

        /* Tabel donasi & pelaporan */
        table {
            width: 75%;
            border-collapse: collapse;
            font-size: 16px;
            color: #333;
        }

        thead {
            background-color: #4CAF50;
            color: white;
        }

        thead th {
            padding: 12px;
            text-align: left;
            font-weight: bold;
            border-bottom: 2px solid #388E3C;
        }

        tbody td {
            padding: 10px 12px;
            border-bottom: 1px solid #ddd;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Judul halaman */
        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #2e7d32;
            margin-bottom: 30px;
        }

        /* Jumlah donasi */
        .total-box {
            width: 50%;
            background-color: #A5D6A7;
            padding: 20px;
            border-radius: 12px;
            font-size: 50px;
            color: #1B5E20;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <h2>RUMOH<br>ANEUK</h2>
        </div>
        <a href="/admin/dashboard" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="/admin/donasi" class="nav-link {{ request()->is('admin/donasi') ? 'active' : '' }}">Donasi</a>
        <a href="/admin/pelaporan" class="nav-link {{ request()->is('admin/pelaporan') ? 'active' : '' }}">Pelaporan</a>
    </div>
    <div class="content">
        <form method="POST" action="/logout">
            @csrf
            <button class="logout">Log Out</button>
        </form>

        @yield('content')
    </div>
</body>
</html>
