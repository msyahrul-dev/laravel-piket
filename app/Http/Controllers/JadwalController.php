<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data jadwal dan kelompokkan berdasarkan hari
        $list_jadwal = Jadwal::all()->groupBy('hari');
        
        return view('jadwal.index', compact('list_jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'hari' => 'required|string|max:20',
            'waktu' => 'required|string|max:50',
        ]);

        // Menyimpan data ke dalam tabel jadwals
        Jadwal::create([
            'nama' => $request->nama,
            'hari' => $request->hari,
            'waktu' => $request->waktu,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'hari' => 'required|string|max:20',
            'waktu' => 'required|string|max:50',
        ]);

        // Update data jadwal
        $jadwal->update([
            'nama' => $request->nama,
            'hari' => $request->hari,
            'waktu' => $request->waktu,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus!');
    }
}
