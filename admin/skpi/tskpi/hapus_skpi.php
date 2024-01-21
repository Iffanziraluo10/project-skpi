<?php
    include '../koneksi.php';
    $id = $_GET['id'];

    mysqli_query($koneksi,"DELETE from skpi where id_skpi='$id'");

    echo "<script>alert('Berhasil dihapus');</script>";
    echo "<script>document.location = '../skpi.php'; </script>";
?>