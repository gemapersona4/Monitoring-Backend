<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$brg = query("SELECT * FROM barangbudi WHERE id = $id")[0]; 


// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])) {    
    
    // cek apakah data berhasil diubah atau tidak 
    if( edit($_POST) > 0 ) {
        echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
        </script>
        "; 
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="primary">
 <h1>Edit Data Barang</h1>
 <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $brg["id"]; ?>">
        <input type="hidden" name="gambar" value="<?= $brg["gambar"]; ?>">
    
            <p>
                <label for="warna">Warna : </label>
                <input type="text" name="warna" id="warna" required value="<?= $brg["warna"] ?>">
            </p>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"  value="<?= $brg["nama"] ?>">
            </p>
            <p>
                <label for="jumlah">Jumlah : </label>
                <input type="text" name="jumlah" id="jumlah"  value="<?= $brg["jumlah"] ?>">
            </p>
            <p>
                <label for="merek">Merek : </label>
                <input type="text" name="merek" id="merek"  value="<?= $brg["merek"] ?>">
            </p>
            <p>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" value="<?= $brg['gambar']; ?>"><br>
            </p>
            <p>
                <button type="submit" name="submit">Ubah Data!</button>
            </p>
        
    </form>
</body>
</html>

