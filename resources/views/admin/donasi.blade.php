@extends('layouts.admin')

@section('content')
<h1 class="page-title">Data Donasi</h1>

<div class="summary-card">
    <h2>Total Donasi</h2>
    <p>Rp {{ number_format($totalDonasi, 0, ',', '.') }}</p>
</div>

<table class="admin-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nominal</th>
            <th>Pesan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($donasi as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->email }}</td>
            <td>Rp {{ number_format($item->nominal, 0, ',', '.') }}</td>
            <td>{{ $item->pesan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
