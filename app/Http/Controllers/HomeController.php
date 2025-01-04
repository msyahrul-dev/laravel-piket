<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil jadwal berdasarkan hari mengunakan query builder
        $jadwalSenin = Jadwal::where('hari', 'Senin')->get();
        $jadwalSelasa = Jadwal::where('hari', 'Selasa')->get();
        $jadwalRabu = Jadwal::where('hari', 'Rabu')->get();
        $jadwalKamis = Jadwal::where('hari', 'Kamis')->get();
        $jadwalJumat = Jadwal::where('hari', 'Jumat')->get();
       
        

        return view('home', compact('jadwalSenin', 'jadwalSelasa' , 'jadwalRabu', 'jadwalKamis', 'jadwalJumat'));
        
    }
}
