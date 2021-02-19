<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
    
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
    <title>Edit data santri</title>
</head>
<body>
    <h1>Edit data santri</h1>
<!-- 

<div style="position:absolute;top:0;bottom:0;left:0;
right:0;background-color:black;font-size:100px;color:
red;text-align:center">WEB ANDA TELAH DI HACK</div>

 -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $str["id"]; ?>">
        <input type="hidden" name="imageLama" value="<?= $str["image"]; ?>">
        <ul>
            <li>
                <label for="ns">Ns : </label>
                <input type="text" name="ns" id="ns" required value="<?= $str["ns"] ?>">
            </li>
            <li>
                <label for="name">Name : </label>
                <input type="text" name="name" id="name"  value="<?= $str["name"] ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email"  value="<?= $str["email"] ?>">
            </li>
            <li>
                <label for="division">Division : </label>
                <input type="text" name="division" id="division"  value="<?= $str["division"] ?>">
            </li>
            <li>
                <label for="image">Images : </label><br>
                <img src="<?= $str['image']; ?>" width="50" height="50"><br>
                <input type="file" name="image" id="image"><br>
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>

