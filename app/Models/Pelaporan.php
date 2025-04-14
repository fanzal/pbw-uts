<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;

    protected $table = 'pelaporan'; // Nama tabel di database

    protected $fillable = [
        'nama_pelapor',
        'alamat_pelapor',
        'nama_anak',
        'kondisi_anak',
        'catatan',
    ];
}
