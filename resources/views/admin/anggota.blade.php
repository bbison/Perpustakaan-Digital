@extends('layouts.sidebar')

@section('body')
    <div class="container">
        <div class="header">
            <h1>Daftar Anggota</h1>
            <p>Berikut adalah daftar anggota perpustakaan kami!</p>
        </div>
        <ul>
            <h2>
                <button type="button" onclick="kembali()">
                    <a class="btn btn-success" href="/tambah-anggota/create">Tambah Anggota</a></button>
            </h2>
        </ul>
        <table class="table">
            <tr class="table-success">
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>

            @foreach ($anggotas as $anggota)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $anggota->nama }}</td>
                    <td>{{ $anggota->kelas->nama }}</td>
                    <td>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $anggota->id }}">
                            Perbaharui Data
                        </button>
                    </td>
                </tr>
                <!-- Modal edit-->
                <div class="modal fade" id="exampleModal{{ $anggota->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Perbaharui Data Kelas Baru</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="/tambah-anggota/{{ $anggota->id }}" method="post">
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="nama_kelas" class="form-label">Nama</label>
                                        <input type="text" value="{{ $anggota->nama }}" required name="nama"
                                            class="form-control" id="nama_kelas" placeholder="Masukkan nama anggota">
                                    </div>
                                    <select class="form-control" required name="kelas_id" id="">
                                      <option value="">=Pilih Kelas=</option>
                                      @foreach ($kelases as $kelas)
                                          <option value="{{ $kelas->id }}" @if ($kelas->id == $anggota->kelas_id)
                                            @selected(true)
                                          @endif>{{ $kelas->nama }}</option>
                                      @endforeach
                                  </select>
                                  <div class="mb-3">
                                    <label for="nama_kelas" class="form-label">NISN</label>
                                    <input type="text" value="{{ $anggota->nisn }}" required name="nisn"
                                        class="form-control" id="nama_kelas" placeholder="Masukkan nisn anggota">
                                </div>

                                    @csrf
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Perbaharui</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            @endforeach
        </table>
    </div>
@endsection
