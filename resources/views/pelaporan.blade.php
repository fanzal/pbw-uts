@extends('layouts.user')

@section('content')
<div class="container mt-5">
<div class="row justify-content-center">
    <div class="text-center mb-4">
        <img src="{{ asset('images/logo.png') }}" alt="Logo Anak" style="width: 100px;">
        <h2 class="mt-2">Form Pelaporan Anak</h2>
    </div>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif
    <div class="p-4" style="background-color: #a3d9c9; border-radius: 15px; max-width: 800px; ">
        <form action="{{ route('pelaporan.submit') }}" method="POST" class="mx-auto" style="max-width: 700px;">
        @csrf

        <div class="mb-3">
            <label for="nama_pelapor" class="form-label">Nama Pelapor</label>
            <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" required>
        </div>

        <div class="mb-3">
            <label for="alamat_pelapor" class="form-label">Alamat Pelapor</label>
            <input type="text" class="form-control" id="alamat_pelapor" name="alamat_pelapor" required>
        </div>

        <div class="mb-3">
            <label for="nama_anak" class="form-label">Nama Anak</label>
            <input type="text" class="form-control" id="nama_anak" name="nama_anak" required>
        </div>

        <div class="mb-3">
            <label for="kondisi_anak" class="form-label">Kondisi Anak</label>
            <textarea class="form-control" id="kondisi_anak" name="kondisi_anak" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="catatan" class="form-label">Catatan (Opsional)</label>
            <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success px-5">Kirim</button>
        </div>
    </form>
    </div>
</div>
</div>
@endsection
