<?php
require 'functions.php';
$budi = query("SELECT * FROM barangbudi");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="primary">
    <h1>Daftar Barang</h1>


        <a  href="tambah.php">Tambah data budi</a>


    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Warna</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Merek</th>
        </tr>

        <?php $i=1; ?>
        <?php foreach( $budi as $row  ) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="edit.php?id=<?= $row["id"]; ?>">edit</a> ||
                <a href="delete.php?id=<?= $row["id"] ?>" onclick = "return confirm('yakin');">delete</a>
            </td>
            <td><img src="<?= $row["gambar"] ?>" width="50" height="50" ></td>
            <td><?= $row["warna"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["jumlah"] ?></td>
            <td><?= $row["merek"] ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>