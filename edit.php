<?php
//halaman edit
include "connection.php";

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM daftar_tamu WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Halaman Edit -->
    <h1>SILAHKAN EDIT DATA TAMU ANDA</h1>
    <form action="edit_action.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Tujuan</td>
                <td><input type="text" name="tujuan" value="<?php echo $data['tujuan']; ?>"></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea name="pesan" cols="30" rows="3"><?php echo $data['pesan']; ?></textarea></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $data['email']; ?>"></td>
            </tr>
            <tr>
                <td>Nomor Handphone</td>
                <td><input type="text" name="nohp" value="<?php echo $data['telp']; ?>"></td>
            </tr>
        </table>
        <tr>
            <td colspan="2"><input type="submit" value="UPDATE"> <input type="button" value="CANCEL" onclick="location.href='index.php'"></td>
        </tr>
    </form>
</body>
</html>
