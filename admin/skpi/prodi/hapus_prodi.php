<?php
    include '../koneksi.php';
    $id = $_GET['id'];

    mysqli_query($koneksi,"DELETE from prodi where id_prodi='$id'");

    echo "<script>alert('Berhasil dihapus');</script>";
    echo "<script>document.location = '../prodi.php'; </script>";
?>