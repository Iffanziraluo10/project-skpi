<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Buat Usulan</h1>
                <a href="../buat_skpi.php" class="btn btn-success mb-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                
                <?php
                $tampil = mysqli_query($koneksi,"SELECT * FROM usulan_skpi where id_mahasiswa='$idm'");
                $ambil = mysqli_fetch_assoc($tampil);

                    if(mysqli_num_rows($tampil) > 0){ ?>
                        
                        <div class='row mb-3'>
                        <?php
                            if($ambil['status_usulan']==0){ ?>
                                <span class="alert alert-warning">Usulan anda diproses <i class="fas fa-sync-alt"></i></span>
                            <?php } else if($ambil['status_usulan']==1){ ?>
                                <span class="alert alert-success">Usulan telah selesai <i class="fas fa-check"></i></span>
                            <?php } else if($ambil['status_usulan']==2){ ?>
                                <span class="alert alert-danger">Usulan Ditolak <i class="fas fa-times"></i></span>
                            <?php }
                        ?>
                        </div>
                        
                        
                <?php } else { 
                ?>
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-0">
                        <label class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <p class="fw-bold"><?= $nim ?></p>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <label class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-10">
                            <p class="fw-bold"><?= $nama_mhs ?></p>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <label class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-10">
                            <p class="fw-bold"><?= $prodi ?></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Pengusulan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control bg-light" name="tgl" value="<?= tgl_indo(date("Y-m-d")) ?>" required readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <button type="submit" name="tambah" class="btn btn-primary"><i class="bi bi-send"></i> Lanjutkan</button>
                        </div>
                    </div>
                </form>
                <?php }
                if(isset($_POST['tambah'])){
                    
                    $tgl = $_POST['tgl'];
                    $tanggal1 = date('Y-m-d');
                    
                    $query_tambah = mysqli_query($koneksi,"INSERT INTO usulan_skpi VALUES('','".$idm."',0,'".$tanggal1."','','')");

                    if(mysqli_affected_rows($koneksi) > 0){
                        echo "<script>alert('Berhasil diusulkan');</script>";
                        echo "<script>document.location = 'berkas.php'; </script>";
                    } else {
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
                }
                ?>
            </div>
        </div>
        </div>
    </div>
    <!-- End tabel data -->

    </section>
</main>

<?php include '../sidebar/footer.php' ?>