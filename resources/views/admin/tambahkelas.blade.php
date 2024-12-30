@extends('layouts.sidebar')

@section('body')
    <div class="">
        <h1>Data Kelas</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Kelas
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Kelas Baru</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/kelas" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                                <input type="text" required name="nama" class="form-control" id="nama_kelas"
                                    placeholder="Masukkan nama kelas">
                            </div>

                            @csrf
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <p>Berikut adalah daftar kelas di perpustakaan:</p>


        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Edit Kelas</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($kelases as $kelas)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kelas->nama }}</td>
                        <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $kelas->id }}">
                                Perbaharui Kelas
                            </button>
                        </td>
                    </tr>
                    <!-- Modal edit-->
                    <div class="modal fade" id="exampleModal{{ $kelas->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Perbaharui Data Kelas Baru</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="/kelas/{{ $kelas->id }}" method="post">
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama_kelas" class="form-label">Nama Kelas</label>
                                            <input type="text" value="{{ $kelas->nama }}" required name="nama"
                                                class="form-control" id="nama_kelas" placeholder="Masukkan nama kelas">
                                        </div>

                                        @csrf
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Perbaharui</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                @endforeach


            </tbody>
        </table>

    </div>
@endsection
