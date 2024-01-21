<?php
    include '../koneksi.php';
    $id = $_GET['id'];

    mysqli_query($koneksi,"DELETE from kompetensi where id_kompetensi='$id'");

    echo "<script>alert('Berhasil dihapus');</script>";
    echo "<script>document.location = '../kompetensi.php'; </script>";
?>