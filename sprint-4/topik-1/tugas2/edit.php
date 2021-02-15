<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$str = query("SELECT * FROM santri WHERE id = $id")[0]; 


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
</head>
<body>
    <h1>Edit Data Barang</h1>
<!-- 

<div style="position:absolute;top:0;bottom:0;left:0;
right:0;background-color:black;font-size:100px;color:
red;text-align:center">WEB ANDA TELAH DI HACK</div>

 -->
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $str["id"]; ?>">
        <ul>
            <li>
                <label for="warna">Warna : </label>
                <input type="text" name="warna" id="warna"  value="<?= $str["warna"] ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" nama="nama" id="nama"  required value="<?= $str["nama"] ?>">
            </li>
            <li>
                <label for="jumlah">Jumlah : </label>
                <input type="text" name="jumlah" id="jumlah"  value="<?= $str["jumlah"] ?>">
            </li>
            <li>
                <label for="merek">Merek : </label>
                <input type="text" name="merek" id="merek"  value="<?= $str["merek"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar"  value="<?= $str["gambar"] ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>

