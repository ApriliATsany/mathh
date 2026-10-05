<?php
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM testimoni WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $testimoni = $_POST['testimoni'];

    mysqli_query($koneksi, "UPDATE testimoni SET nama='$nama', testimoni='$testimoni' WHERE id='$id'");
    header("Location: index.php#testimoni");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Testimoni - MathUp</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Edit Testimoni - MathUp</h2>
        <form method="POST">
            <label>Nama</label>
            <input type="text" name="nama" value="<?=  $data['nama']; ?>" required>
            <label>Testimoni</label>
            <textarea name="testimoni" rows="5" required><?= $data['testimoni']; ?></textarea>
            <button  type="submit" name="update">Simpan</button>
            <a href= index.php#testimoni>Kembali</a>
        </form>
    </div>
    
</body>
</html>