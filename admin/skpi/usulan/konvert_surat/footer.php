<?php

    $html = ob_get_clean();
    $dompdf->setPaper('A4', 'Potrait');

    // Load HTML ke Dompdf
    $dompdf->loadHtml($html);
    $uniqueNumber = mt_rand(1000, 9999);
    $dompdf->render();
    // Keluarkan hasil PDF ke browser atau simpan sebagai file
    $nama_file1 = ('Surat_SKPI_'.$uniqueNumber.'.pdf');
    // $dompdf->stream($nama_file1, array("Attachment" => false));
    $pdfOutput = $dompdf->output();

    $pdfFilePath1 = '../../../../file_jadi/';
    file_put_contents($pdfFilePath1 . $nama_file1, $pdfOutput);

    $query_update = mysqli_query($koneksi,"UPDATE usulan_skpi SET status_usulan='1', file_jadi='$nama_file1' where id_usulan='$id' ");

    if(!$query_update){
        die('Invalid query:'.mysqli_error($koneksi));
    }

    echo "<script>alert('Berhasil');</script>";
    echo "<script>document.location = '../../usulan.php'; </script>";
?>