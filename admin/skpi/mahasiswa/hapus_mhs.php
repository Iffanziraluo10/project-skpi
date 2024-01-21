<?php
    include '../koneksi.php';
    $id = $_GET['id'];

    mysqli_query($koneksi,"DELETE from mahasiswa where id_mahasiswa='$id'");

    echo "<script>alert('Berhasil dihapus');</script>";
    echo "<script>document.location = '../mahasiswa.php'; </script>";
?>