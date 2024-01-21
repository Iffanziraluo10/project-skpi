<?php
    include 'header.php';

    $id = $_GET['id'];
    $id_jenis = $_GET['id_jenis'];
    $tampil = mysqli_query($koneksi,"SELECT * FROM usulan_skpi inner join mahasiswa on usulan_skpi.id_mahasiswa=mahasiswa.id_mahasiswa inner join prodi on mahasiswa.kd_prodi=prodi.kd_prodi where id_usulan='$id' ");
    $k = mysqli_fetch_assoc($tampil);
?>

<div class="no_surat">
    <p>Nomor : <?= $k['no_skpi'] ?>/FIKOM-UKS/A.09/2024</p>
</div>
<!-- $pageText = "Halaman / Page " . $currentPages . " Dari / of " . $totalPages; -->
<footer>
    <script type="text/php">
        if ( isset($pdf) ) { 
            $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
            $size = 9;
            $totalPages = $PAGE_COUNT;
            $currentPages = $PAGE_NUM;
            $pageText = "Page " . $currentPages;
            $y = 810;
            $x = 527;
            $pdf->text($x, $y, $pageText, $font, $size);
        }
    </script>
</footer>
<!-- judul -->
<div class="judul">
    <img src="data:image/png;base64,<?= $unika ?>" alt="logo" width="70px">
    <h3><b>UNIVERSITAS KATOLIK SANTO THOMAS</b></h3>
        <b>
        <div class="jkecil">
            Terakreditasi BAIK <br>
            Berdasarkan Surat Keputusan Badan Akreditasi Nasional Perguruan Tinggi <br>
            Nomor : 960/SK/BAN-PT/Ak.Ppj/PT/XI/2023
        </div>
        <div class="skpi">
            SURAT KETERANGAN PENDAMPING IJAZAH <br>
            DIPLOMA SUPPLEMENT
            <hr>
        </div>
        </b>
</div>
<div class="informasi">
    <p>1. INFORMASI TENTANG IDENTITAS DIRI PEMEGANG SKPI</p>
    <p><i>1. Information Identifying the Holder of the Diploma Supplement</i></p> <br>
</div>
<!-- end header -->
<table>
    <!-- isi -->
    <tr>
        <td colspan="2" style="width: 355px;">
            Nama Lengkap <br>
            <i>Full Name</i>
        </td>
        <td style="border: 1px solid;" colspan="3">
            <?= $k['nama_mhs'] ?> <br>
            <?= $k['nama_mhs'] ?>
        </td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr>
        <td colspan="2" style="width: 355px;" style="width: 5px;">
            Tempat, Tanggal Lahir <br>
            <i>Place and Date of Birth</i>
        </td>
        <?php
        // tgl lahir format US
        $tanggal_lahir_us = date("F d, Y", strtotime($k['tgl_lahir']));
        ?>
        <td style="border: 1px solid;" colspan="3">
            <?= $k['tempat_lahir'].', '. tgl_indo($k['tgl_lahir']) ?> <br>
            <?= $k['tempat_lahir'].', '. $tanggal_lahir_us ?>
        </td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr>
        <td colspan="2" style="width: 355px;">
            Nomor Induk Mahasiswa <br>
            <i>Student ID Number</i>
        </td>
        <td style="border: 1px solid;" colspan="3">
            <?= $k['nim'] ?> <br>
            <?= $k['nim'] ?>
        </td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr>
        <td colspan="2" style="width: 355px;">
            Nomor SKPI <br>
            <i>SKPI Number</i>
        </td>
        <td style="border: 1px solid; width: 130px">
            <?= $k['no_skpi'] ?>/FIKOM-UKS/A.09/2024 <br>
            <?= $k['no_skpi'] ?>/FIKOM-UKS/A.09/2024
        </td>
        <td style="width: 145px;">
            Nomor Ijazah Nasional <br>
            <i>National Sertifice Number</i>
        </td>
        <td style="border: 1px solid; width: 150px">
            <?= $k['no_ijazah'] ?> <br>
            <?= $k['no_ijazah'] ?>
        </td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr>
        <td colspan="2" style="width: 355px;">
            Tanggal Mulai Studi <br>
            Date of Starting Studi
        </td>
        <?php
            $tgl = '2019-09-01';
            $tgl_masuk = date("F d, Y", strtotime($tgl))
        ?>
        <td style="border: 1px solid;">
            1 September 2019 <br>
            <i><?= $tgl_masuk ?></i>
        </td>
        <td style="width: 20px;">
            Tanggal Kelulusan <br>
            <i>Date Of Graduation</i>
        </td>
        <?php
            $lulus_us = date("F d, Y", strtotime($k['tgl_lulus']));
        ?>
        <td style="border: 1px solid; width: 5px">
            <?= tgl_indo($k['tgl_lulus']) ?> <br>
            <i><?= $lulus_us ?></i>
        </td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr>
        <td colspan="2" style="width: 355px;">
            Program Studi <br>
            <i>Study Program</i>
        </td>
        <?php
        $textInEnglish = translateToEnglish($k['nama_prodi'])
        ?>
        <td style="border: 1px solid; " colspan="3">
            <?= $k['nama_prodi'] ?> <br>
            <i><?= $textInEnglish ?></i>
        </td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr>
        <td colspan="2" style="width: 355px;">
            Peringkat Akreditas Program Studi <br>
            <i>Study Program Accreditation Rating</i>
        </td>
        <td style="border: 1px solid;" colspan="3">
            <?= $k['akreditasi'] ?> <br> <?= $k['akreditasi'] ?>
        </td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr>
        <td colspan="2" style="width: 355px;">
            No. SK Akreditas Program Studi <br>
            <i>Accredited Number</i>
        </td>
        <td style="border: 1px solid;" colspan="3">
            <?= $k['no_sk'] ?> <br>
            <?= $k['no_sk'] ?>
        </td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr>
        <td colspan="2" style="width: 355px;">
            Gelar yang diberikan <br>
            <i>Awarded Degree</i>
        </td>
        <td style="border: 1px solid;" colspan="3">
            <?= $k['gelar'] ?> <br>
            <?= $k['gelar'] ?>
        </td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr>
        <td colspan="2" style="width: 355px;">
            Bahasa Pengantar <br>
            <i>Language of Instruction</i>
        </td>
        <td style="border: 1px solid;" colspan="3">
            Indonesia <br>
            Indonesia
        </td>
    </tr>
</table>
<!-- 2 -->
<div class="kualifikasi">
    <p>
        2. INFORMASI TENTANG LEVEL KUALIFIKASI <br>
        <i>2. Information on the Level Qualification</i>
    </p>
</div>

<table>
    <tr>
        <td style="width: 243px;">
            Jenis Pendidikan <br>
            <i>Type of Education</i>
        </td>
        <td style="border: 1px solid; width: 650px" colspan="3">
            Akademik <br> <i>Academic</i>
        </td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr>
        <td>
            Program <br>
            <i>Program</i>
        </td>
        <td style="border: 1px solid; width: 650px" colspan="3">
            Sarjana (S1) <br>
            <i>Bachelor</i>
        </td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr>
        <td>
            Sistem Penilaian <br>
            <i>Grading System</i>
        </td>
        <td style="border: 1px solid; width: 650px" colspan="3">
            1-4 : A = 4; B+ = 3,5; B = 3; C+ = 2,5; C = 2; D = 1; E = 0 <br> 1-4 : A = 4; B+ = 3,5; B = 3; C+ = 2,5; C = 2; D = 1; E = 0
        </td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr>
        <td>
            Jenjang Kualifikasi Sesuai KKNI <br>
            <i>Level of Qualification in the National <br> Qualification Framework</i>
        </td>
        <td style="border: 1px solid; width: 650px" colspan="3">
            Level Enam <br> Level Six
        </td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr>
        <td>
            Program Pendidikan Tingkat Lanjut <br>
            <i>Access to Future Study</i>
        </td>
        <td style="border: 1px solid; width: 650px" colspan="3">
            Program Master dan Doktoral <br>
            <i>Master and Doctoral Program</i>
        </td>
    </tr>
</table>
<!-- END 2 -->
<!-- 3 -->
<div class="hasil">
    <p>
        3. INFORMASI TENTANG KUALIFIKASI DAN HASIL YANG DICAPAI <br>
        <i>3. Information Identifying the Qualification and Outcomes Obtained</i>
    </p>
</div>
<table>
    <tr style="font-weight: bold;">
        <td style="width: 0px; ">A.</td>
        <td style="text-align: left; width: 300px"> Capaian Pembelajaran</td>
        <td style="width: 5px;"></td>
        <td style="width: 0px; ">A.</td>
        <td style="width: 330px;"> Learning Outcomes</td>
    </tr>
    <tr style="text-align: center; font-weight:bold">
        <td></td>
        <td>Sikap</td>
        <td></td>
        <td></td>
        <td><i>Proposition Of Attitudes</i></td>
    </tr>
    <!-- translate -->
    <?php
        $no = 1;
        $query_skpi = mysqli_query($koneksi, "SELECT * FROM skpi where kode_skpi='$id_jenis' ");

        while($w = mysqli_fetch_array($query_skpi)){
            $sikap_array = explode('.,', $w['sikap']);
            $sikap_bing = explode('.,', $w['sikap_bing']);

            $ket_array = explode('.,', $w['ket_umum']);
            $ket_bing = explode('.,', $w['ket_bing']);

            $peng_array = explode('.,', $w['pengetahuan']);
            $peng_bing = explode('.,', $w['peng_bing']);

            // Buat daftar sikap dengan nomor berurut
            $sikap_list = '';
            foreach ($sikap_array as $key => $sikap) {
                $sikap_list .= ($key + 1) . ". " . trim($sikap) .'.' ."<br>";
            }

            $sbing = '';
            foreach ($sikap_bing as $key => $sikap_b) {
                $sbing .= ($key + 1) . ". " . trim($sikap_b) .'.' ."<br>";
            }

            // Buat daftar ket_umum dengan nomor berurut
            $ket_list = '';
            foreach ($ket_array as $key => $ket_umum) {
                $ket_list .= ($key + 1) . ". " . trim($ket_umum) .'.' . "<br>";
            }

            $kbing = '';
            foreach ($ket_bing as $key => $ket_b) {
                $kbing .= ($key + 1) . ". " . trim($ket_b) .'.' . "<br>";
            }

            // Buat daftar pengetahuan dengan nomor berurut
            $peng_list = '';
            foreach ($peng_array as $key => $pengetahuan) {
                $peng_list .= ($key + 1) . ". " . trim($pengetahuan) .'.' . "<br>";
            }

            $pbing = '';
            foreach ($peng_bing as $key => $pb) {
                $pbing .= ($key + 1) . ". " . trim($pb) .'.' . "<br>";
            }
        }
    ?>
    <?php
    // Menampilkan nomor dalam kolom terpisah
    foreach ($sikap_array as $key => $sikap) { 
        $sikap_b = isset($sikap_bing[$key]) ? trim($sikap_bing[$key]) : '';
        ?>
        <tr>
            <td style=""><?= ($key + 1).'.' ?></td>
            <td style="text-align: justify"><?= trim($sikap) ?></td>
            <td></td>
            <td style="font-style: italic;"><?= ($key + 1).'.' ?></td>
            <td style="font-style: italic; text-align: justify"><?= $sikap_b ?></td>
        </tr>
    <?php } ?>

    <tr>
        <td style="padding: 3px;" colspan="5"></td>
    </tr>
    <tr style="text-align: center; font-weight: bold">
        <td></td>
        <td>Keterampilan Umum</td>
        <td></td>
        <td></td>
        <td><i>General Competence</i></td>
    </tr>
    <?php
    // Menampilkan nomor dalam kolom terpisah
    foreach ($ket_array as $key => $ket_umum) { 
        $ket_b = isset($ket_bing[$key]) ? trim($ket_bing[$key]) : '';
        ?>
        <tr style="margin-top: 0px; padding: 0px;">
            <td><?= ($key + 1).'.' ?></td>
            <td style="text-align: justify"><?= trim($ket_umum) ?></td>
            <td></td>
            <td style="font-style: italic;"><?= ($key + 1).'.' ?></td>
            <td style="font-style: italic; text-align: justify"><?= $ket_b ?></td>
        </tr>
    <?php } ?>
    <tr>
        <td style="padding: 3px;" colspan="5"></td>
    </tr>
    <tr style="text-align: center; font-weight: bold">
        <td colspan="2">Pengetahuan</td>
        <td></td>
        <td></td>
        <td><i>Knowledge</i></td>
    </tr>
    <?php
    // Menampilkan nomor dalam kolom terpisah
    foreach ($peng_array as $key => $pengetahuan) { 
        $pb = isset($peng_bing[$key]) ? trim($peng_bing[$key]) : '';
    ?>
    <tr>
        <td><?= ($key + 1).'.' ?></td>
        <td style="text-align: justify"> <?= trim($pengetahuan) ?></td>
        <td></td>
        <td style="font-style: italic;"><?= ($key + 1).'.' ?></td>
        <td style="font-style: italic;"><?= $pb ?></td>
    </tr>
    <?php } ?>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <!-- B. Aktivitas, Pestasi dan Penghargaan -->
    <tr style="font-weight: bold;">
        <td>B. </td>
        <td>Aktivitas, Prestasi dan Penghargaan</td>
        <td></td>
        <td>B. </td>
        <td><i>Activities, Achievements, and Awards</i></td>
    </tr>
    <tr style="font-weight: bold;">
        <td>1. </td>
        <td>Sertifikat Kompetensi</td>
        <td></td>
        <td>1. </td>
        <td><i>Competency Certificate</i></td>
    </tr>

    <?php
$no = 1;
$komp = mysqli_query($koneksi, "SELECT * FROM berkas_usulan WHERE catatan='-' AND kd_kompetensi='KP001' AND id_usulan='$id' ");
$startLetter = 'a';

if (mysqli_num_rows($komp) > 0) {
    mysqli_data_seek($komp, 0);
    while ($z = mysqli_fetch_array($komp) and $startLetter <= 'z') { ?>
        <tr>
            <td></td>
            <td style="padding: 0px; margin: 0px; text-align: justify">
                <?= $startLetter . '. ' . $z['deskripsi'] ?> <br>
                No. Sertifikat: <?= $z['no_sertif'] ?><br>
                URL: <a style="font-size: smaller; text-decoration: underline; color: black;" href="<?= $z['link_file'] ?>" target="_blank"><?= $z['link_file'] ?></a><br><br>
            </td>
            <td></td>
            <td></td>
            <td style="padding: 0px; margin: 0px; text-align: justify">
                <?= $startLetter . '. ' . $z['desk_bing'] ?> <br>
                Certificate Id: <?= $z['no_sertif'] ?><br>
                URL: <a style="font-size: smaller; text-decoration: underline; color: black;" href="<?= $z['link_file'] ?>" target="_blank"><?= $z['link_file'] ?></a><br><br>
            </td>
        </tr>
        <?php
        $startLetter = getNextLetter($startLetter);
        }
    } else { ?>
        <tr>
            <td></td>
            <td>-</td>
            <td></td>
            <td></td>
            <td>-</td>
        </tr>
    <?php } ?>


    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr style="font-weight: bold;">
        <td>2. </td>
        <td>Pengembangan Sikap dan Tanggung Jawab</td>
        <td></td>
        <td>2. </td>
        <td><i>Development of Attitude and Responsibility</i></td>
    </tr>
    <?php
    $no = 1;
    $komp = mysqli_query($koneksi, "SELECT * FROM berkas_usulan WHERE catatan='-' AND kd_kompetensi='KP002' AND id_usulan='$id' ");
    $startLetter = 'a';

    if (mysqli_num_rows($komp) > 0) {
        mysqli_data_seek($komp, 0);
        while ($z = mysqli_fetch_array($komp) and $startLetter <= 'z') { ?>
            <tr>
                <td></td>
                <td style="padding: 0px; margin: 0px; text-align: justify">
                    <?= $startLetter . '. ' . $z['deskripsi'] ?> <br>
                    No. Sertifikat: <?= $z['no_sertif'] ?><br>
                    URL: <a style="font-size: smaller; text-decoration: underline; color: black;" href="<?= $z['link_file'] ?>" target="_blank"><?= $z['link_file'] ?></a><br><br>
                </td>
                <td></td>
                <td></td>
                <td style="padding: 0px; margin: 0px; text-align: justify">
                    <?= $startLetter . '. ' . $z['desk_bing'] ?> <br>
                    Certificate Id: <?= $z['no_sertif'] ?><br>
                    URL: <a style="font-size: smaller; text-decoration: underline; color: black;" href="<?= $z['link_file'] ?>" target="_blank"><?= $z['link_file'] ?></a><br><br>
                </td>
            </tr>
            <?php
            $startLetter = getNextLetter($startLetter);
        }
    } else { ?>
        <tr>
            <td></td>
            <td>-</td>
            <td></td>
            <td></td>
            <td>-</td>
        </tr>
    <?php } ?>

    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr style="font-weight: bold;">
        <td>3. </td>
        <td>Prestasi dan Penghargaan</td>
        <td></td>
        <td>3. </td>
        <td><i>Achievements and Awards</i></td>
    </tr>

    <?php
    $no = 1;
    $komp = mysqli_query($koneksi, "SELECT * FROM berkas_usulan WHERE catatan='-' AND kd_kompetensi='KP003' AND id_usulan='$id' ");
    $startLetter = 'a';

    if (mysqli_num_rows($komp) > 0) {
        mysqli_data_seek($komp, 0);
        while ($z = mysqli_fetch_array($komp) and $startLetter <= 'z') { ?>
            <tr>
                <td></td>
                <td style="padding: 0px; margin: 0px; text-align: justify">
                    <?= $startLetter . '. ' . $z['deskripsi'] ?> <br>
                    No. Sertifikat: <?= $z['no_sertif'] ?><br>
                    URL: <a style="font-size: smaller; text-decoration: underline; color: black;" href="<?= $z['link_file'] ?>" target="_blank"><?= $z['link_file'] ?></a><br><br>
                </td>
                <td></td>
                <td></td>
                <td style="padding: 0px; margin: 0px; text-align: justify">
                    <?= $startLetter . '. ' . $z['desk_bing'] ?> <br>
                    Certificate Id: <?= $z['no_sertif'] ?><br>
                    URL: <a style="font-size: smaller; text-decoration: underline; color: black;" href="<?= $z['link_file'] ?>" target="_blank"><?= $z['link_file'] ?></a><br><br>
                </td>
            </tr>
            <?php
            $startLetter = getNextLetter($startLetter);
        }
    } else { ?>
        <tr>
            <td></td>
            <td>-</td>
            <td></td>
            <td></td>
            <td>-</td>
        </tr>
    <?php } ?>

    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <tr style="font-weight: bold;">
        <td>4. </td>
        <td>Pengalaman Organisasi</td>
        <td></td>
        <td>4. </td>
        <td><i>Organizational Experience</i></td>
    </tr>

    <?php
    $no = 1;
    $komp = mysqli_query($koneksi, "SELECT * FROM berkas_usulan WHERE catatan='-' AND kd_kompetensi='KP004' AND id_usulan='$id' ");
    $startLetter = 'a';

    if (mysqli_num_rows($komp) > 0) {
        mysqli_data_seek($komp, 0);
        while ($z = mysqli_fetch_array($komp) and $startLetter <= 'z') { ?>
            <tr>
                <td></td>
                <td style="padding: 0px; margin: 0px; text-align: justify">
                    <?= $startLetter . '. ' . $z['deskripsi'] ?> <br>
                    No. Sertifikat: <?= $z['no_sertif'] ?><br>
                    URL: <a style="font-size: smaller; text-decoration: underline; color: black;" href="<?= $z['link_file'] ?>" target="_blank"><?= $z['link_file'] ?></a><br><br>
                </td>
                <td></td>
                <td></td>
                <td style="padding: 0px; margin: 0px; text-align: justify">
                    <?= $startLetter . '. ' . $z['desk_bing'] ?> <br>
                    Certificate Id: <?= $z['no_sertif'] ?><br>
                    URL: <a style="font-size: smaller; text-decoration: underline; color: black;" href="<?= $z['link_file'] ?>" target="_blank"><?= $z['link_file'] ?></a><br><br>
                </td>
            </tr>
            <?php
            $startLetter = getNextLetter($startLetter);
        }
    } else { ?>
        <tr>
            <td></td>
            <td>-</td>
            <td></td>
            <td></td>
            <td>-</td>
        </tr>
    <?php } ?>


    <!-- end -->
    <tr>
        <td style="padding: 6px;" colspan="5"></td>
    </tr>
    <!--  -->
    <tr style="font-weight: bold">
        <td>4.</td>
        <td colspan="4"> INFORMASI TENTANG SISTEM PENDIDIKAN TINGGI DAN KERANGKA KUALIFIKASI NASIONAL INDONESIA</td>
    </tr>
    <tr style="font-weight: bold">
        <td>4. </td>
        <td colspan="4"><i> Information on the Indonesian Higher Education System and the Indonesian National Qualifications Framework</i></td>
    </tr>
    <tr>
        <td style="padding: 7px;" colspan="5"></td>
    </tr>
    <!-- sistem pendidikan tinggi -->
    <tr style="text-align: center; font-weight: bold">
        <td colspan="2">Sistem Pendidikan Tinggi</td>
        <td></td>
        <td colspan="2"><i>Higher Education System</i></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <div style="text-align: justify">
            Pendidikan tinggi merupakan bagian dari sistem pendidikan nasional Indonesia memiliki peran strategis dalam mencerdaskan kehidupan bangsa dan memajukan ilmu pengetahuan dan teknologi dengan memperhatikan dan menerapkan nilai humaniora serta pembudayaan dan pemberdayaan bangsa Indonesia yang berkelanjutan. </div>
        </td>
        <td></td>
        <td colspan="2">
            <div style="text-align: justify; font-style:italic">
            Higher education is part of the Indonesian national education system, which has a strategic role in educating the life of the nation and advancing science and technology by paying attention to and implementing humanities values as well as cultivating and empowering the Indonesian people in a sustainable manner. </div>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <div style="text-align: justify">
            Pendidikan tinggi adalah jenjang pendidikan setelah pendidikan menengah yang mencakup program diploma, program sarjana, program magister, program doktor, dan program profesi, serta program spesialis, yang diselenggarakan oleh perguruan tinggi berdasarkan kebudayaan bangsa Indonesia. </div>
        </td>
        <td></td>
        <td colspan="2">
            <div style="text-align: justify; font-style:italic">
            Higher education is the level of education after secondary education which includes diploma programs, bachelor programs, master programs, doctoral programs, and professional programs, as well as specialist programs, organized by universities based on Indonesian culture.
            </div>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <div style="text-align: justify">
            Pendidikan tinggi terdiri dari (1) pendidikan akademik yang terdiri dari program sarjana dan/atau program pascasarjana yang diarahkan pada penguasaan dan pengembangan cabang ilmu pengetahuan dan teknologi (2) pendidikan vokasi yaitu program yang menyiapkan mahasiswa untuk pekerjaan dengan keahlian terapan tertentu sampai program sarjana terapan yang dapat dikembangkan sampai program magister terapan atau program doktor terapan, dan (3) pendidikan profesi adalah pendidikan tinggi setelah program sarjana atau sederajat yang menyiapkan mahasiswa dalam pekerjaan yang memerlukan persyaratan keahlian khusus, serta program spesialis yang merupakan pendidikan keahlian lanjutan yang dapat bertingkat dan diperuntukan bagi lulusan program profesi yang telah berpengalaman sebagai profesional untuk mengembangkan bakat dan kemampuannya menjadi spesialis.</div>
        </td>
        <td></td>
        <td colspan="2">
            <div style="text-align: justify; font-style:italic">
            Higher education consists of (1) academic education consisting of undergraduate programs and/or postgraduate programs aimed at mastering and developing branches of science and technology (2) vocational education, namely programs that prepare students for jobs with certain applied skills up to applied undergraduate programs which can be developed to applied master's programs or applied doctoral programs, and (3) professional education is higher education after undergraduate or equivalent programs that prepare students for jobs that require special skill requirements, as well as specialist programs which are advanced skills education that can be stratified and intended for graduates of professional programs who have experience as professionals to develop their talents and abilities to become specialists.
            </div>
        </td>
    </tr>
    <!-- end sistem pendidikan tinggi -->
    <!-- KKNI -->
    <tr style="text-align: center; font-weight: bold">
        <td></td>
        <td>Kerangka Kualifikasi Nasional Indonesia (KKNI) </td>
        <td></td>
        <td colspan="2"><i>Indonesian National Qualifications Framework</i></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <div style="text-align: justify">
            Kerangka Kualifikasi Nasional Indonesia, yang selanjutnya disingkat KKNI,  adalah  kerangka   kualifikasi  kompetensi   yang  dapat menyandingkan, menyetarakan, mengintegrasikan antara bidang pendidikan dan bidang pelatihan kerja serta pengalaman kerja dalam rangka pemberian pengakuan kompetensi kerja sesuai dengan struktur pekerjaan di berbagai sektor.
            </div>
        </td>
        <td></td>
        <td colspan="2">
            <div style="text-align: justify; font-style:italic">
            The Indonesian National Qualifications Framework is a competency qualifications framework that can juxtapose, equalize, and integrate the fields of education and job training as well as work experience in the context of providing recognition of work competencies in accordance with the job structure in various sectors.
            </div>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <div style="text-align: justify">
            KKNI merupakan sistem yang berdiri sendiri dan merupakan jembatan antara sektor pendidikan dan pelatihan untuk membentuk SDM nasional berkualitas dan bersertifikat melalui skema pendidikan formal, non formal, in formal, pelatihan kerja atau pengalaman kerja. Jenjang kualifikasi adalah tingkat capaian pembelajaran yang disepakati secara nasional, disusun berdasarkan ukuran hasil pendidikan dan/atau pelatihan yang diperoleh melalui pendidikan formal, nonformal, informal, atau pengalaman kerja.
            </div>
        </td>
        <td></td>
        <td colspan="2">
            <div style="text-align: justify; font-style:italic">
            The Indonesian National Qualifications Framework is a system that stands alone and is a bridge between the education and training sectors to form quality and certified national human resources through formal, non-formal, and informal education, job training or work experience schemes. Qualification level is a nationally agreed level of learning achievement, compiled based on the measurement of the results of education and/or training obtained through formal, non-formal, informal education, or work experience.
            </div>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <div style="text-align: justify">
            KKNI terdiri atas 9 (sembilan) level/jenjang kualifikasi, dimulai dari level 1 (satu) sebagai level terendah sampai dengan level 9 (Sembilan) sebagai level tertinggi. Setiap level kualifikasi pada KKNI memiliki kesetaraan dengan capaian pembelajaran yang dihasilkan melalui pendidikan, pelatihan kerja atau pengalaman kerja seperti pada Gambar 1
            </div>
        </td>
        <td></td>
        <td colspan="2">
            <div style="text-align: justify; font-style:italic">
            The Indonesian National Qualification Framework consists of 9 (nine) qualification levels, starting from level 1 (one) as the lowest level up to level 9 (nine) as the highest level. Each qualification level is equivalent to learning outcomes resulting from education, job training or work experience as shown in Figure 1.
            </div>
        </td>
    </tr>
    <tr align="center">
        <td></td>
        <td>
            <img src="data:image/png;base64,<?= $kkni ?>" alt="kkni" width="150px"> <br>
            <div style="font-size: 8pt;">Gambar 1.Konsep KKNI</div>
        </td>
        <td></td>
        <td colspan="2">
            <img src="data:image/png;base64,<?= $kkni ?>" alt="kkni" width="150px"> <br>
            <div style="font-size: 8pt;">Figure 1. <i>Indonesian National Qualifications Framework Concepts</i></div>
        </td>
    </tr>
    <tr>
        <td style="padding: 4px;" colspan="5"></td>
    </tr>
    <tr style="font-weight: bold; text-align: center">
        <td></td>
        <td>Satuan Kredit Semester</td>
        <td></td>
        <td colspan="2"><i>Semester Credit Sistem</i></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <div style="text-align: justify; margin-top: 5px; padding: 0px">
            Satuan kredit Semester (SKS) adalah suatu sistem penyelenggaraan pendidikan dengan menggunakan satuan yang menyatakan beban studi mahasiswa, beban kerja dosen, pengalaman belajar, dan beban penyelenggaraan program. Mahasiswa mempunyai perbedaan minat, bakat, dan kemampuan yang berlainan. Oleh karena itu setiap mahasiswa mempunyai cara dan waktu untuk menyelesaikan beban studi yang diwajibkan serta komposisi kegiatan studinya tidak harus sama, meskipun mereka duduk dalam jenjang pendidikan yang sama. <br> <br>

            Perkuliahan diselenggarakan dengan sistem Satuan Kredit Semester (SKS) yang meliputi kegiatan tatap muka berjadwal, kegiatan akademik terstruktur, dan kegiatan akademik mandiri dengan distribusi (1) 50 menit kegiatan tatap muka berjadwal (2) 60 menit kegiatan akademik terstruktur dan (3) 60 menit kegiatan akademik mandiri.
            </div>
        </td>
        <td></td>
        <td colspan="2">
            <div style="text-align: justify; font-style: italic; margin-top: 0px; padding: 0px">
            A semester credit system is an education delivery system using units that express student study load, lecturer workload, learning experience, and program administration burden. Students have different interests, talents, and abilities. Therefore, every student has the method and time to complete the required study load and the composition of their study activities does not have to be the same, even though they are at the same educational level. <br> <br>

            Lectures are held on a semester credit system which includes scheduled face-to- face activities, structured academic activities, and independent academic activities with the distribution of (1) 50 minutes of scheduled face-to-face activities (2) 60 minutes of structured academic activities, and (3) 60 minutes of independent academic activities. <br><br><br>
            </div>
        </td>
    </tr>
    <tr>
        <td style="padding: 3px;" colspan="5"></td>
    </tr>
    <!-- 5. -->
    <tr style="font-weight: bold">
        <td>5. </td>
        <td colspan="5">PENGESAHAN SKPI </td>
    </tr>
    <tr style="font-weight: bold">
        <td>5. </td>
        <td colspan="5"><i>SKPI Legalization</i></td>
    </tr>
    <tr>
        <td style="padding: 2px;" colspan="5"></td>
    </tr>
    <tr>
        <td colspan="5">
            Medan, <?= tgl_indo(date("Y-m-d")) ?>
        </td>
    </tr>
    <tr>
        <td style="padding: 25px;" colspan="5"></td>
    </tr>
    <tr>
        <td colspan="5">
        <b>Parasian D. P. Silitonga, S.Kom., M.Cs., MCE., MOS.</b> <br>
        Wakil Dekan Fakultas Ilmu Komputer Universitas Katolik Santo Thomas <br>
        <i>Vice Dean of the Faculty of Computer Science, Saint Thomas Catholic University</i> <br>
        NIDN. 0025058007

        </td>
    </tr>
    <!-- end 5. -->
</table>
<hr style="margin-top: 10px;">

<table>
    <tr style="font-weight: bold;">
        <td colspan="2">Catatan Resmi :</td>
        <td>Alamat</td>
    </tr>
    <tr>
        <td colspan="2" style="width: 380px; padding-bottom : 0px">
            <ul style="padding-left: 13px; padding-top: 0px">
                <li>SKPI dikeluarkan oleh institusi pendidikan tinggi yang berwenang mengeluarkan ijazah sesuai dengan paraturan perundang-undangan yang berlaku.</li>
                <li>SKPI hanya diterbitkan setelah mahasiswa dinyatakan lulus dari suatu program studi secara resmi oleh Perguruan Tinggi.</li>
                <li>SKPI diterbitkan dalam Bahasa Indonesia dan Bahasa Inggris.</li>
                <li>SKPI yang asli diterbitkan mengunakan kertas khusus <i>(barcode/halogram security paper)</i> berlogo Perguruan Tinggi, yang diterbitkan secara khusus oleh Perguruan Tinggi. </li>
                <li>Penerima SKPI dicantumkan dalam situs resmi Perguruan Tinggi.</li>
            </ul>
        </td>
        <td style="padding-bottom: 0px;">
            <b>Contact Detail</b> <br> <br>

            <b>Universitas Katolik Santo Thomas</b> <br>
            Jln. Setia Budi No.479-F Tanjung Sari Medan <br><br>

            Telp. (+62 61) 8210161 <br>
            Fax. (+62 61) 8213269 <br>
            Website. www.ust.ac.id
        </td>
    </tr>
    <tr style="font-weight: bold;">
        <td colspan="3">Official Notes :</td>
    </tr>
    <tr>
        <td colspan="2" style="width: 380px; font-style: italic">
            <ul style="padding-left: 13px;">
                <li>This Diploma Supplement is issued by, a higher education institution authorized to issue diplomas in accordance with the applicable Laws.</li>
                <li>This Diploma Supplement is issued after the student is officially declared a graduate of a study program by the University.</li>
                <li>This Diploma Supplement is written in both Indonesian and English language.</li>
                <li>The original copy of this Diploma Supplement is on barcoded/hologram security paper, sealed with the higher education institution's logo, and issued exclusively University.</li>
                <li>The awardee of this Diploma Supplement is officially listed in the University's</li>
            </ul>
        </td>
        <td></td>
    </tr>
</table>

<?php include 'footer.php' ?>