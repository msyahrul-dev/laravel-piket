<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwals';

    // Kolom yang dapat diisi
    protected $fillable = [    
        'nama',
        'hari',
        'waktu',
        
    ];
}
