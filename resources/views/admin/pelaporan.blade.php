@extends('layouts.admin')

@section('content')
    <h1 class="page-title">Data Pelaporan</h1>

    <div class="summary-card">
    <h2>Total Laporan</h2>
       <p> {{ $totalPelaporan }} </p>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelapor</th>
                    <th>Alamat Pelapor</th>
                    <th>Nama Anak</th>
                    <th>Kondisi Anak</th>
                    <th>Catatan</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelaporan as $index => $p)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $p->nama_pelapor }}</td>
                        <td>{{ $p->alamat_pelapor }}</td>
                        <td>{{ $p->nama_anak }}</td>
                        <td>{{ $p->kondisi_anak }}</td>
                        <td>{{ $p->catatan }}</td>
                        <td>{{ $p->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
