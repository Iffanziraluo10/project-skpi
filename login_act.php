<?php
    session_start();
    include 'koneksi.php';

    // menangkap data yang dikirim dari form
    $username = $_POST['username'];
    $password = md5($_POST['pass']);

    // menyeleksi data admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa where nim='$username' and password='$password' and status = 1 ");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "mhs_login";
        header("location:mhs/");
    }else{
        header("location:index.php?pesan=gagal");
    }

?>