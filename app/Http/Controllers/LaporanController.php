<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_laporan = Laporan::all();

        // Kirim data ke view
        return view('laporan.index', compact('list_laporan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laporan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'hari' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'before_piket' => 'array|max:5',
            'before_piket.*' => 'file|mimes:jpeg,jpg,png,gif,mp4,avi|max:20480',
            'after_piket' => 'array|max:5',
            'after_piket.*' => 'file|mimes:jpeg,jpg,png,gif,mp4,avi|max:20480',
        ]);

        try {
            $laporan = new Laporan();
            $laporan->nama = $validated['nama'];
            $laporan->hari = $validated['hari'];
            $laporan->tanggal = $validated['tanggal'];

            // Menyimpan file before_piket
            if ($request->hasFile('before_piket')) {
                $beforePaths = [];
                foreach ($request->file('before_piket') as $file) {
                    $path = $file->store('laporans/before', 'public');
                    $beforePaths[] = $path;
                }
                $laporan->before_piket = json_encode($beforePaths);
            }

            // Menyimpan file after_piket
            if ($request->hasFile('after_piket')) {
                $afterPaths = [];
                foreach ($request->file('after_piket') as $file) {
                    $path = $file->store('laporans/after', 'public');
                    $afterPaths[] = $path;
                }
                $laporan->after_piket = json_encode($afterPaths);
            }

            $laporan->save();

            return back()->with('status', 'Laporan berhasil disimpan!');
        } catch (\Exception $e) {
            return back()->with('status', 'Laporan gagal disimpan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        try {
            // Hapus file terkait
            if ($laporan->before_piket) {
                $beforeFiles = json_decode($laporan->before_piket, true);
                foreach ($beforeFiles as $file) {
                    Storage::disk('public')->delete($file);
                }
            }

            if ($laporan->after_piket) {
                $afterFiles = json_decode($laporan->after_piket, true);
                foreach ($afterFiles as $file) {
                    Storage::disk('public')->delete($file);
                }
            }

            // Hapus laporan dari database
            $laporan->delete();

            return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dihapus.');
        } catch (\Exception $e) {
            return back()->with('error', 'Laporan gagal dihapus: ' . $e->getMessage());
        }
    }
}
