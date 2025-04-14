@extends('layouts.user')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Anak" style="width: 100px;">
                <h2 class="mt-3">Donasi</h2>
                <p>Beri bantuan untuk anak-anak di RUMOH ANEUK</p>
            </div>
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="p-4" style="background-color: #a3d9c9; border-radius: 15px; max-width: 800px;">
                <form action="{{ route('donasi.submit') }}" method="POST" class="mx-auto" style="max-width: 700px;">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email (opsional)</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="nominal" class="form-label">Jumlah Donasi</label>
                        <input type="number" class="form-control" id="nominal" name="nominal" required>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan (opsional)</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="2"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Donasi Sekarang</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
