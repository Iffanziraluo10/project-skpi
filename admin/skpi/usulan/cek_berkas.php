<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Cek Kelengkapan Berkas</h1>
                <a href="../usulan.php" class="btn btn-success mb-4"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                <?php
                $id = $_GET['id'];
                $tampil = mysqli_query($koneksi,"SELECT * FROM usulan_skpi inner join mahasiswa on usulan_skpi.id_mahasiswa=mahasiswa.id_mahasiswa where id_usulan='$id' ");
                $k = mysqli_fetch_assoc($tampil);
                ?>
                <div class="row mb-0">
                    <label class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <p class="fw-bold"><?= $k['nim'] ?></p>
                    </div>
                </div>
                <div class="row mb-0">
                    <label class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                        <p class="fw-bold"><?= $k['nama_mhs'] ?></p>
                    </div>
                </div>
                <p>Berikut Berkas yang dilampirkan :</p>
                <?php
                $no = 1;
                $query = mysqli_query($koneksi,"SELECT * FROM berkas_usulan inner join sub_kompetensi on berkas_usulan.id_sub=sub_kompetensi.id_sub inner join kompetensi on berkas_usulan.kd_kompetensi=kompetensi.kd_kompetensi where id_usulan='$id' ");
                while($d = mysqli_fetch_array($query)){
                ?>
                <div class="row mb-0">
                    <div class="fw-bold"><?= $no++.'.' ?></div>
                    <label class="col-sm-3 col-form-label">Kd Kompetensi</label>
                        <div class="col-8">
                            <div>
                                : <?= $d['kd_kompetensi'].'-'.$d['jenis_kompetensi'] ?>
                            </div>
                        </div>
                </div>

                <div class="row mb-0">
                    <label class="col-sm-3 col-form-label">Kd Sub Kompetensi</label>
                        <div class="col-8">
                            <div>
                                : <?= $d['kd_sub'].'-'.$d['nama_sub'] ?>
                            </div>
                        </div>
                </div>

                <div class="row mb-0">
                    <label class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <div>
                                : <?= $d['deskripsi']?>
                            </div>
                        </div>
                </div>

                <div class="row mb-0">
                    <label class="col-sm-3 col-form-label">No Sertifikat</label>
                        <div class="col-8">
                            <div>
                                : <?= $d['no_sertif']?>
                            </div>
                        </div>
                </div>

                <div class="row mb-0">
                    <label class="col-sm-3 col-form-label">Tingkat</label>
                        <div class="col-8">
                            <div>
                                : <?= $d['tingkat']?>
                            </div>
                        </div>
                </div>

                <div class="row mb-0">
                    <label class="col-sm-3 col-form-label">Jumlah Jam</label>
                        <div class="col-8">
                            <div>
                                : <?= $d['jumlah_jam']?>
                            </div>
                        </div>
                </div>

                <div class="row mb-0">
                    <label class="col-sm-3 col-form-label">File</label>
                        <div class="col-8">
                            <div> :
                                <?php
                                    $file = '../../../file_upload/'.$d['file'];
                                ?>
                                <a href="<?= $file ?>" class="btn btn-dark" target="_blank"><i class="fas fa-file-pdf"></i></a>
                            </div>
                        </div>
                </div>

                <div class="row mb-0">
                    <label class="col-sm-3 col-form-label">Tautan Dokumen</label>
                        <div class="col-8">
                            <div class="text-primary"> : <?= $d['link_file'] ?></div>
                        </div>
                </div>

                <div class="row mb-0">
                    <label class="col-sm-3 col-form-label">Catatan</label>
                        <div class="col-8">
                            <div class="text-danger fw-bold"> : <?= $d['catatan'] ?></div>
                        </div>
                </div>
                <hr>
                <?php
                    if($d['catatan']==null){ ?>
                        <a class="btn btn-success" href="diterima.php?id=<?= $d['id_berkas'] ?>&&id_usul=<?= $k['id_usulan'] ?>"><i class="fas fa-check"></i> Diterima</a>
                        <a class="btn btn-danger" href="ditolak.php?id=<?= $d['id_berkas'] ?>"><i class="fas fa-times"></i> Ditolak</a>
                    <?php } else if($d['catatan']!= null){ ?>
                        <span>Berkas di atas sudah siap diperiksa !!!</span>
                    <?php }
                ?>
                <hr>
                <?php } ?>
                <p>Apakah pemeriksaan sudah selesai ?</p>
                <a class="btn btn-success" href="selesai.php?id=<?= $k['id_usulan'] ?>"><i class="fas fa-check"></i> Selesai</a>
            </div>
        </div>
        </div>
    </div>
    <!-- End tabel data -->

    </section>
</main>

<?php include '../sidebar/footer.php' ?>
