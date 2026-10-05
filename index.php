<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursus - MathUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    html {
    scroll-behavior: smooth;
    }

    body {
        font-family: Arial;
    }

    nav {
        background: #5e0000;
        color: white;
        padding: 15px 8%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    nav a {
        color: white;
        text-decoration: none;
        margin-left: 15px;
    }
   
    section {
        padding: 50px 8%;
    }
    .hero {
        display: flex;
        align-items: center;
    }

    .hero div {
        flex: 1;
    }

    .hero img {
        width: 40%;
    }

    .profil {
        background: #fff8f8;
        padding: 50px 8%;
    }

    .galeri {
        display: flex;
        gap: 15px;
    }

    .galeri img {
        width: 23%;
    }

    footer {
       text-align: center;
    }
</style>
</head>
<body>
    <nav>
        <h1>MathUp</h1>
        <div>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#kursus">Kursus</a>
            <a href="#galeri">Galeri</a>
            <a href="#testimoni">Testimoni</a>
        </div>
    </nav>   

    <section id="home" class="hero">
        <div>
            <h2>Belajar Matematika</h2>
            <p>Belajar lebih mudah dan menyenangkan bersama MathUp</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                WhatsApp
            </button>
        </div>
        <img src="assets/img/hero.jpg">
    </section>

    <section id="profil">
        <div class="profil">
        <h2>Tentang MathUp</h2>
        <p>MathUp Course adalah tempat belajar matematika
        yang membantu siswa memahami matematika dengan
        cara sederhana dan menyenangkan.</p>
        </div>
    </section>

    <section id="kursus">
    <div class="card-group">
    <div class="card">
        <img src="assets/img/kursus-sd.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img src="assets/img/kursus-smp.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img src="assets/img/kursus-sma.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
        </div>
    </div>
    </div>
    </section>

    <section id="galeri">
        <h2><b>Galeri</b></h2>
        <div class="galeri">
            <img src="assets/img/galeri1.jpg">
            <img src="assets/img/galeri2.jpg">
            <img src="assets/img/galeri3.jpg">
            <img src="assets/img/galeri4.jpg">
            <img src="assets/img/galeri5.jpg">
            <img src="assets/img/galeri6.jpg">
        </div>
    </section>

    <section id="testimoni">
        <h2>Testimoni</h2>
        <a href="tambah.php" class="button">+ Tambahkan Testimoni</a>

        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM testimoni ORDER BY id DESC");
        while ($d = mysqli_fetch_assoc($data)) {
        ?>

        <div class="testimoni">
            <hr>
            <h3><?= $d['nama']; ?></h3>
            <p><?= $d['testimoni']; ?></p>

            <a href="edit.php?id=<?= $d['id']; ?>">Edit</a>
            <a href="hapus.php?id=<?=  $d['id']; ?>">Hapus</a> 
            <hr>
        </div>
        <?php } ?>
    </section>

    <footer>
        <p>&copy; 2026 MathUp Course</p>
    </footer>

    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hubungi MathUp</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
                <p>Ada pertanyaan tentang kursus?</p>

                <a href="https://wa.me/6281327535595"
                   target="_blank"
                   class="btn btn-success">
                    Chat WhatsApp
                </a>
            </div>
    </div>
  </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>