<!-- resources/views/peminjaman/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Daftar Peminjaman Buku</h1>
<table>
    <tr>
        <th>ID Peminjaman</th>
        <th>ID Anggota</th>
        <th>ID Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    @foreach ($peminjaman as $item)
    <tr>
        <td>{{ $item->id_peminjaman }}</td>
        <td>{{ $item->id_anggota }}</td>
        <td>{{ $item->id_buku }}</td>
        <td>{{ $item->tanggal_pinjam }}</td>
        <td>{{ $item->tanggal_kembali }}</td>
        <td>{{ $item->status }}</td>
        <td>
            @if($item->status == 'Dipinjam')
            <form action="{{ route('peminjaman.updateStatus', $item->id_peminjaman) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit">Kembalikan</button>
            </form>
            @endif
        </td>
    </tr>
    @endforeach
</table>
@endsection
