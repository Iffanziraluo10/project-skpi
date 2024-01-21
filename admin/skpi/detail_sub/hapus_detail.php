<?php
    include '../koneksi.php';
    $id = $_GET['id'];

    mysqli_query($koneksi,"DELETE from detail_subkomp where id_detail='$id'");

    echo "<script>alert('Berhasil dihapus');</script>";
    echo "<script>document.location = '../detail_sub.php'; </script>";
?>