<?php
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

$query_skpi = mysqli_query($koneksi,"SELECT * FROM skpi");

function translateToEnglish($indonesianText) {

    // Simulasi terjemahan (gantilah dengan API terjemahan yang sesuai)
    $translations = array(
        "Sistem Informasi" => "Information Systems",
        "Teknik Informatika" => "Informatics Engineering",
        // Tambahkan terjemahan lainnya sesuai kebutuhan
    );

    // Cari terjemahan
    $englishText = $translations[$indonesianText] ?? $indonesianText;

    return $englishText;
}

?>