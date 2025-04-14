<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;
use App\Models\Pelaporan;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Hitung total pelaporan dan donasi
        $totalPelaporan = Pelaporan::count();
        $totalDonasi = Donasi::sum('nominal');

        // Label bulan untuk grafik
        $labelsBulan = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        // Data dummy (bisa diganti dengan query database)
        $dataPelaporan = [5, 8, 3, 7, 2, 9, 4, 6, 3, 8, 7, 10];
        $dataDonasi = [1500000, 2000000, 1250000, 1750000, 900000, 2100000, 1300000, 1800000, 1000000, 1700000, 1600000, 2200000];

        return view('admin.dashboard', compact(
            'totalPelaporan',
            'totalDonasi',
            'labelsBulan',
            'dataPelaporan',
            'dataDonasi'
        ));
    }
}
