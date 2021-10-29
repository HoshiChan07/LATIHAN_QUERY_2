<?php
require 'function.php';
$id = $_GET["id"];
$mhs = query("SELECT * FROM data_teman WHERE id = $id ")[0];
if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Di Ubah');
        document.location.href='index.php';
        <\script>";
    } else {
        echo "
        <script>
        alert('Data Gagal Di Ubah');
        document.location.href='index.php';
        <\script>";
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form action="" method="POST">
        <ul>
            <li>
                <input type="hidden" name="id" value="<?= $mhs["Id"] ?>">
            </li>
            <li>
                <label for="userName">NAMA</label>
                <input id="userName" type="text" name="nama" value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="userNis">NIS</label>
                <input id="userNis" type="text" name="nis" value="<?= $mhs["nis"]; ?>">
            </li>
            <li>
                <label for="userAlamat">ALAMAT</label>
                <input id="userAlamat" type="text" name="alamat" value="<?= $mhs["alamat"]; ?>">
            </li>
            <li>
                <label for="userEmail">EMAIL</label>
                <input id="userEmail" type="text" name="email" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="userJurusan">JURUSAN</label>
                <input id="userJurusan" type="text" name="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="userPendidikan">PENDIDIKAN</label>
                <input id="userPendidikan" type="text" name="pendidikan" value="<?= $mhs["pendidikan"]; ?>">
            </li>
            <li>
                <label for="userGambar">GAMBAR</label>
                <input id="userGambar" type="text" name="gambar" value="<?= $mhs["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">UBAH DATA</button>
            </li>
        </ul>
    </form>
</body>

</html>