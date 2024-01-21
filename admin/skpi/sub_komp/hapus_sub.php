<?php
    include '../koneksi.php';
    $id = $_GET['id'];

    mysqli_query($koneksi,"DELETE from sub_kompetensi where id_sub='$id'");

    echo "<script>alert('Berhasil dihapus');</script>";
    echo "<script>document.location = '../sub_kompetensi.php'; </script>";
?>