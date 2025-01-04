<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporans';  // Nama tabel yang sesuai

    // Kolom yang dapat diisi
    protected $fillable = [    
        'nama',          // Nama
        'hari',          // Hari
        'tanggal',       // Tanggal
        'before_piket',  // Sebelum Piket
        'after_piket',   // Setelah Piket
    ];
}
