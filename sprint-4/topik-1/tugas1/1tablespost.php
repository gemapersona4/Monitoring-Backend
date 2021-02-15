<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>tabel-post</title>
</head>
<body>
    
<h3>FORM POST</h3>
    <form action="" method="post">
        Barang: 
        <br> 
        <input type="text" name="barang">
        <br>
        Harga: 
        <br> 
        <input type="text" name="harga">
        <br>
        <input type="submit" value="Submit untuk POST!">    
    </form>

    <br> 
    TABEL POST
    <hr>

    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>Barang</th>
            <th>Harga</th>
        </tr>
        <tr>
            <td><?php echo $_POST['barang'] ?></td>
            <td><?php echo $_POST['harga'] ?></td>
        </tr>
    </table>

    <h3>FORM GET</h3>
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
    TABEL GET
    <hr>

    <table border="1" cellpadding="10" cellspacing="1">
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


</body>
</html>