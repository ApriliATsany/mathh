<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $testimoni = $_POST['testimoni'];

    mysqli_query($koneksi, "INSERT INTO testimoni (nama, testimoni) VALUES ('$nama', '$testimoni')");
    header("Location: index.php#testimoni");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulis Testimoni - MathUp</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Tulis Testimoni</h2>
            <form method="POST">
                <label>Nama</label>
                <input type="text" name="nama" required>
                <label>Testimoni</label>
                <textarea name="testimoni" rows="5" required></textarea>
                <button type="submit" name="simpan">Kirim</button>
                <a href=index.php#testimoni>Kembali</a>
        </form>
    </div>
</body>
</html>