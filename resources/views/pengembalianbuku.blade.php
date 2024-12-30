<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Pengembalian Buku</title>
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

    .return-form {
      background: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: 20px auto;
    }

    .return-form label {
      font-size: 16px;
      color: #333;
      display: block;
      margin-bottom: 5px;
    }

    .return-form input,
    .return-form select,
    .return-form button {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
    }

    .return-form button {
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    .return-form button:hover {
      background-color: #45a049;
    }

    .return-list {
      margin-top: 30px;
      background: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .return-list table {
      width: 100%;
      border-collapse: collapse;
    }

    .return-list th,
    .return-list td {
      padding: 15px;
      text-align: left;
      border: 1px solid #ddd;
    }

    .return-list th {
      background-color: #4CAF50;
      color: white;
    }

    .return-list tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .return-list tr:hover {
      background-color: #f1f1f1;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="header">
      <h1>Pengembalian Buku</h1>
      <p>Catat buku yang telah dikembalikan oleh anggota perpustakaan.</p>
    </div>
    <ul>
        <h2>
            <button type="button" onclick="kembali()">
            <a href="/">kembali</a></button>
        </h2>
    </ul>
    <div class="return-form">
      <h2>Form Pengembalian</h2>
      <form>
        <label for="member-name">Nama Peminjam</label>
        <input type="text" id="member-name" placeholder="Masukkan nama peminjam">

        <label for="book-title">Judul Buku</label>
        <input type="text" id="book-title" placeholder="Masukkan judul buku">

        <label for="return-date">Tanggal Pengembalian</label>
        <input type="date" id="return-date">

        <button type="submit">Catat Pengembalian</button>
      </form>
    </div>

    <div class="return-list">
      <h2>Daftar Buku yang Dikembalikan</h2>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Judul Buku</th>
            <th>Tanggal Pengembalian</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Arya Wijaya</td>
            <td>Petualangan Si Kancil</td>
            <td>21 Desember 2024</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Siti Nurhaliza</td>
            <td>Ensiklopedia Hewan</td>
            <td>20 Desember 2024</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
