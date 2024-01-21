<?php
    $id = $_GET['id'];
    $id2 = $_GET['id_usul'];
    include "../koneksi.php";
    mysqli_query($koneksi,"UPDATE berkas_usulan SET catatan='-' where id_berkas = '$id' ");

    echo "<script>alert('Berkas diterima');</script>";
    echo "<script>document.location = 'cek_berkas.php?id=".$id2."'; </script>";
?>