<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library Home</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: rgb(243, 43, 233);
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
        .hero h1 {
            font-size: 48px;
            font-weight: bold;
            background-color: rgb(229, 236, 218);
        }
        .hero p {
            font-size: 24px;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color:rgb(219, 203, 235);
        }
        .menu {
            font-size: 30px;
            margin-top: 10px;
            margin-bottom: 30px;
            font-weight: bold;
            background-color: rgb(222, 230, 213);
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
    <div class="hero">
        <div>
        <ul>
              <li>
                <h1>SELAMAT DATANG DI PERPUSTAKAAN</h1>
             </li>
            <li>
                <h1>SDN  BERGAS LOR 01</h1>
             </li>
        </ul>
        </div>
    </div>
    <ul>
        <h2>
            <button type="button"onclick="kembali ()">
            <a href="/">kembali</a></button>
        </h2>
    </ul>
    <div class="menu">
    <div class="hidden md:block">
        <div class=" ml-10 flex items-baseline space-x-4 ">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <tr>
                
              <th>
          <a href="/home" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
        </th>
        <th>
          <a href="/profile" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Profile</a> 
        </th>
        <th>
          <a href="/layanan" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Layanan</a>
        </th>
        <th>
          <a href="/koleksi" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Koleksi</a>
        </th>
        </tr>
        </div>
      </div>
    </div>
    
    <!-- Profile Section -->
    <section class="profile-section container">
        <h2>About Our School</h2>
        <div class="row">
            <div class="col-md-6">
                <img src="sdnbergaslor.jpg" alt="School Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p>
                    Our school is committed to providing high-quality education and fostering a love for learning. 
                    The library plays a crucial role in supporting our academic programs, offering a vast collection of books, 
                    resources, and a welcoming environment for students to explore new knowledge.
                </p>
                <p>
                    With a mission to cultivate lifelong learners, our library provides access to both academic and non-academic literature. 
                    We believe in nurturing curiosity, creativity, and a love for reading in every student.
                </p>
            </div>
        </div>
    </section>

    <!-- Books Gallery Section -->
    <section class="books-gallery">
        <div class="container">
            <h2 class="text-center">Koleksi Buku Favorit</h2>
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
            <h2>Words of Wisdom</h2>
            <div class="quote">
                "A room without books is like a body without a soul." - Marcus Tullius Cicero
            </div>
            <div class="quote mt-4">
                "The only thing that you absolutely have to know is the location of the library." - Albert Einstein
            </div>
            <div class="quote mt-4">
                "Books are a uniquely portable magic." - Stephen King
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
