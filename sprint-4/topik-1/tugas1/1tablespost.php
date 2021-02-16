<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>tabel-post</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="primary">
<hr>
<h3>FORM POST</h3>
<hr>
    <form action="" method="post">
        Barang: 
        <br> 
        <input type="text" name="barang">
        <br>
        Harga: 
        <br> 
        <input type="text" name="harga">
        <br><br>
        <input type="submit" value="Submit untuk POST!">
    </form>

    <br> 
    <p>TABEL POST</p>
    
    <table border="1" cellpadding="10" cellspacing="1" class="pertama">
        <tr>
            <th>Barang</th>
            <th>Harga</th>
        </tr>
        <tr>
            <td><?php echo $_POST['barang'] ?></td>
            <td><?php echo $_POST['harga'] ?></td>
        </tr>
    </table>

    <hr>
    <h3>FORM GET</h3>
    <hr>
    <form action="" method="get">
        Kurir: 
        <br> 
        <input type="text" name="kurir">
        <br>
        Pengirim: 
        <br> 
        <input type="text" name="pengirim">
        <br>
        Asal Barang: 
        <br> 
        <input type="text" name="asalbarang">
        <br>
        Tujuan Barang: 
        <br> 
        <input type="text" name="tujuanbarang">
        <br>
        <br>
        <input type="submit" value="Submit untuk GET!">    
    </form>

    <br>
    <p>TABEL GET</p>

    <table border="1" cellpadding="10" cellspacing="1" class="kedua">
        <tr>
            <th>Kurir</th>
            <th>Pengirim</th>
            <th>Asal Barang</th>
            <th>Tujuan Barang</th>
        </tr>
        <tr>
            <td><?php echo $_GET['kurir'] ?></td>
            <td><?php echo $_GET['pengirim'] ?></td>
            <td><?php echo $_GET['asalbarang'] ?></td>
            <td><?php echo $_GET['tujuanbarang'] ?></td>
        </tr>
    </table>
</div>

</body>
</html>