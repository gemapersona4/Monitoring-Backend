<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

if ( isset($_POST["submit"])) {    

    // var_dump($_POST);
    // var_dump($_FILES);die;
    
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
    <title>Tambah data santri</title>
</head>
<body>
    <h1>Tambah data santri</h1>
<!-- 

<div style="position:absolute;top:0;bottom:0;left:0;
right:0;background-color:black;font-size:100px;color:
red;text-align:center">WEB ANDA TELAH DI HACK</div>

 -->
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="ns">Ns : </label>
                <input type="text" name="ns" id="ns" required>
            </li>
            <li>
                <label for="name">Name : </label>
                <input type="text" name="name" id="name">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="division">Division : </label>
                <input type="text" name="division" id="division">
            </li>
            <li>
                <label for="image">Images : </label>
                <input type="file" name="image" id="image">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>