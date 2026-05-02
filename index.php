<?php
//halaman read
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>DAFTAR TAMU</h1>
<a href="tambah.php" class="btn-tambah">TAMBAH DATA</a>

<table border=1>
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Tanggal</td>
        <td>Tujuan</td>
        <td>Pesan</td>
        <td>Email</td>
        <td>No. HP</td>
        <td>EDIT</td>
        <td>HAPUS</td>
    </tr>
    <?php
    $query = mysqli_query($connection, "SELECT * FROM daftar_tamu");
    $no = 1;
    while ($data = mysqli_fetch_assoc($query)) {
        echo "<tr>
                <td>".$no."</td>
                <td>".$data['nama']."</td>
                <td>".$data['alamat']."</td>
                <td>".$data['tanggal']."</td>
                <td>".$data['tujuan']."</td>
                <td>".$data['pesan']."</td>
                <td>".$data['email']."</td>
                <td>".$data['telp']."</td>
                <td><a href='edit.php?id=".$data['id']."'>EDIT</a>
                <td><a href='delete.php?id=".$data['id']."'>HAPUS</a>
                </td>
            </tr>";
            $no++;
        }
    ?>
</table>
</body>
</html>