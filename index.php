<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portofolio Rahman</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Rahman</h1>
    <nav>
      <ul>
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#tentang">Tentang Saya</a></li>
        <li><a href="#portofolio">Portofolio</a></li>
        <li><a href="#kontak">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <section id="beranda" class="hero">
    <h2>Halo, saya Rahman</h2>
    <p>Web Developer | UI/UX Designer | Freelancer</p>
  </section>

  <section id="tentang">
    <h2>Tentang Saya</h2>
    <p>Saya adalah pengembang web yang berpengalaman dalam membuat website interaktif dan responsif. Saya senang belajar teknologi baru dan menciptakan solusi digital kreatif.</p>
  </section>

  <section id="portofolio">
    <h2>Portofolio</h2>
    <div class="project">
      <h3>Website Toko Online</h3>
      <p>Membuat e-commerce menggunakan HTML, CSS, JavaScript, dan PHP.</p>
    </div>
    <div class="project">
      <h3>Aplikasi Kasir</h3>
      <p>Point of Sale berbasis web menggunakan Laravel dan MySQL.</p>
    </div>
  </section>

  <section id="kontak">
    <h2>Kontak Saya</h2>
    <form id="contactForm">
      <input type="text" placeholder="Nama" required>
      <input type="email" placeholder="Email" required>
      <textarea placeholder="Pesan Anda..." required></textarea>
      <button type="submit">Kirim</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Rahman. Semua Hak Dilindungi.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
