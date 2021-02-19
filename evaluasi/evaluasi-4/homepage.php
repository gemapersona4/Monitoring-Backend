<?php

require 'functions.php';
$santri = query("SELECT * FROM santri");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    
        <h1>HOMEPAGE</h1>
        <a href="add.php">Tambah data santri</a>
        <br><br>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Tindakan</th>
                <th>Nama</th>
                <th>Divisi</th>
                <th>Asal</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach( $santri as $row ) : ?>    
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="edit.php">edit</a> ||
                    <a href="delete.php" onclick = "return confirm('yakin');">delete</a>
                </td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['divisi'] ?></td>
                <td><?= $row['asal'] ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>

</body>
</html>