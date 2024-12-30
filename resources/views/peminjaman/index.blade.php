<!-- resources/views/peminjaman/index.blade.php -->
@extends('layouts.sidebar')

@section('body')
<div class="container">
    <a href="/peminjaman/create" class="btn btn-primary">Pinjaman Buku Baru</a>
    <h1>Daftar Peminjaman Buku</h1>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Anggota</th>
            <th>Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        @foreach ($peminjaman as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->anggota->nama }}</td>
            <td>{{ $item->buku->judul }}</td>
            <td>{{ $item->tanggal_pinjam }}</td>
            <td>{{ $item->tanggal_kembali }}</td>
            <td>{{ $item->status }}</td>
            <td>
                @if($item->status == 'dipinjam')
                <form action="/peminjaman/{{ $item->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-primary">Kembalikan</button>
                </form>
                @else
                <button class="btn btn-success"> {{ $item->status }}</button>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
