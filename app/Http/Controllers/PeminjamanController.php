<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeminjamanBuku;
use App\Models\anggota;
use App\Models\buku;

class PeminjamanController extends Controller
{
    // Menampilkan daftar semua peminjaman
    public function index()
    {
        $peminjaman = PeminjamanBuku::all();
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create(){
        return view('peminjaman.create',[
            'bukus'=>buku::orderBy('judul', 'ASC')->get(),
            'anggotas'=>anggota::orderBy('nama', 'ASC')->get(),
        ]);
    }
    // Menyimpan data peminjaman buku baru
    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required',
            'id_buku' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date'
        ]);

        PeminjamanBuku::create([
            'id_anggota' => $request->id_anggota,
            'id_buku' => $request->id_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'Dipinjam'
        ]);

        return redirect()->back()->with('success', 'Data peminjaman berhasil disimpan.');
    }

    // Memperbarui status peminjaman (misal: Dikembalikan)
    public function updateStatus($id)
    {
        $peminjaman = PeminjamanBuku::findOrFail($id);
        $peminjaman->status = 'Dikembalikan';
        $peminjaman->save();

        return redirect()->back()->with('success', 'Status berhasil diupdate!');
    }

    // Menampilkan detail peminjaman
    public function show($id)
    {
        $peminjaman = PeminjamanBuku::findOrFail($id);
        return view('peminjaman.show', compact('peminjaman'));
    }

    // Menghapus data peminjaman
    public function destroy($id)
    {
        $peminjaman = PeminjamanBuku::findOrFail($id);
        $peminjaman->delete();

        return redirect()->back()->with('success', 'Data peminjaman berhasil dihapus.');
    }
}
