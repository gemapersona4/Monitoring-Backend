<?php 
require 'functions.php';

if ( isset($_POST["submit"])) {    
 // cek apakah data berhasil ditambahkan atau tidak 
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'homepage.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'homepage.php';
        </script>
        "; 
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="nama">nama :</label>
        <br>
        <input type="text" name="nama" id="nama">
        <br>
        <br>
        <label for="divisi">divisi :</label>
        <br>
        <input type="text" name="divisi" id="divisi">
        <br>
        <br>
        <label for="asal">asal :</label>
        <br>
        <input type="text" name="asal" id="asal">
        <br>
        <br>
        <input type="submit" value="submit">
    </form>

</body>
</html>