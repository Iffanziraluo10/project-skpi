<?php
    session_start();
    include '../koneksi.php';

    // menangkap data yang dikirim dari form
    $username = $_POST['username'];
    $password = md5($_POST['pass']);

    // menyeleksi data admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi,"SELECT * FROM user where username='$username' and password='$password'");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "admin_login";
        header("location:skpi/");
    }else{
        header("location:index.php?pesan=gagal");
    }

?>