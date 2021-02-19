<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$santri = query("SELECT * FROM santri");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $santri = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>

<a href="logout.php">Logout</a>

<h1>Daftar Santri</h1>

<a href="tambah.php">Tambah data santri</a>
<br><br>

<form action="" method="post">

    <input type="text" name="keyword" size="30" autofocus
    placeholder="masukkan keyword pencarian..." autocomplete="off" >
    <button type="submit" name="cari">Cari!</button>

</form>

<br>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Action</th>
        <th>Image</th>
        <th>NS</th>
        <th>Name</th>
        <th>Email</th>
        <th>Division </th>
    </tr>

        <?php $i=1; ?>
        <?php foreach( $santri as $row  ) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="edit.php?id=<?= $row["id"]; ?>">edit</a> ||
                <a href="delete.php?id=<?= $row["id"] ?>" onclick = "return confirm('yakin');">delete</a>
            </td>
            <td><img src="<?= $row["image"] ?>" width="50" height="50" ></td>
            <td><?= $row["ns"] ?></td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["division"] ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
</table>

</body>
</html>