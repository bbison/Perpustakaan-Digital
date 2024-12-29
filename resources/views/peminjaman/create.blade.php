<!-- resources/views/peminjaman/index.blade.php -->
@extends('layouts.sidebar')

@section('body')
<div class="container">
<form action="/peminjaman" method="post">
@csrf
<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Peminjam</span>
    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Buku</span>
    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Tanggal Pinjam</span>
    <input type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Tanggal Kembali</span>
    <input type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
  </div>
</form>
</div>

@endsection
