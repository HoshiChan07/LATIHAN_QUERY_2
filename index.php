<?php
$data = mysqli_connect("localhost", "root", "", "data_bintang");
$result = mysqli_query($data, "SELECT * FROM data_teman");

?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
    body {
        background-image: url(../../img/computer.png);
        background-size: cover;
        font: 16px/28px arial;
    }

    .container {
        opacity: .9;
        box-sizing: border-box;
        width: 1000px;
        margin: 0px auto;
        border-radius: 10px;
        box-shadow: 0 0 3px rgba(0, 0, 0, .8), inset 0 0 3px rgba(255, 255, 255, 255);
        padding: 30px;
        background: linear-gradient(45deg, #e056fd, #686de0, #be2edd);
    }

    .kotak table {
        margin: 5px auto;
        background-color: silver;
        border: 3px white solid;
        text-align: center;
        box-sizing: border-box;
        padding: 0;

    }

    .judul {
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
        margin: 5px 0;
        color: white;
    }

    .judul a {
        color: white;
        float: right;
        box-sizing: border-box;
        position: relative;
        bottom: 50px;
        background-color: black;
        padding: 5px 10px;
        font-weight: bold;
        transition: .5s;
    }

    .judul a:hover {
        border: solid white 1px;
    }

    a {
        text-decoration: none;
    }

    .clear {
        clear: right;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="judul">
            <h1>Data Mahasiswa</h1>
            <a href="tambah.php">TAMBAH DATA</a>
        </div>
        <div class="clear"></div>
        <div class="kotak">
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>NO</th>
                    <th>Aksi</th>
                    <th>Nama</th>
                    <th>Nis</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Pendidikan</th>
                    <th>Jurusan</th>
                    <th>Gambar</th>
                </tr>
                <?php $i = 1 ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["Id"]; ?>">UBAH</a> |
                        <a href="hapus.php?id=<?= $row["Id"]; ?>">HAPUS</a>
                    </td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["nis"]; ?></td>
                    <td><?= $row["alamat"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["pendidikan"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                    <td><?= $row["gambar"]; ?></td>
                </tr>
                <?php $i++; ?>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</body>

</html>