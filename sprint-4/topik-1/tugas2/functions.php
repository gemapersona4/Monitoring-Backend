<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "gema", "gemapersona4", "budi");

function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
}

function tambah($data) {
    global $conn;
    $warna = htmlspecialchars($data["warna"]);
    $nama = htmlspecialchars($data["nama"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $merek = htmlspecialchars($data["merek"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO barangbudi(nama, warna, jumlah, merek, gambar) 
                    VALUES ('$nama', '$warna', '$jumlah', '$merek', ' $gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM barangbudi WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;
    $id = $data["id"];
    $warna = htmlspecialchars($data["warna"]);
    $nama = htmlspecialchars($data["nama"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $merek = htmlspecialchars($data["merek"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE barangbudi SET 
                warna = '$warna',
                nama = '$nama',
                jumlah = '$jumlah',
                merek = '$merek',
                gambar = '$gambar'
              WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>