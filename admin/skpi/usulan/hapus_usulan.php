<?php
    include '../koneksi.php';
    $id = $_GET['id'];

    mysqli_query($koneksi,"DELETE from usulan_skpi where id_usulan='$id'");
    mysqli_query($koneksi,"DELETE from berkas_usulan where id_usulan='$id'");

    echo "<script>alert('Berhasil dihapus');</script>";
    echo "<script>document.location = '../usulan.php'; </script>";
?>