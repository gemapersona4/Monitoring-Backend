<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM users")); 
$jumlahHalaman = $jumlahData / $jumlahDataPerhalaman;
var_dump($jumlahHalaman);

$santri = query("SELECT * FROM santri LIMIT 0, $jumlahDataPerHalaman");

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

<?php 
// CATATAN
// koneksi ke database
// $conn = mysqli_connect("localhost", "gema", "gemapersona4", "phpdasar");

//  ambil data santri / query data santri
// $result = mysqli_query($conn, "SELECT * FROM santri");
// if ( !$result ) {
//     echo mysqli_error($conn);
// }


// ambil data (fetch) mahasiswa dari object $result
// mysqli_fetch_row() // mengambalikan nilai array numerik
// mysqli_fetch_assoc() // mengambalikan nilai array associative 
// mysqli_fetch_array() // mengambalikan nilai array numerik atau associative
// mysqli_fetch_object() // mengambalikan nilai object, ga punya nilai 

// while ( $s = mysqli_fetch_assoc($result) ) {
// var_dump($s);
// }
?>