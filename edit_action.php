<?php
    include "connection.php";

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tujuan = $_POST['tujuan'];
        $pesan = $_POST['pesan'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];

    //update mysql
    $query = mysqli_query($connection,
    "UPDATE daftar_tamu SET nama='$nama', alamat='$alamat', tujuan='$tujuan', pesan='$pesan', email='$email', telp='$nohp' WHERE id='$id'");

?>

<script>
    alert("DATA SUCCESSFULY UPDATED");
    document.location="index.php";
</script>
