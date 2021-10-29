<?php
require 'function.php';
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Di Tambahkan');
        document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        alert('Data Gagal Di Tambahkan');
        document.location.href='index.php';
        ";
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
        <form action="" method="POST">
            <ul>
                <li>
                    <label for="NAMA">Masukkan Nama</label>
                    <input id="NAMA" type="text" name="nama">
                </li>
                <li>
                    <label for="NIS">Masukkan Nis</label>
                    <input id="NIS" type="text" name="nis" required>
                </li>
                <li>
                    <label for="ALAMAT">Masukkan Alamat</label>
                    <input id="ALAMAT" type="text" name="alamat">
                </li>
                <li>
                    <label for="EMAIL">Masukkan Email</label>
                    <input id="EMAIL" type="text" name="email">
                </li>
                <li>
                    <label for="PENDIDIKAN">Masukkan Pendidikan</label>
                    <input id="PENDIDIKAN" type="text" name="pendidikan">
                </li>
                <li>
                    <label for="JURUSAN">Masukkan Jurusan</label>
                    <input id="JURUSAN" type="text" name="jurusan">
                </li>
                <li>
                    <label for="GAMBAR">Masukkan gambar</label>
                    <input id="GAMBAR" type="text" name="gambar">
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
            </ul>
        </form>
</body>

</html>