<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Pencarian Buku</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 20px;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header h1 {
      color: #4CAF50;
    }

    .search-bar {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
    }

    .search-bar input[type="text"] {
      width: 70%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ddd;
      border-radius: 5px 0 0 5px;
      outline: none;
    }

    .search-bar button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 0 5px 5px 0;
      font-size: 16px;
      cursor: pointer;
    }

    .search-bar button:hover {
      background-color: #45a049;
    }

    .book-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .book-item {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .book-item img {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .book-item h3 {
      font-size: 18px;
      color: #333;
      margin: 10px 0;
    }

    .book-item p {
      font-size: 14px;
      color: #666;
    }

    .book-item .borrow-button {
      margin-top: 10px;
      padding: 10px 15px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .book-item .borrow-button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="header">
      <h1>Pencarian Buku</h1>
      
    </div>

    <div class="search-bar">
      <input type="text" placeholder="Cari buku berdasarkan judul atau kategori...">
      <button>Cari</button>
    </div>
    <ul>
      <h2>
          <button type="button" onclick="kembali()">
          <a href="/">kembali</a></button>
      </h2>
  </ul>
    <div class="book-list">
      <div class="book-item">
        <img src="https://via.placeholder.com/150" alt="Cover Buku">
        <h3>Judul Buku 1</h3>
        <p>Kategori: Fiksi</p>
        <button class="borrow-button">Pinjam</button>
      </div>
      <div class="book-item">
        <img src="https://via.placeholder.com/150" alt="Cover Buku">
        <h3>Judul Buku 2</h3>
        <p>Kategori: Non-Fiksi</p>
        <button class="borrow-button">Pinjam</button>
      </div>
      <div class="book-item">
        <img src="https://via.placeholder.com/150" alt="Cover Buku">
        <h3>Judul Buku 3</h3>
        <p>Kategori: Pendidikan</p>
        <button class="borrow-button">Pinjam</button>
      </div>
    </div>
  </div>

</body>
</html>
