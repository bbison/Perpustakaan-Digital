@extends('layouts.sidebar')

@section('body')
    <a href="/buku/create" class=" m-2 btn btn-primary">Tambah Buku</a>
    <div class="container ">
        <div class="d-flex flex-wrap">
            @foreach ($bukus as $b)
                <div class="col-md-3 m-2"
                    style="background-image: url('{{ env('APP_URL') . '/file?file=' . encrypt($b->cover) }}');">
                    <div class="card book-card position-relative">
                        <img class="rounded-1" style="max-height:400px ;object-fit: cover; width: 100%;"
                            src="{{ env('APP_URL') }}/file?file={{ encrypt($b->cover) }}" class="card-img-top"
                            alt="Book Cover">
                        <div class="card-body position-absolute bottom-0 rounded-1  rounded-bottom" id="coverBuku">
                            <b class="card-title"><a id="judul" style="color:rgb(255, 0, 0)"
                                    class=" text-decoration-none" href="">{{ $b->judul }}</a></b>
                            <p class="card-text">Author: {{ $b->penulis }}</p>
                            <small>Terbit {{ $b->tahun_terbit }}</small>
                            <p class="card-text">Description: {{ Str::limit($b->ringkasan, 120) }}</p>
                            <div class="d-flex justify-content-between ">
                                <a href="/buku/{{ $b->id }}/edit" class="btn btn-success">Edit</a>
                                <form action="/buku/{{ $b->id }}" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="d-flex justify-content-center">
           
                {{ $bukus->links() }}
           
        </div>
    </div>
@endsection
