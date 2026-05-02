<?php
    include "connection.php";
        $id = $_GET['id'];

    //menghapus data 
    $query = mysqli_query($connection, "DELETE FROM daftar_tamu WHERE id='$id'");
?>

<script>
    alert("DATA SUCCESSFULY DELETED");
    document.location="index.php";
</script>
