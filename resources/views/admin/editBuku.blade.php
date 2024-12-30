@extends('layouts.sidebar')

@section('body')
    <div class="container bg-primary">
        <form action="/buku/{{ $buku->id }}" class="card p-4" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="d-flex justify-content-center">
                <div class="col-sm-12 com-md-8 col-lg-4">
                    <img id="preview" width="100%" src="{{ env('APP_URL').'/file?file='. encrypt($buku->cover) }}" alt="" srcset="">
                </div>
            </div>
           <hr>
            <div class="group">
                <label for="">Nama Buku</label><br>
                <input type="text" value="{{ $buku->judul }}" required name="namaBuku" placeholder="Nama Buku" class="form-control ">
            </div>
            <div class="group">
                <label for="">Stok</label><br>
                <input type="number" value="{{ $buku->stok }}" required name="stokBuku" placeholder="Stok Buku" class="form-control ">
            </div>
            <div class="group">
                <label for="">Cover</label><br>
                <input type="file"  id="imageUpload" name="coverBuku" class="form-control ">
            </div>
            <div class="group">
                <label for="">Kategory</label><br>
                <select  required name="kategory_id" class="form-control" id="">
                    <option value="">=Pilih Kategory=</option>
                    @foreach ($kategoryes as $k)
                        <option value="{{ $k->id }}" @if ($buku->kategory_id == $k->id)
                            @selected(true)
                        @endif> {{ $k->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="group">
                <label for="">Penulis</label>
                <input  required type="text" value="{{ $buku->penulis }}" placeholder="Penulis Buku" name="penulisBuku" class="form-control ">
            </div>
            <div class="group">
                <label for="">Penerbit</label>
                <input  required type="text" value="{{ $buku->penerbit }}" placeholder="Penerbit Buku" name="penerbitBuku" class="form-control ">
            </div>
            <div class="group">
                <label for="">Tahun Terbit</label>
                <input  required type="number" value="{{ $buku->tahun_terbit }}" placeholder="Tahun Terbit" name="tahunTerbitBuku" class="form-control ">
            </div>

            <div class="group">
                <label for="">Ringkasan</label>
                <textarea  required name="ringkasanBuku" class="form-control" id="" cols="30" rows="10">{!! $buku->ringkasan !!}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script>
        document.getElementById('imageUpload').addEventListener('change', function(event) {
            const fileInput = event.target;
            const preview = document.getElementById('preview');

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                // When the file is read, set the src of the image element
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                // Read the file as a data URL
                reader.readAsDataURL(fileInput.files[0]);
            } else {
                // Hide the preview if no file is selected
                preview.style.display = 'none';
            }
        });
    </script>
@endsection
