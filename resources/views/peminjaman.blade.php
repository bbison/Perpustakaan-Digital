@extends('layouts.sidebar')

@section('body')
<div class="content">
    <h1>Data Peminjam Buku</h1>
    <p>Berikut adalah daftar peminjam buku di perpustakaan:</p>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>ID Peminjaman</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>P001</td>
                <td>Ali Rahman</td>
                <td>Belajar Pemrograman</td>
                <td>2024-12-01</td>
                <td>2024-12-15</td>
            </tr>
            <tr>
                <td>2</td>
                <td>P002</td>
                <td>Budi Santoso</td>
                <td>Dasar-Dasar Matematika</td>
                <td>2024-12-05</td>
                <td>2024-12-19</td>
            </tr>
            <tr>
                <td>3</td>
                <td>P003</td>
                <td>Siti Aminah</td>
                <td>Fisika untuk Pemula</td>
                <td>2024-12-10</td>
                <td>2024-12-24</td>
            </tr>
        </tbody>
    </table>

    <h2 class="mt-5">Tambah Data Peminjaman Baru</h2>
    <form>
        <div class="mb-3">
            <label for="id_peminjaman" class="form-label">ID Peminjaman</label>
            <input type="text" class="form-control" id="id_peminjaman" placeholder="Masukkan ID peminjaman">
        </div>
        <div class="mb-3">
            <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
            <input type="text" class="form-control" id="nama_peminjam" placeholder="Masukkan nama peminjam">
        </div>
        <div class="mb-3">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul_buku" placeholder="Masukkan judul buku">
        </div>
        <div class="mb-3">
            <label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label>
            <input type="date" class="form-control" id="tanggal_peminjaman">
        </div>
        <div class="mb-3">
            <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
            <input type="date" class="form-control" id="tanggal_pengembalian">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Peminjaman</button>
    </form>
</div