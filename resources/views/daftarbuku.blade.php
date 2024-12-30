<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku - Perpustakaan SD</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    .container {
      padding: 20px;
      max-width: 1200px;
      margin: auto;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header h1 {
      color: #4CAF50;
    }

    .book-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .book-card {
      background: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      text-align: center;
      padding: 15px;
    }

    .book-card img {
      max-width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 5px;
    }

    .book-card h3 {
      font-size: 18px;
      color: #333;
      margin: 10px 0 5px;
    }

    .book-card p {
      font-size: 14px;
      color: #666;
      margin: 5px 0;
    }

    .book-card button {
      margin-top: 10px;
      padding: 10px 15px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .book-card button:hover {
      background-color: #45a049;
    }

    @media (max-width: 768px) {
      .book-card img {
        height: 150px;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="header">
      <h1>Daftar Buku</h1>
      <p>Temukan koleksi buku terbaik kami!</p>
    </div>
    <ul>
        <h2>
            <button type="button" onclick="kembali()">
            <a href="/">kembali</a></button>
        </h2>
    </ul>
    <div class="book-grid">
      <div class="book-card">
        <img src="https://via.placeholder.com/150" alt="Buku 1">
        <h3>Judul Buku 1</h3>
        <p>Penulis: Nama Penulis</p>
        <p>Kategori: Fiksi</p>
        <button>Detail</button>
      </div>
      <div class="book-card">
        <img src="https://via.placeholder.com/150" alt="Buku 2">
        <h3>Judul Buku 2</h3>
        <p>Penulis: Nama Penulis</p>
        <p>Kategori: Non-Fiksi</p>
        <button>Detail</button>
      </div>
      <div class="book-card">
        <img src="https://via.placeholder.com/150" alt="Buku 3">
        <h3>Judul Buku 3</h3>
        <p>Penulis: Nama Penulis</p>
        <p>Kategori: Pendidikan</p>
        <button>Detail</button>
      </div>
    </div>
  </div>
    <div class="book-grid">
      <div class="book-card">
        <img src="https://via.placeholder.com/150" alt="Buku 1">
        <h3>Judul Buku 1</h3>
        <p>Penulis: Nama Penulis</p>
        <p>Kategori: Fiksi</p>
        <button>Detail</button>
      </div>
      <div class="book-card">
        <img src="https://via.placeholder.com/150" alt="Buku 2">
        <h3>Judul Buku 2</h3>
        <p>Penulis: Nama Penulis</p>
        <p>Kategori: Non-Fiksi</p>
        <button>Detail</button>
      </div>
      <div class="book-card">
        <img src="https://via.placeholder.com/150" alt="Buku 3">
        <h3>Judul Buku 3</h3>
        <p>Penulis: Nama Penulis</p>
        <p>Kategori: Pendidikan</p>
        <button>Detail</button>
      </div>
    </div>
  </div>
  </div>
    <div class="book-grid">
      <div class="book-card">
        <img src="https://via.placeholder.com/150" alt="Buku 1">
        <h3>Judul Buku 1</h3>
        <p>Penulis: Nama Penulis</p>
        <p>Kategori: Fiksi</p>
        <button>Detail</button>
      </div>
      <div class="book-card">
        <img src="https://via.placeholder.com/150" alt="Buku 2">
        <h3>Judul Buku 2</h3>
        <p>Penulis: Nama Penulis</p>
        <p>Kategori: Non-Fiksi</p>
        <button>Detail</button>
      </div>
      <div class="book-card">
        <img src="https://via.placeholder.com/150" alt="Buku 3">
        <h3>Judul Buku 3</h3>
        <p>Penulis: Nama Penulis</p>
        <p>Kategori: Pendidikan</p>
        <button>Detail</button>
      </div>
    </div>
  </div>

</body>
</html>
