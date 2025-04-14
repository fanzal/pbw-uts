@extends('layouts.user')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center" style="background-color: #e9f5f0; border-radius: 15px; padding: 40px;">
        <div class="col-md-6 text-start">
            <h2 class="fw-bold" style="font-size: 70px; color: #093b3b">PANTI ASUHAN</h2>
            <h1 class="fw-bold text-success" style="font-size: 70px; color: #093b3b">RUMOH ANEUK</h1>
            <p class="mt-3 fs-5" style="font-size: 30px;">Beri bantuan untuk anak terlantar<br>dan anak yatim</p>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Ilustrasi Anak" style="max-width: 500px;">
        </div>
    </div>
</div>
@endsection
