<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategory;

class kategoryBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.tambahkategory',[
            'kategoryes'=>kategory::orderBy('nama','ASC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        kategory::create([
            'nama'=>$request->nama
        ]);

        return back()->with('berhasil', 'Data kategory Berhasil Ditambah');
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
    public function update(Request $request,  $id)
    {
        kategory::find($id)->update([
            'nama'=>$request->nama
        ]);

        return back()->with('berhasil', 'Data kategory Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
