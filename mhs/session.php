<?php
    session_start();
    if($_SESSION['status']!=="mhs_login"){
        header("location:../index.php?pesan=belum_login");
        exit();
    }
    include "koneksi.php";

    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember"
        );
        $pecahkan = explode("-", $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
    
        return $pecahkan[2] . " " . $bulan[ (int)$pecahkan[1] ] . " " . $pecahkan[0];
    };

    $sql = mysqli_query($koneksi,"SELECT * FROM mahasiswa inner join prodi on mahasiswa.kd_prodi=prodi.kd_prodi");
    while ($r = mysqli_fetch_array($sql)){
        if ($_SESSION['username'] == $r['nim'] ){
            $idm = $r['id_mahasiswa'];
            $nama_mhs = $r['nama_mhs'];
            $nim = $r['nim'];
            break;
        }
    }
?>