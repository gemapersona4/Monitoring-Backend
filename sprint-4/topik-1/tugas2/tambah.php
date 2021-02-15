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
</head>
<body>
    <h1>Tambah Data Barang</h1>
<!-- 

<div style="position:absolute;top:0;bottom:0;left:0;
right:0;background-color:black;font-size:100px;color:
red;text-align:center">WEB ANDA TELAH DI HACK</div>

 -->
    <form action="" method="post">
        <ul>
            <li>
                <label for="warna">Warna : </label>
                <input type="text" name="warna" id="warna" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="jumlah">Jumlah : </label>
                <input type="text" name="jumlah" id="jumlah" required>
            </li>
            <li>
                <label for="Merek">Merek : </label>
                <input type="text" name="Merek" id="Merek" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>