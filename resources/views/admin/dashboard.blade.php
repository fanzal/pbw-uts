@extends('layouts.admin')

@section('content')
    <h2 style="font-size: 50px; margin-bottom: 10px;">Dashboard</h2>
    <p style="margin-bottom: 25px;">Selamat datang, Admin!</p>

    <div style="display: flex; gap: 20px; margin-bottom: 30px; text-align: center;">
        <div style="flex: 1; background: #a3d9c9; padding: 20px; border-radius: 10px;">
            <p style="font-size: 20px; ">Pelaporan</p>
            <h3 style="font-size: 30px;">{{ $totalPelaporan }}</h3>
        </div>
        <div style="flex: 1; background: #a3d9c9; padding: 20px; border-radius: 10px;">
            <p style="font-size: 20px; ">Jumlah Donasi</p>
            <h3 style="font-size: 30px;">Rp. {{ number_format($totalDonasi, 0, ',', '.') }}</h3>
        </div>
    </div>

    <div style="display: flex; gap: 20px;">
        <div style="flex: 1; background: #fff; padding: 20px; border-radius: 10px;">
            <p style="margin-bottom: 10px;">Jumlah pelaporan anak</p>
            <canvas id="chartPelaporan"></canvas>
        </div>
        <div style="flex: 1; background: #fff; padding: 20px; border-radius: 10px;">
            <p style="margin-bottom: 10px;">Total donasi / bln</p>
            <canvas id="chartDonasi"></canvas>
        </div>
    </div>

    <script>
        const ctx1 = document.getElementById('chartPelaporan').getContext('2d');
        const chartPelaporan = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: {!! json_encode($labelsBulan) !!},
                datasets: [{
                    label: 'Pelaporan',
                    data: {!! json_encode($dataPelaporan) !!},
                    backgroundColor: '#2d9cdb'
                }]
            }
        });

        const ctx2 = document.getElementById('chartDonasi').getContext('2d');
        const chartDonasi = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: {!! json_encode($labelsBulan) !!},
                datasets: [{
                    label: 'Donasi',
                    data: {!! json_encode($dataDonasi) !!},
                    backgroundColor: '#2d9cdb'
                }]
            }
        });
    </script>
@endsection
