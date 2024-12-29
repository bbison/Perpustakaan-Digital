<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Anggota - Perpustakaan SD</title>
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

    .member-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .member-card {
      background: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      text-align: center;
      padding: 15px;
    }

    .member-card img {
      max-width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 10px;
      border: 2px solid #4CAF50;
    }

    .member-card h3 {
      font-size: 18px;
      color: #333;
      margin: 10px 0 5px;
    }

    .member-card p {
      font-size: 14px;
      color: #666;
      margin: 5px 0;
    }

    .member-card button {
      margin-top: 10px;
      padding: 10px 15px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .member-card button:hover {
      background-color: #45a049;
    }

    @media (max-width: 768px) {
      .member-card img {
        height: 80px;
        width: 80px;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="header">
      <h1>Daftar Anggota</h1>
      <p>Berikut adalah daftar anggota perpustakaan kami!</p>
    </div>
    <ul>
        <h2>
            <button type="button" onclick="kembali()">
            <a href="/">kembali</a></button>
        </h2>
    </ul>
    <div class="member-grid">
      <div class="member-card">
        <img src="https://via.placeholder.com/100" alt="Anggota 1">
        <h3>Nama Anggota 1</h3>
        <p>Kelas: 5A</p>
        <p>No. Anggota: 001</p>
        <button>Detail</button>
      </div>
      <div class="member-card">
        <img src="https://via.placeholder.com/100" alt="Anggota 2">
        <h3>Nama Anggota 2</h3>
        <p>Kelas: 4B</p>
        <p>No. Anggota: 002</p>
        <button>Detail</button>
      </div>
      <div class="member-card">
        <img src="https://via.placeholder.com/100" alt="Anggota 3">
        <h3>Nama Anggota 3</h3>
        <p>Kelas: 3C</p>
        <p>No. Anggota: 003</p>
        <button>Detail</button>
      </div>
    </div>
  </div>

</body>
</html>
