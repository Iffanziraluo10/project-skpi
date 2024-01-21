<?php
    include '../../koneksi.php';
    $id = $_GET['id'];

    mysqli_query($koneksi,"DELETE from berkas_usulan where id_berkas='$id'");

    echo "<script>alert('Berhasil dihapus');</script>";
    echo "<script>document.location = '../buat_skpi.php'; </script>";
?>