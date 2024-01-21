<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Edit Data Kompetensi SKPI</h1>
                <a href="../skpi.php" class="btn btn-success mb-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                <?php
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"SELECT * FROM skpi where id_skpi = '$id' ");
                while($d=mysqli_fetch_array($data)){
                ?>
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kode SKPI</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id_skpi2" name="id_skpi2" value="<?= $d['id_skpi'] ?>">
                            <input type="text" class="form-control" id="kd_skpi" name="kd_skpi" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['kode_skpi'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jenis SKPI</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jenis_skpi" name="jenis_skpi" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['jenis_skpi'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Sikap</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="sikap" id="sikap" cols="30" rows="10" required oninvalid="this.setCustomValidity('Silahkan diisi')"><?= $d['sikap'] ?></textarea>
                            <p class="fs-6"><i>Contoh penulisan : Point 1., Point 2., Point 3 dll</i></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Sikap (B.Inggris)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="sb" id="sb" cols="30" rows="10" required oninvalid="this.setCustomValidity('Silahkan diisi')"><?= $d['sikap_bing'] ?></textarea>
                            <p class="fs-6"><i>Contoh penulisan : Point 1., Point 2., Point 3 dll</i></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Keterampilan Umum</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="ket_umum" id="ket_umum" cols="30" rows="10" required oninvalid="this.setCustomValidity('Silahkan diisi')"><?= $d['ket_umum'] ?></textarea>
                            <p class="fs-6"><i>Contoh penulisan : Point 1., Point 2., Point 3 dll</i></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Keterampilan Umum (B.Inggris)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="kb" id="kb" cols="30" rows="10" required oninvalid="this.setCustomValidity('Silahkan diisi')"><?= $d['ket_bing'] ?></textarea>
                            <p class="fs-6"><i>Contoh penulisan : Point 1., Point 2., Point 3 dll</i></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Pengetahuan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="pengetahuan" id="pengetahuan" cols="30" rows="10" required oninvalid="this.setCustomValidity('Silahkan diisi')"><?= $d['pengetahuan'] ?></textarea>
                            <p class="fs-6"><i>Contoh penulisan : Point 1., Point 2., Point 3 dll</i></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Pengetahuan (B.Inggris)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="pb" id="pb" cols="30" rows="10" required oninvalid="this.setCustomValidity('Silahkan diisi')"><?= $d['peng_bing'] ?></textarea>
                            <p class="fs-6"><i>Contoh penulisan : Point 1., Point 2., Point 3 dll</i></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <button type="submit" name="edit" class="btn btn-primary"><i class="bi bi-pencil"></i> Perbarui</button>
                        </div>
                    </div>
                </form>
                <?php } 
                if(isset($_POST['edit'])){
                    $id_skpi = $_POST['id_skpi2'];
                    $kode = $_POST['kd_skpi'];
                    $jenis = $_POST['jenis_skpi'];
                    $sikap = $_POST['sikap'];
                    $sb = $_POST['sb'];
                    $umum = $_POST['ket_umum'];
                    $kb = $_POST['kb'];
                    $peng = $_POST['pengetahuan'];
                    $pb = $_POST['pb'];

                    $query_edit = mysqli_query($koneksi,"UPDATE skpi SET kode_skpi='$kode', jenis_skpi='$jenis', sikap='$sikap', sikap_bing='$sb', ket_umum='$umum', ket_bing='$kb', pengetahuan='$peng', peng_bing='$pb' where id_skpi='$id_skpi' ");

                    if(!$query_edit){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil diperbarui');</script>";
                    echo "<script>document.location = '../skpi.php'; </script>";
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