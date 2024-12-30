<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Models\buku;
use App\Models\kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class anggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.anggota', [
            'anggotas' => anggota::paginate(20),
            'kelases' => kelas::orderBy('nama', 'ASC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahAnggota', [
            'kelases' => kelas::orderBy('nama', 'ASC')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        anggota::create([
            'kelas_id' => $request->kelas_id,
            'nisn' => $request->nisn,
            'nama' => $request->nama,
        ]);

        return redirect('/dashboard')->with('berhasil', 'Berhasil Menambah Anggota');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        anggota::find($id)->update([
            'kelas_id' => $request->kelas_id,
            'nisn' => $request->nisn,
            'nama' => $request->nama,
        ]);

        return redirect('/dashboard')->with('berhasil', 'Berhasil Memperbaharui Data Anggota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function getfile(Request $request)
    {
        $decryptFile = decrypt($request->file);
        $filename = $decryptFile;
        $path = storage_path('app/public/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        return response($file, 200)->header("Content-Type", $type);
    }

    public function ajax(Request $request)
    {
        $data = anggota::where('nama','like',"%".$request->q."%")
        ->orWhere('nisn','like',"%".$request->q."%")->get();
        return view('ajax.listanggota',[
            'anggotas'=>$data
        ]);
    }

    function nama(Request $request) {
        $data = anggota::find($request->q);
        return $data->nama;
    }

    function buku(Request $request) {
        $data = buku::where('judul','like', "%".$request->judul."%")->get();
        return view('ajax.buku',[
            'bukus'=>$data
        ]);
     
    }

    function namabuku(Request $request) {
        $buku = buku::find($request->q);
        return $buku->judul;
    }

}
