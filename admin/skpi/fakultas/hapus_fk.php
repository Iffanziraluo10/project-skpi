<?php
    include '../koneksi.php';
    $id = $_GET['id'];

    mysqli_query($koneksi,"DELETE from fakultas where id_fakultas='$id'");

    echo "<script>alert('Berhasil dihapus');</script>";
    echo "<script>document.location = '../fakultas.php'; </script>";
?>