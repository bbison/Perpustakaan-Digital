<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Peminjaman Buku</title>
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

    .borrow-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background: white;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .borrow-table thead {
      background-color: #4CAF50;
      color: white;
    }

    .borrow-table th, 
    .borrow-table td {
      padding: 15px;
      text-align: left;
      border: 1px solid #ddd;
    }

    .borrow-table th {
      font-size: 16px;
    }

    .borrow-table tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .borrow-table tr:hover {
      background-color: #f1f1f1;
    }

    .action-button {
      padding: 10px 15px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    .action-button:hover {
      background-color: #45a049;
    }

    .action-button.return {
      background-color: #f44336;
    }

    .action-button.return:hover {
      background-color: #e53935;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="header">
      <h1>Peminjaman Buku</h1>
      <p>Berikut adalah daftar buku yang sedang dipinjam.</p>
    </div>
    <ul>
        <h2>
            <button type="button" onclick="kembali()">
            <a href="/">kembali</a></button>
        </h2>
    </ul>
    <table class="borrow-table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Peminjam</th>
          <th>Judul Buku</th>
          <th>Tanggal Pinjam</th>
          <th>Batas Pengembalian</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Arya Wijaya</td>
          <td>Petualangan Si Kancil</td>
          <td>20 Desember 2024</td>
          <td>27 Desember 2024</td>
          <td>
            <button class="action-button return">Kembalikan</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Siti Nurhaliza</td>
          <td>Ensiklopedia Hewan</td>
          <td>18 Desember 2024</td>
          <td>25 Desember 2024</td>
          <td>
            <button class="action-button return">Kembalikan</button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Budi Santoso</td>
          <td>Cerita Rakyat Nusantara</td>
          <td>15 Desember 2024</td>
          <td>22 Desember 2024</td>
          <td>
            <button class="action-button return">Kembalikan</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
