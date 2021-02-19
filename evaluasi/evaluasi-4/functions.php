<?php

$conn = mysqli_connect("localhost", "gema", "gemapersona4", "evaluasi4");

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
    $nama = htmlspecialchars($data["nama"]);
    $divisi = htmlspecialchars($data["divisi"]);
    $asal = htmlspecialchars($data["asal"]);

    $query = "INSERT INTO santri(nama, divisi, asal) 
                    VALUES('$nama', '$divisi', '$asal')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM santri WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data['nama']);
    $divisi = htmlspecialchars($data['divisi']);
    $asal = htmlspecialchars($data['asal']);

    $query = "UPDATE santri SET  nama = '$nama',
                                 divisi = '$divisi',
                                 asal = '$asal'
                                 WHERE id = '$id'
                                 ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>