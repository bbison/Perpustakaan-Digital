<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Perpustakaan SDN Bergas Lor 01</title>
    <link rel="stylesheet" href="styles.css">
    <style>
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    color: #333;
    background-color: #f9f9f9;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

header {
    background: linear-gradient(135deg, #1d79aa, #00b4d8);
    color: white;
    text-align: center;
    width: 100%;
    padding: 20px 0;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

header h1 {
    font-size: 28px;
    margin-bottom: 10px;
    letter-spacing: 1px;
}

nav ul {
    list-style-type: none;
    display: flex;
    padding: 0;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

nav ul li a:hover {
    background-color: rgba(255, 255, 255, 0.2);
}

.banner {
    position: relative;
    margin-top: 20px;
    width: 90%;
    max-width: 800px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
}

.banner img {
    width: 100%;
    height: auto;
    max-height: 400px;
    object-fit: cover;
}

.banner-text {
    position: absolute;
    bottom: 20px;
    left: 20px;
    color: #f1f1f1;
    background: rgba(0, 0, 0, 0.6);
    padding: 15px 25px;
    border-radius: 8px;
    max-width: 75%;
    font-size: 20px;
}

.banner-text h2 {
    font-size: 24px;
    font-weight: bold;
}

section {
    width: 90%;
    max-width: 800px;
    margin: 40px 0;
    background-color: #ffffff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

section:hover {
    transform: scale(1.02);
}

section h2 {
    font-size: 24px;
    color: #0077b6;
    margin-bottom: 15px;
    border-bottom: 2px solid #00b4d8;
    display: inline-block;
    padding-bottom: 5px;
}

p, ul {
    margin-top: 15px;
    line-height: 1.6;
}

ul li {
    margin-left: 20px;
}

footer {
    width: 100%;
    background-color: #0077b6;
    color: white;
    text-align: center;
    padding: 15px 0;
    font-size: 14px;
    box-shadow: 0px -2px 8px rgba(0, 0, 0, 0.2);
    margin-top: 30px;
}

footer p {
    margin: 0;
}

@media only screen and (min-width: 600px) {
    header h1 {
        font-size: 32px;
    }

    nav ul li a {
        font-size: 20px;
    }

    .banner-text h2 {
        font-size: 26px;
    }
}

    </style>
</head>
<body>
    <header>
        <h1>Profil SDN Bergas Lor 01</h1>
        <nav>
            <ul>
                <h2>
                    <button type="button" onclick="kembali()">
                    <a href="/">kembali</a></button>
                </h2>
            </ul>
        </nav>
    </header>

    <!-- Section Visi dan Misi -->
    <section id="vision-mission">
        <h2>Visi dan Misi</h2>
        <p><strong>Visi:</strong> Mewujudkan siswa yang cerdas, berakhlak mulia, dan peduli lingkungan.</p>
        <p><strong>Misi:</strong></p>
        <ul>
            <li>Mengembangkan potensi siswa secara maksimal melalui pembelajaran kreatif dan inovatif.</li>
            <li>Menumbuhkan sikap disiplin dan mandiri pada diri siswa.</li>
            <li>Menciptakan lingkungan belajar yang bersih, sehat, dan menyenangkan.</li>
        </ul>
    </section>

    <!-- Section Sejarah Sekolah -->
    <section id="history">
        <h2>Sejarah Sekolah</h2>
        <p>SDN Bergas Lor 01 didirikan pada tahun 1980 dan telah menjadi salah satu sekolah dasar favorit di Kabupaten Semarang. Sejak awal berdirinya, sekolah ini terus berkomitmen untuk memberikan pendidikan berkualitas bagi siswa-siswi.</p>
    </section>

    <!-- Section Fasilitas Sekolah -->
    <section id="facilities">
        <h2>Fasilitas Sekolah</h2>
        <ul>
            <li>Perpustakaan dengan koleksi buku yang beragam</li>
            <li>Ruang kelas yang nyaman dan dilengkapi dengan proyektor</li>
            <li>Laboratorium komputer dan ruang multimedia</li>
            <li>Lapangan olahraga dan area bermain</li>
            <li>Kantin sekolah yang bersih dan sehat</li>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 SDN Bergas Lor 01. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
