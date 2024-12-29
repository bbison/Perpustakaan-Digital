@extends('layouts.sidebar')

@section('body')
<div class="content">
    <h1>Data Kelas</h1>
    <p>Berikut adalah daftar kelas di perpustakaan:</p>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>ID Kelas</th>
                <th>Nama Kelas</th>
                <th>Jumlah Siswa</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>101</td>
                <td>Kelas 1A</td>
                <td>30</td>
            </tr>
            <tr>
                <td>2</td>
                <td>102</td>
                <td>Kelas 1B</td>
                <td>28</td>
            </tr>
            <tr>
                <td>3</td>
                <td>201</td>
                <td>Kelas 2A</td>
                <td>32</td>
            </tr>
        </tbody>
    </table>

    <h2 class="mt-5">Tambah Data Kelas Baru</h2>
    <form>
        <div class="mb-3">
            <label for="id_kelas" class="form-label">ID Kelas</label>
            <input type="text" class="form-control" id="id_kelas" placeholder="Masukkan ID kelas">
        </div>
        <div class="mb-3">
            <label for="nama_kelas" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control" id="nama_kelas" placeholder="Masukkan nama kelas">
        </div>
        <div class="mb-3">
            <label for="jumlah_siswa" class="form-label">Jumlah Siswa</label>
            <input type="number" class="form-control" id="jumlah_siswa" placeholder="Masukkan jumlah siswa">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Kelas</button>
    </form>
</div>