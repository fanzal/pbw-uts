<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - Rumoh Aneuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #a3d9c9;
            width: 100%;
            max-width: 450px;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 40px 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-logo {
            width: 100px;
        }

        .login-title {
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
            color: #093b3b;
        }

        .btn-login {
            background-color: #093b3b;
            color: white;
            width: 100%;
        }

        .btn-login:hover {
            background-color: #228c3c;
        }
    </style>
</head>
<body>
    <div class="login-container text-center">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="login-logo">
        <div class="login-title">Login Admin</div>

        @if(session('error'))
            <div class="alert alert-danger mt-3">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST" class="mt-4 text-start">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email Admin</label>
                <input type="email" name="email" class="form-control" id="email" required placeholder="admin@rumohaneuk.com">
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" name="password" class="form-control" id="password" required placeholder="admin123">
            </div>

            <button type="submit" class="btn btn-login">Login</button>
        </form>
    </div>
</body>
</html>
