<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>perpustakaan sdn bergas lor 01</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #b7f7ca;
        }

        .hero {
            background-image: url('perpustakaan.jpg');
            background-size: cover;
            background-position: center;
            color: rgb(36, 13, 138);
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .toolbar {
            background-color: #4CAF50;
            padding: 10px;
            display: flex;
            justify-content: space-around;
            list-style-type: none;
        }

        .toolbar ul {
            display: flex;
            margin: 0;
            padding: 0;
        }

        .toolbar li {
            margin: 0 10px;
        }

        .toolbar a {
            text-decoration: none;
            color: white;
            font-size: 16px;
        }

        .icon {
            margin-right: 5px;
        }


        .hero h1 {
            font-size: 48px;
            font-weight: bold;
            background-color: rgb(226, 231, 220);
        }

        .hero p {
            font-size: 24px;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: rgb(219, 203, 235);
        }

        .menu {
            font-size: 30px;
            margin-top: 10px;
            margin-bottom: 30px;
            font-weight: bold;
            background-color: rgb(213, 218, 207);
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .profile-section {
            padding: 50px 0;
        }

        .profile-section h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        .books-gallery {
            padding: 50px 0;
            background-color: #f4f6f9;
        }

        .books-gallery img {
            border-radius: 10px;
            transition: transform 0.2s;
        }

        .books-gallery img:hover {
            transform: scale(1.05);
        }

        .quotes-section {
            background-color: #343a40;
            color: white;
            padding: 50px 0;
        }

        .quotes-section h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
            font-style: italic;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <div class="toolbar">
        <nav class="toolbar">
            <ul style="list-style-type: none">
                <li><a href="/"><i class="icon">🏠</i>Beranda</a></li>
                <li><a href="/koleksi"><i class="icon">🔍</i>Pencarian Buku</a></li>
                <li><a href="/daftarbuku"><i class="icon">📚</i>Daftar Buku</a></li>
                <li><a href="/peminjamanbuku"><i class="icon">📚</i>Peminjaman Buku</a></li>
                <li><a href="/pengembalianbuku"><i class="icon">↩️</i>Pengembalian Buku</a></li>
                <li><a href="/anggota"><i class="icon">👤</i> Anggota</a></li>
            </ul>
        </nav>
    </div>



    <div class=" m-3" style="text-align: center">
        <h1>Selamat Datang di Perpustakaan SDN BERGAS LOR 01</h1>

    </div>



    <!-- Books Gallery Section -->
    <section class="books-gallery">
        <div class="container">
            <h2 class="text-center">Buku Tersedia</h2>
            <div class="row mt-4">
                <div class="col-md-3">
                    <img src="buku1.jpg" alt="Book 1" class="img-fluid">

                </div>
                <div class="col-md-3">
                    <img src="buku2.jpg" alt="Book 2" class="img-fluid">

                </div>
                <div class="col-md-3">
                    <img src="buku3.jpg" alt="Book 3" class="img-fluid">

                </div>
                <div class="col-md-3">
                    <img src="buku4.jpg" alt="Book 4" class="img-fluid">

                </div>
            </div>
        </div>
    </section>

    <!-- Quotes Section -->
    <section class="quotes-section">
        <div class="container">
            <h2>Perpustakaan Digital SDN Bergas Lor 01</h2>
            <div class="quote">
                "Perpustakaan Digital SDN Bergas Lor 01 – Temukan, baca, dan pelajari lebih banyak."
            </div>
            <div class="quote mt-4">
                "Membawa ilmu dan pengetahuan lebih dekat, kapan saja dan di mana saja."


            </div>
            <div class="quote mt-4">
                "Membaca adalah pintu menuju dunia baru. Selamat menikmati setiap halaman."
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
