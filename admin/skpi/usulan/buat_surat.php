<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>
<style>
table, td {
  border: 1px solid black;
}
</style>
<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <?php
                $id = $_GET['id'];
                $id_jenis = $_GET['id_jenis'];
                $tampil = mysqli_query($koneksi,"SELECT * FROM usulan_skpi inner join mahasiswa on usulan_skpi.id_mahasiswa=mahasiswa.id_mahasiswa inner join prodi on mahasiswa.kd_prodi=prodi.kd_prodi where id_usulan='$id' ");
                $k = mysqli_fetch_assoc($tampil);
            ?>
            <div class="card-body">
                <h1 class="card-title fs-3">Preview SKPI</h1>
                <a href="../usulan.php" class="btn btn-success mb-4"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                
                <!-- Surat Preview -->
                <!-- header -->
                <div class="text-end">
                    <p>Nomor : <?= $k['no_skpi'] ?></p>
                </div>
                <!-- judul -->
                <div class="text-center">
                    <img src="../images/UNIKA.png" alt="logo" width="70px">
                    <div class="fs-4"><b>UNIVERSITAS KATOLIK SANTO THOMAS</b></div>
                        <b>
                        <div>Terakreditasi BAIK</div>
                        <div>Berdasarkan Surat Keputusan Badan Akreditasi Nasional Perguruan Tinggi</div>
                        <div>Nomor : 960/SK/BAN-PT/Ak.Ppj/PT/XI/2023</div>
                        <div class="mt-4 fs-5">
                            SURAT KETERANGAN PENDAMPING IJAZAH <br>
                            DIPLOMA SUPPLEMENT
                            <hr>
                        </div>
                        </b>
                </div>
                <p class="fw-bold mb-0">1. INFORMASI TENTANG IDENTITAS DIRI PEMEGANG SKPI</p>
                <p class="fw-bold fst-italic">1. Information Identifying the Holder of the Diploma Supplement</p>
                <!-- end header -->
                <table>
                    <!-- isi -->
                    <tr>
                        <td colspan="2" style="width: 220px;">
                            Nama Lengkap <br>
                            <i>Full Name</i>
                        </td>
                        <td style="border: 1px solid; width: 700px" colspan="3">
                            <?= $k['nama_mhs'] ?> <br>
                            <?= $k['nama_mhs'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
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
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Nomor Induk Mahasiswa <br>
                            <i>Student ID Number</i>
                        </td>
                        <td style="border: 1px solid;" colspan="3">
                            <?= $k['nim'] ?> <br>
                            <?= $k['nim'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Nomor SKPI <br>
                            <i>SKPI Number</i>
                        </td>
                        <td style="border: 1px solid; width: 50px">
                            <?= $k['no_skpi'] ?> <br>
                            <?= $k['no_skpi'] ?>
                        </td>
                        <td style="width: 20px;">
                            Nomor Ijazah Nasional <br>
                            <i>National Sertifice Number</i>
                        </td>
                        <td style="border: 1px solid; width: 5px">
                            <?= $k['no_ijazah'] ?> <br>
                            <?= $k['no_ijazah'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Tanggal Mulai Studi <br>
                            Date of Starting Studi
                        </td>
                        <?php
                            $tgl = '2019-09-01';
                            $tgl_masuk = date("F d, Y", strtotime($tgl))
                        ?>
                        <td style="border: 1px solid;">
                            1 September 2019 <br>
                            <?= $tgl_masuk ?>
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
                            <?= $lulus_us ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Program Studi <br>
                            <i>Study Program</i>
                        </td>
                        <?php
                        $textInEnglish = translateToEnglish($k['nama_prodi'])
                        ?>
                        <td style="border: 1px solid; " colspan="3">
                            <?= $k['nama_prodi'] ?> <br>
                            <?= $textInEnglish ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Peringkat Akreditas Program Studi <br>
                            <i>Study Program Accreditation Rating</i>
                        </td>
                        <td style="border: 1px solid;" colspan="3">
                            <?= $k['akreditasi'] ?> <br> <?= $k['akreditasi'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            No. SK Akreditas Program Studi <br>
                            <i>Accredited Number</i>
                        </td>
                        <td style="border: 1px solid;" colspan="3">
                            <?= $k['no_sk'] ?> <br>
                            <?= $k['no_sk'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Gelar yang diberikan <br>
                            <i>Awarded Degree</i>
                        </td>
                        <td style="border: 1px solid;" colspan="3">
                            <?= $k['gelar'] ?> <br>
                            <?= $k['gelar'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Bahasa Pengantar <br>
                            <i>Language of Instruction</i>
                        </td>
                        <td style="border: 1px solid;" colspan="3">
                            Indonesia <br>
                            Indonesia
                        </td>
                    </tr>
                </table>
                <p class="fw-bold mb-0 mt-4">2. INFORMASI TENTANG LEVEL KUALIFIKASI</p>
                <p class="fw-bold fst-italic">2. Information on the Level Qualification</p>
                <table>
                    <tr>
                        <td colspan="2">
                            Jenis Pendidikan <br>
                            <i>Type of Education</i>
                        </td>
                        <td style="border: 1px solid;" colspan="3">
                            Akademik <br> Academic
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Program <br>
                            <i>Program</i>
                        </td>
                        <td style="border: 1px solid;" colspan="3">
                            Sarjana (S1) <br>
                            Bachelor
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Sistem Penilaian <br>
                            <i>Grading System</i>
                        </td>
                        <td style="border: 1px solid;" colspan="3">
                            1-4 : A = 4; B+ = 3,5; B = 3; C+ = 2,5; C = 2; D = 1; E = 0 <br> 1-4 : A = 4; B+ = 3,5; B = 3; C+ = 2,5; C = 2; D = 1; E = 0
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Jenjang Kualifikasi Sesuai KKNI <br>
                            <i>Level of Qualification in the National <br> Qualification Framework</i>
                        </td>
                        <td style="border: 1px solid;" colspan="3">
                            Level Enam <br> Level Six
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Program Pendidikan Tingkat Lanjut <br>
                            <i>Access to Future Study</i>
                        </td>
                        <td style="border: 1px solid;" colspan="3">
                            Program Master dan Doktoral <br>
                            <i>Master and Doctoral Program</i>
                        </td>
                    </tr>
                </table>
                <p class="fw-bold mb-0 mt-4">3. INFORMASI TENTANG KUALIFIKASI DAN HASIL YANG DICAPAI</p>
                <p class="fw-bold fst-italic">3. Information Identifying the Qualification and Outcomes Obtained</p>
                <table >
                    <tr class="fw-bold">
                        <td style="width: 0px;">A.</td>
                        <td style="text-align: left;"> Capaian Pembelajaran</td>
                        <td style="width: 0px;">A.</td>
                        <td> Learning Outcomes</td>
                    </tr>
                    <tr class="fw-bold" style="text-align: center;">
                        <td colspan="2">Sikap</td>
                        <td></td>
                        <td colspan="2"><i>Proposition Of Attitudes</i></td>
                    </tr>
                    <!-- translate -->
                    <?php
                        $no = 1;
                        $query_skpi = mysqli_query($koneksi, "SELECT * FROM skpi where kode_skpi='$id_jenis' ");

                        while($w = mysqli_fetch_array($query_skpi)){
                            $sikap_array = explode('.,', $w['sikap']);
                            $ket_array = explode('.,', $w['ket_umum']);
                            $peng_array = explode('.,', $w['pengetahuan']);

                            // Buat daftar sikap dengan nomor berurut
                            $sikap_list = '';
                            foreach ($sikap_array as $key => $sikap) {
                                $sikap_list .= ($key + 1) . ". " . trim($sikap) .'.' ."<br>";
                            }

                            // Buat daftar ket_umum dengan nomor berurut
                            $ket_list = '';
                            foreach ($ket_array as $key => $ket_umum) {
                                $ket_list .= ($key + 1) . ". " . trim($ket_umum) .'.' . "<br>";
                            }

                            // Buat daftar pengetahuan dengan nomor berurut
                            $peng_list = '';
                            foreach ($peng_array as $key => $pengetahuan) {
                                $peng_list .= ($key + 1) . ". " . trim($pengetahuan) .'.' . "<br>";
                            }
                        }
                    ?>
                    <tr>
                        <td colspan="2" style="width: 450px;"> <?= $sikap_list ?></td>
                        <td></td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr class="fw-bold" style="text-align: center;">
                        <td colspan="2">Ketrampilan Umum</td>
                        <td></td>
                        <td colspan="2"><i>General Competence</i></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="width: 450px;"><?= $ket_list ?></td>
                        <td></td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <tr class="fw-bold" style="text-align: center;">
                        <td colspan="2">Pengetahuan</td>
                        <td></td>
                        <td colspan="2"><i>Knowledge</i></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="width: 450px;"><?= $peng_list ?></td>
                        <td></td>
                        <td colspan="2"></td>
                    </tr>
                    <!-- B. Aktivitas, Pestasi dan Penghargaan -->
                    <!-- end -->
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <!--  -->
                    <tr class="fw-bold">
                        <td>4.</td>
                        <td colspan="4"> INFORMASI TENTANG SISTEM PENDIDIKAN TINGGI DAN KERANGKA KUALIFIKASI NASIONAL INDONESIA</td>
                    </tr>
                    <tr class="fw-bold">
                        <td>4. </td>
                        <td colspan="4"><i> Information on the Indonesian Higher Education System and the Indonesian National Qualifications Framework</i></td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" colspan="5"></td>
                    </tr>
                    <!-- sistem pendidikan tinggi -->
                    <tr class="fw-bold" style="text-align: center;">
                        <td colspan="2">Sistem Pendidikan Tinggi</td>
                        <td></td>
                        <td colspan="2"><i>Higher Education System</i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="width: 450px;">
                            <div style="text-align: justify">
                            Pendidikan tinggi merupakan bagian dari sistem pendidikan nasional Indonesia memiliki peran strategis dalam mencerdaskan kehidupan bangsa dan memajukan ilmu pengetahuan dan teknologi dengan memperhatikan dan menerapkan nilai humaniora serta pembudayaan dan pemberdayaan bangsa Indonesia yang berkelanjutan. </div>
                        </td>
                        <td></td>
                        <td>
                            <div style="text-align: justify">
                            Higher education is part of the Indonesian national education system, which has a strategic role in educating the life of the nation and advancing science and technology by paying attention to and implementing humanities values as well as cultivating and empowering the Indonesian people in a sustainable manner. </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="width: 450px;">
                            <div style="text-align: justify">
                            Pendidikan tinggi adalah jenjang pendidikan setelah pendidikan menengah yang mencakup program diploma, program sarjana, program magister, program doktor, dan program profesi, serta program spesialis, yang diselenggarakan oleh perguruan tinggi berdasarkan kebudayaan bangsa Indonesia. </div>
                        </td>
                        <td></td>
                        <td>
                            <div style="text-align: justify">
                            Higher education is the level of education after secondary education which includes diploma programs, bachelor programs, master programs, doctoral programs, and professional programs, as well as specialist programs, organized by universities based on Indonesian culture.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="width: 450px;">
                            <div style="text-align: justify">
                            Pendidikan tinggi terdiri dari (1) pendidikan akademik yang terdiri dari program sarjana dan/atau program pascasarjana yang diarahkan pada penguasaan dan pengembangan cabang ilmu pengetahuan dan teknologi (2) pendidikan vokasi yaitu program yang menyiapkan mahasiswa untuk pekerjaan dengan keahlian terapan tertentu sampai program sarjana terapan yang dapat dikembangkan sampai program magister terapan atau program doktor terapan, dan (3) pendidikan profesi adalah pendidikan tinggi setelah program sarjana atau sederajat yang menyiapkan mahasiswa dalam pekerjaan yang memerlukan persyaratan keahlian khusus, serta program spesialis yang merupakan pendidikan keahlian lanjutan yang dapat bertingkat dan diperuntukan bagi lulusan program profesi yang telah berpengalaman sebagai profesional untuk mengembangkan bakat dan kemampuannya menjadi spesialis.</div>
                        </td>
                        <td></td>
                        <td>
                            <div style="text-align: justify">
                            Higher education consists of (1) academic education consisting of undergraduate programs and/or postgraduate programs aimed at mastering and developing branches of science and technology (2) vocational education, namely programs that prepare students for jobs with certain applied skills up to applied undergraduate programs which can be developed to applied master's programs or applied doctoral programs, and (3) professional education is higher education after undergraduate or equivalent programs that prepare students for jobs that require special skill requirements, as well as specialist programs which are advanced skills education that can be stratified and intended for graduates of professional programs who have experience as professionals to develop their talents and abilities to become specialists.
                            </div>
                        </td>
                    </tr>
                    <!-- end sistem pendidikan tinggi -->
                    <!-- KKNI -->
                    <tr class="fw-bold" style="text-align: center;">
                        <td colspan="2">Kerangka Kualifikasi Nasional Indonesia (KKNI) </td>
                        <td></td>
                        <td colspan="2"><i>Indonesian National Qualifications Framework</i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="width: 450px;">
                            <div style="text-align: justify">
                            Kerangka Kualifikasi Nasional Indonesia, yang selanjutnya disingkat KKNI,  adalah  kerangka   kualifikasi  kompetensi   yang  dapat menyandingkan, menyetarakan, mengintegrasikan antara bidang pendidikan dan bidang pelatihan kerja serta pengalaman kerja dalam rangka pemberian pengakuan kompetensi kerja sesuai dengan struktur pekerjaan di berbagai sektor.
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div style="text-align: justify">
                            The Indonesian National Qualifications Framework is a competency qualifications framework that can juxtapose, equalize, and integrate the fields of education and job training as well as work experience in the context of providing recognition of work competencies in accordance with the job structure in various sectors.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="width: 450px;">
                            <div style="text-align: justify">
                            KKNI merupakan sistem yang berdiri sendiri dan merupakan jembatan antara sektor pendidikan dan pelatihan untuk membentuk SDM nasional berkualitas dan bersertifikat melalui skema pendidikan formal, non formal, in formal, pelatihan kerja atau pengalaman kerja. Jenjang kualifikasi adalah tingkat capaian pembelajaran yang disepakati secara nasional, disusun berdasarkan ukuran hasil pendidikan dan/atau pelatihan yang diperoleh melalui pendidikan formal, nonformal, informal, atau pengalaman kerja.
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div style="text-align: justify">
                            The Indonesian National Qualifications Framework is a system that stands alone and is a bridge between the education and training sectors to form quality and certified national human resources through formal, non-formal, and informal education, job training or work experience schemes. Qualification level is a nationally agreed level of learning achievement, compiled based on the measurement of the results of education and/or training obtained through formal, non-formal, informal education, or work experience.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="width: 450px;">
                            <div style="text-align: justify">
                            KKNI terdiri atas 9 (sembilan) level/jenjang kualifikasi, dimulai dari level 1 (satu) sebagai level terendah sampai dengan level 9 (Sembilan) sebagai level tertinggi. Setiap level kualifikasi pada KKNI memiliki kesetaraan dengan capaian pembelajaran yang dihasilkan melalui pendidikan, pelatihan kerja atau pengalaman kerja seperti pada Gambar 1
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div style="text-align: justify">
                            The Indonesian National Qualification Framework consists of 9 (nine) qualification levels, starting from level 1 (one) as the lowest level up to level 9 (nine) as the highest level. Each qualification level is equivalent to learning outcomes resulting from education, job training or work experience as shown in Figure 1.
                            </div>
                        </td>
                    </tr>
                    <tr align="center">
                        <td></td>
                        <td>
                            <img src="../images/gambar_kkni.jpg" alt="kkni" width="90px"> <br>
                            <div style="font-size: small;">Gambar 1.Konsep KKNI</div>
                        </td>
                        <td></td>
                        <td>
                            <img src="../images/gambar_kkni.jpg" alt="kkni" width="90px"> <br>
                            Figure 1. <i>Indonesian National Qualifications Framework Concepts</i>
                        </td>
                    </tr>
                    

                </table>

            </div>
        </div>
        </div>
    </div>
    <!-- End tabel data -->

    </section>
</main>

<?php include '../sidebar/footer.php' ?>
