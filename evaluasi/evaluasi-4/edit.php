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
            document.location.href = 'homepage.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'homepage.php';
        </script>
        "; 
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit data santri</title>
</head>
<body>
    <h1>Edit data santri</h1>
<!-- 

<div style="position:absolute;top:0;bottom:0;left:0;
right:0;background-color:black;font-size:100px;color:
red;text-align:center">WEB ANDA TELAH DI HACK</div>

 -->
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $str["id"]; ?>">
        <ul>
            <li>
                <label for="nama">nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $str["nama"] ?>">
            </li>
            <li>
                <label for="divisi">divisi : </label>
                <input type="text" name="divisi" id="divisi" required value="<?= $str["divisi"] ?>">
            </li>
            <li>
                <label for="asal">Email : </label>
                <input type="text" name="asal" id="asal" required value="<?= $str["asal"] ?>">
            </li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>

