<?php
    include "connection.php";

        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tujuan = $_POST['tujuan'];
        $pesan = $_POST['pesan'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];

    //insert mysql
    $query = mysqli_query($connection,
    "INSERT INTO daftar_tamu (nama, alamat, tujuan, pesan, email, telp) VALUES ('$nama', '$alamat', '$tujuan', '$pesan', '$email', '$nohp')");

?>

<script>
    alert("DATA SUCCESSFULY SAVED");
    document.location="index.php";
</script>