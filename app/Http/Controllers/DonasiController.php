<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;

class DonasiController extends Controller
{
    // Tampilkan form donasi
    public function form()
    {
        return view('donasi');
    }

    // Simpan data donasi
    public function submit(Request $request)
    {
        // Validasi sederhana
        $request->validate([
            'nama' => 'required',
            'nominal' => 'required'
        ]);

        // Simpan ke database
        Donasi::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nominal' => $request->nominal,
            'pesan' => $request->pesan
        ]);

        return redirect('/donasi')->with('success', 'Donasi berhasil dikirim!');
    }

    // Tampilkan data donasi untuk admin
    public function index()
{
    if (!session('admin_logged_in')) {
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    $donasi = Donasi::all(); // data donasi
    $totalDonasi = $donasi->sum('nominal'); // total jumlah donasi

    return view('admin.donasi', compact('donasi', 'totalDonasi'));
}

}
