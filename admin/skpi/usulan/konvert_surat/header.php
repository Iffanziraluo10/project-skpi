<?php
    require_once __DIR__. '../../../../../vendor/autoload.php';
    use Dompdf\Dompdf;
    use Dompdf\Options;
    include '../../koneksi.php';
    include 's1.php';


    $dompdf = new Dompdf();
    $options = new Options();
    $options->set('defaultFont', 'Helvetica');
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isPhpEnabled', true);
    $options->set('isHtml5ParserEnabled', true);
    $options->set("isPhpEnabled", true);
    $options->set('isPhpEnabled', true);
    $dompdf = new Dompdf($options);

    date_default_timezone_set("Asia/Jakarta");
    define("DOMPDF_ENABLE_REMOTE", false);

    $pathImage = '../../images/unika.png';
    $imageData = file_get_contents($pathImage);

    $unika = base64_encode($imageData);

    $p2 = '../../images/gambar_kkni.jpg';
    $imageData2 = file_get_contents($p2);

    $kkni = base64_encode($imageData2);

    ob_start();
    
?>
<style>
    @page { 
        margin: 50px 50px; 
    }
    footer { 
        position: fixed; 
        bottom: 0px; 
        left: 0px; 
        right: 0px; 
        height: 30px; 
        text-align: right; 
        font-size:  9pt;
    }
    body{
        font-family: Arial;
    }
    .informasi p{
        font-weight: bold;
        margin: 0px;
        padding: 0px;
        font-size: 9pt;
    }
    .judul{
        text-align: center;
    }
    h3{
        margin : 0px;
        font-size: 20pt;
    }
    .jkecil{
        font-size: 9pt;
    }
    .skpi{
        font-size: 15pt;
        margin-top: 15px;
    }
    table, td {
        /* border: 1px solid black; */
        font-size: 7.5pt;
        vertical-align: top;
    }
    .kualifikasi, .hasil p{
        font-weight: bold;
        margin-top: 5px ;
        padding: 0px;
        font-size: 9pt;
    }
    .no_surat{
        position: fixed;
        left: 470px; 
        top: -40px; 
        right: 0px;
        font-size: 9.5pt;
    }
</style>
<?php
function getNextLetter($currentLetter) {
    // Jika huruf adalah 'Z', maka kembalikan 'A'
    if ($currentLetter == 'Z') {
        return 'A';
    }
    
    // Jika bukan 'Z', kembalikan huruf berikutnya
    return chr(ord($currentLetter) + 1);
}