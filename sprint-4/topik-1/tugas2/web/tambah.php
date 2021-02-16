<?php
require 'functions.php';

if ( isset($_POST["submit"])) {    
    // cek apakah data berhasil ditambahkan atau tidak 
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>
        "; 
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="primary">
    <h1>Tambah Data Barang</h1>
    <form action="" method="post">
    
            <p>
                <label for="warna">Warna : </label>
                <input type="text" name="warna" id="warna" required>
            </p>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </p>
            <p>
                <label for="jumlah">Jumlah : </label>
                <input type="text" name="jumlah" id="jumlah" required>
            </p>
            <p>
                <label for="merek">Merek : </label>
                <input type="text" name="merek" id="merek" required>
            </p>
            <p>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </p>
            <p>
                <button type="submit" name="submit">Tambah Data!</button>
            </p>
        
    </form>
</div>
</body>
</html>