@extends('layouts.sidebar')

@section('body')
<div class="card p-3 col-sm-12 col-md-8 col-lg-6">
    <h2 class="mt-5">Tambah Anggota Baru</h2>
    <form action="/tambah-anggota" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" required class="form-control" name="nama" id="nama" placeholder="Masukkan nama anggota">
        </div>
        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas</label>
          
            <select class="form-control" required name="kelas_id" id="">
                <option value="">=Pilih Kelas=</option>
                @foreach ($kelases as $kelas)
                    <option value="{{ $kelas->id }}">{{ $kelas->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" required class="form-control" name="nisn" id="nisn" placeholder="Masukkan NISN">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Anggota</button>
    </form>
</div>

@endsection