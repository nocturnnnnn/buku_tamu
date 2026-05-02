<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Halaman Create -->
    <h1>SILAHKAN ISI DAFTAR TAMU</h1>
    <form action="tambah_action.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" id=""></td>
            </tr>
            <tr>
                <td>Tujuan</td>
                <td><input type="text" name="tujuan" id=""></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea name="pesan" id="" cols="30" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Nomor Handphone</td>
                <td><input type="text" name="nohp" id=""></td>
            </tr>
        </table>
        <tr>
            <td colspan="2"><input type="submit" value="SAVE"> <input type="button" value="CANCEL" onclick="location.href='index.php'"></td>
        </tr>
    </form>
</body>
</html>