<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan SDN Bergas Lor 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .book-card {
            transition: transform 0.3s, box-shadow 0.3s;
            z-index: 1
        }
    

        #coverBuku {
            height: 80px;
            overflow: hidden;
            width: 100%;
            background-color: white;
            color:black;
            transition: transform 0.3s, box-shadow 0.3s, height 0.3s, background-color 0.3s, color 0.3s;
        }



        .book-card:hover #coverBuku{
          transform: scale(1.05);
          margin: 2px;
          height: 100%;
          background-color:rgb(6, 0, 8,0.4);
          color: white;
          /* box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); */
        }

        .book-card img {
            height: 300px;
            object-fit: cover;
        }

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

        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            color: white;
            width: 250px;
            padding: 20px;
            overflow-y: auto;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 250px;

        }

        @media (max-width: 768px) {
            .sidebar {

                position: static;
                width: 100%;
                height: auto;
            }

            .content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="/kelas">Data Kelas</a>
        <a href="/dashboard">Data Anggota</a>
        <a href="/kategory-buku">Data Kategory Buku</a>
        <a href="/buku">Data Buku</a>
        <a href="/peminjaman">Peminjaman</a>
        <a href="/logout">Logout</a>
    </div>

    <!-- Content Area -->
    <div class="content">
        <div class=" ">
            @if (session('berhasil'))
                <div class="m-2 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil</strong> {{ session('berhasil') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('gagal'))
                <div class="m-2 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Berhasil</strong> {{ session('gagal') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @yield('body')
        </div>

       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
