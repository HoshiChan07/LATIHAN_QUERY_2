<?php
$conn = mysqli_connect("localhost", "root", "", "data_bintang");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($query)
{
    global $conn;
    $nama = htmlspecialchars($query["nama"]);
    $nis = htmlspecialchars($query["nis"]);
    $alamat = htmlspecialchars($query["alamat"]);
    $email = htmlspecialchars($query["email"]);
    $pendidikan = htmlspecialchars($query["pendidikan"]);
    $jurusan = htmlspecialchars($query["jurusan"]);
    $gambar = htmlspecialchars($query["gambar"]);
    $query = "INSERT INTO data_teman VALUES(
        '','$nama','$nis','$alamat','$email','$pendidikan','$jurusan','$gambar'
    )";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM data_teman WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $pendidikan = htmlspecialchars($data["pendidikan"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);
    header("Location: index.php");
    $query = "UPDATE data_teman SET
    nama = '$nama',
    nis = '$nis',
    alamat = '$alamat',
    email = '$email',
    pendidikan = '$pendidikan',
    jurusan = '$jurusan',
    gambar = '$gambar'
    WHERE id = $id
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}