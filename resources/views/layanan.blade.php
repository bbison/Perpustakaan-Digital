<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - Perpustakaan SDN Bergas Lor 01</title>
    <link rel="stylesheet" href="styles.css">
    <style>

.hero h1 {
            font-family: 'Arial', sans-serif;
            background-color: rgb(128, 82, 235);
            justify-content: center;
            align-items: center;
            text-align: center;
        }

.hero h2 {
            font-family: 'Arial', sans-serif;
            button-block-color: red:
            
        }
      /* Desain form layanan */
section form {
    margin: 20px 0;
    display: flex;
    flex-direction: column;
    gap: 15px;
}
section form label {
    font-weight: bold;
}

section form input, section form button {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

section form button {
    background-color: #0077b6;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

section form button:hover {
    background-color: #00b4d8;
}

/* Desain tabel catatan layanan */
#recordTable {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

#recordTable th, #recordTable td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

#recordTable th {
    background-color: #0077b6;
    color: white;
}

    </style>
</head>
<body>
    <header>
        <div class="hero">
        <h1>Layanan Perpustakaan</h1>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        <nav>
            <div class="menu">
                <button onclick="showSection('pinjam')">Pinjam Buku</button>
                <button onclick="showSection('kembali')">Kembali Buku</button>
                <button onclick="showSection('keterangan')">Keterangan Lengkap</button>
            </div>
          <ul>
            <h2>
            <button type="button" onclick="kembali()">
            <a href="/">kembali</a></button>
            </h2>
          </ul>
           
        </nav>
    </header>

    <!-- Section Peminjaman Buku -->
    <section id="borrow">
        <h2>Peminjaman Buku</h2>
        <form id="borrowForm">
            <label for="borrowerName">Nama Peminjam:</label>
            
            <input type="text" id="borrowerName" required>

            <label for="bookTitle">Judul Buku:</label>
            <input type="text" id="bookTitle" required>

            <button type="button" onclick="borrowBook()">Pinjam Buku</button>
        </form>
    </section>

    <!-- Section Pengembalian Buku -->
    <section id="return">
        <h2>Pengembalian Buku</h2>
        <form id="returnForm">
            <label for="returnerName">Nama Pengembali:</label>
            <input type="text" id="returnerName" required>

            <label for="returnBookTitle">Judul Buku:</label>
            <input type="text" id="returnBookTitle" required>

            <button type="button" onclick="returnBook()">Kembalikan Buku</button>
            <button type="button" onclick="simpan()">simpan data</button>
        </form>
    </section>

    <!-- Section Catatan Layanan -->
    <section id="records">
        <h2>Catatan Layanan</h2>
        <table id="recordTable">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Judul Buku</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="recordList">
                <!-- Catatan otomatis akan muncul di sini -->
            </tbody>
        </table>
    </section>

    <footer>
        <p>&copy; 2024 SDN Bergas Lor 01. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
