<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "gema", "gemapersona4", "phpdasar");

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
    $ns = htmlspecialchars($data["ns"]);
    $name = htmlspecialchars($data["name"]);
    $email = htmlspecialchars($data["email"]);
    $division = htmlspecialchars($data["division"]);
    
    // upload gambar
    $image = upload();
    if( !$image ) {
        return false;
    }

    $query = "INSERT INTO santri(name, ns, email, division, image) 
                    VALUES ('$name', '$ns', '$email', '$division', ' $image')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function upload() {
    
    $namaFile = $_FILES['image']['name'];
    $ukuranFile = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
             </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('yang anda upload bukan gambar! ');
             </script>";
        return false;     
    }

    // cek jika ukurannya terlalu besar
    if ( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar! ');
             </script>";
        return false; 
    }

    // lolos pengecekan, gambar siap diupload
    // generaate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .=  '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file("$tmpName", "" . "$namaFileBaru ");

    return $namaFile;

}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM santri WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;
    $id = $data["id"];
    $ns = htmlspecialchars($data["ns"]);
    $name = htmlspecialchars($data["name"]);
    $email = htmlspecialchars($data["email"]);
    $division = htmlspecialchars($data["division"]);
    $imageLama = htmlspecialchars($data["imageLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['image']['error'] === 4 ) {
        $image = $imageLama;    
    } else {
        $image = upload();
    }

    $query = "UPDATE santri SET 
                ns = '$ns',
                name = '$name',
                email = '$email',
                division = '$division',
                image = '$image'
              WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function cari($keyword) {
    $query = "SELECT * FROM santri 
                WHERE 
              name LIKE '%$keyword%' OR
              ns LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              division LIKE '%$keyword%' 
            ";
    return query($query);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");


    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar!');
              </script>";   
        return false;
    }

    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                </script>";   
        return false;
    }
    
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan usebaru ke database    
    mysqli_query($conn, "INSERT INTO users(username, password) VALUES('$username', '$password')");

    return mysqli_affected_rows($conn);

    }
    
}

?>