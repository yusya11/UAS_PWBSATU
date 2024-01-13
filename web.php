<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Yusay.Fotografi</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

<!-- Feather Icon -->
<script src="https://unpkg.com/feather-icons"></script>

<!-- My Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">Yusya<span>Fotografi</span>.</a>

    <div class="navbar-nav">
      <a href="#">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Galeri</a>
      <a href="#contact">Kontak</a>
      <a href="logout.php">logout</a>

    </div>

    <div class="navbar-extra">
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>

  <!-- Navbar End -->


  <!-- Section Depan Start -->

  <section class="hero" id="home">
    <main class="content">
      <h1>Selamat Datang di <span>Galeri Yusya</span></h1>
      <p>Semoga yang melihat halaman ini di beri berkah oleh Allah SWT.... Aamiin paling banter.</p>
      <a href="#menu" class="cta">CEK GALERI</a>
    </main>
  </section>

  <!-- Section Depan End -->
  
  <!-- About Section Start -->
  
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2> 

    <div class="row">
      <div class="about-img">
        <img src="img/PXL_20230129_162319420.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Fotografi....?</h3>
        <p>"Fotografi berhubungan secara indah dengan penampilan, tetapi tidak ada yang terlihat."</p>
        <p>"Ada satu hal yang harus dimuat dalam foto itu yakni kemanusiaan.".</p>
        
      </div>
    </div>
  </section>

  <!-- About Section End-->
  
  <!-- Menu Section Start -->
  
  <section id="menu" class="menu">
    <h2><span>GALERI</span> KAMI</h2>
    <p>Berikut ini adalah hasil Karya jepretan Saya......</p>
    <div class="row">
      <div class="menu-card">
        <img src="img/menu/buku 1.jpg" alt="latte" class="menu-card-img">
        <h1 class="menu-card-title">- Tangan Memegang Buku -</h1>
         <a href="transaksi.php"><button class="btnBeli"><h2<p class="menu-card-price">IDR 70.000</p><h2></button></a>
      </div>
      <div class="menu-card">
        <img src="img/menu/DSC00487.jpg" alt="latte" class="menu-card-img">
        <h1 class="menu-card-title">- Bermain Catur -</h1>
         <a href="transaksi.php"><button class="btnBeli"><h2<p class="menu-card-price">IDR 70.000</p><h2></button></a>
      </div>
      <div class="menu-card">
        <img src="img/menu/buku 2.jpg" alt="latte" class="menu-card-img">
        <h1 class="menu-card-title">- Membaca Buku -</h1>
         <a href="transaksi.php" ><button class="btnBeli"><h2<p class="menu-card-price">IDR 70.000</p><h2></button></a>
      </div>
      <div class="menu-card">
        <img src="img/menu/vipp.jpg" alt="latte" class="menu-card-img">
        <h1 class="menu-card-title">- Skak Mat.. -</h1>
         <a href="transaksi.php"><button class="btnBeli"><h2<p class="menu-card-price">IDR 70.000</p><h2></button></a>
      </div>
      <div class="menu-card">
        <img src="img/depan.jpg" alt="latte" class="menu-card-img">
        <h1 class="menu-card-title">- Pemandangan -</h1>
         <a href="transaksi.php"><button class="btnBeli"><h2<p class="menu-card-price">IDR 70.000</p><h2></button></a>
        </div>

  </section>


  <!-- Menu Section End -->

  <!-- Kontak Section Start -->

  <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>Silakan Hubungi Akun Instagram kami Jika Berminat mengoleksi Foto Kami</p>
  <div class="row">
    <iframe src="https://maps.app.goo.gl/wyfhx1vF6K8gotbV8" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
  
  <form action="">
    <div class="input-group">
      <i data-feather="user"></i>
      <input type="text" placeholder="nama">
    </div>
    <div class="input-group">
      <i data-feather="mail"></i>
      <input type="text" placeholder="email">
    </div>
    <div class="input-group">
      <i data-feather="phone"></i>
      <input type="text" placeholder="no hp">
    </div>
    <a href="https://wa.me/6285702481426" target="_blank"><button class="btn"><h2<p class="menu-card-price">Kirim Pesan</p><h2></button></a>
  </form>
  </div>
  </section>

  <!-- Kontak Section End -->

<!-- Footer Start -->

<footer class="footer">
<div class="socials">
  <a href="https://instagram.com/yusya11_?igshid=ODd5OTBpamcwMW4w" target="_blank"><i data-feather="instagram"></i></a>
</div>

<div class="links">
  <a href="#home">Home</a>
  <a href="#about">Tentang Kami</a>
  <a href="#menu">Menu</a>
  <a href="#contact">Kontak</a>
  <a href="logout.php">logout</a>
</div>

<div class="credit">
  <p>Created By <a href="">Haidar Yusysa</a> - 2023.</p>
</div>
</footer>

<!-- Footer End -->


  <!-- Feather Icon -->
  <script>
    feather.replace()
  </script>

<!-- My Javascript -->
<script src="js/script.js"></script>
</body>
</html>