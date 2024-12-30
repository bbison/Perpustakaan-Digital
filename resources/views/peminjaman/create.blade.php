<!-- resources/views/peminjaman/index.blade.php -->
@extends('layouts.sidebar')

@section('body')
    <div class="container">
        <form action="/peminjaman" method="post">
            @csrf
            <div class="input-group position-relative mb-3">
                <span class="input-group-text" id="basic-addon1">Peminjam</span>
                <input type="text" class="form-control" value="" id="value" onkeyup="listpeminjam(this.value)" placeholder="Peminjam">
                    <br><br>
                    <input type="hidden" name="anggota_id" id="anggota_id" value="">
                <div class="position-absolute top-0 mt-5 pt-1 bg-white col-12" style="z-index: 909">
                    <ul id="hasil" style="list-style-type: none; display:none">
                      
                    </ul>
                </div>
            </div>
            <div class="input-group position-relative mb-3">
                <span class="input-group-text" id="basic-addon1">Buku</span>
                <input type="text" class="form-control" id="value-buku" onkeyup="listbuku(this.value)" placeholder="Buku" aria-label="Username"
                    aria-describedby="basic-addon1">
                    <div class="position-absolute top-0 mt-5 pt-1 bg-white col-12" style="z-index: 909">
                      <ul id="hasilbuku" style="list-style-type: none;display:none">
                        
                      </ul>
                  </div>
                  <input type="hidden" name="buku_id" value="" id="buku_id">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tanggal Pinjam</span>
                <input type="date" class="form-control" name="tanggal_pinjam" placeholder="Username" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tanggal Kembali</span>
                <input type="date" name="tanggal_kembali" class="form-control" placeholder="Username" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script>
        function listpeminjam(str) {
            if (str.length == 0) {
                document.getElementById("hasil").innerHTML = "";
                return;
            } else {
              document.getElementById("hasil").style.display = "block";
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("hasil").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "/list-peminjam?q=" + str, true);
                xmlhttp.send();
            }
        }

        function masukan(id){
        
          var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("value").value = this.responseText;
                        document.getElementById("anggota_id").value = id;
                        document.getElementById("hasil").style.display = "none";
                    }
                };
                xmlhttp.open("GET", "/nama?q=" + id, true);
                xmlhttp.send();
                
        }





        function listbuku(str){
          if (str.length == 0) {
                document.getElementById("hasil").innerHTML = "";
                return;
            } else {
              document.getElementById("hasilbuku").style.display = "block";
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("hasilbuku").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "/list-buku?q=" + str, true);
                xmlhttp.send();
            }
        }

        function masukanbuku(id){
 
          var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("value-buku").value = this.responseText;
                        document.getElementById("buku_id").value = id;
                        document.getElementById("hasilbuku").style.display = "none";
                    }
                };
                xmlhttp.open("GET", "/namabuku?q=" + id, true);
                xmlhttp.send();
        }
    </script>
@endsection
