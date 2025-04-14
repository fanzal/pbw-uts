<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelaporan;

class PelaporanController extends Controller
{
    // Tampilkan form pelaporan
    public function form()
    {
        return view('pelaporan');
    }

    // Simpan data pelaporan
    public function submit(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required',
            'alamat_pelapor' => 'required',
            'nama_anak' => 'required',
            'kondisi_anak' => 'required',
        ]);

        Pelaporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'alamat_pelapor' => $request->alamat_pelapor,
            'nama_anak' => $request->nama_anak,
            'kondisi_anak' => $request->kondisi_anak,
            'catatan' => $request->catatan
        ]);

        return redirect('/pelaporan')->with('success', 'Laporan berhasil dikirim!');
    }

    // Tampilkan data pelaporan untuk admin
    public function index()
    {
    if (!session('admin_logged_in')) {
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    $pelaporan = Pelaporan::all();
    $totalPelaporan = Pelaporan::count();

    return view('admin.pelaporan', compact('pelaporan', 'totalPelaporan'));
    }
}
