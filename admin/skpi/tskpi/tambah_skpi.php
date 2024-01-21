<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Tambah Data Kompetensi SKPI</h1>
                <a href="../skpi.php" class="btn btn-success mb-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kode SKPI</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_skpi" name="kode_skpi" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jenis SKPI</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jenis_skpi" name="jenis_skpi" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Sikap</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="sikap" id="sikap" cols="30" rows="10"></textarea>
                            <p class="fs-6"><i>Contoh penulisan : Point 1., Point 2., Point 3 dll</i></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label text-danger">Sikap (B.Inggris)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="sikap_bing" id="sikap_bing" cols="30" rows="10"></textarea>
                            <p class="fs-6"><i>Contoh penulisan : Point 1., Point 2., Point 3 dll</i></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Keterampilan Umum</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="ket_umum" id="ket_umum" cols="30" rows="10"></textarea>
                            <p class="fs-6"><i>Contoh penulisan : Point 1., Point 2., Point 3 dll</i></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label text-danger">Keterampilan Umum (B.Inggris)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="ket_bing" id="ket_bing" cols="30" rows="10"></textarea>
                            <p class="fs-6"><i>Contoh penulisan : Point 1., Point 2., Point 3 dll</i></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Pengetahuan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="peng" id="peng" cols="30" rows="10"></textarea>
                            <p class="fs-6"><i>Contoh penulisan : Point 1., Point 2., Point 3 dll</i></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label text-danger">Pengetahuan (B.Inggris)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="peng_bing" id="peng_bing" cols="30" rows="10"></textarea>
                            <p class="fs-6"><i>Contoh penulisan : Point 1., Point 2., Point 3 dll</i></p>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <button type="submit" name="tambah" class="btn btn-primary"><i class="bi bi-send"></i> Kirim</button>
                        </div>
                    </div>
                </form>
                <?php
                if(isset($_POST['tambah'])){
                    $kode = $_POST['kode_skpi'];
                    $jenis = $_POST['jenis_skpi'];
                    $sikap = $_POST['sikap'];
                    $sb = $_POST['sikap_bing'];
                    $umum = $_POST['ket_umum'];
                    $ub = $_POST['ket_bing'];
                    $peng = $_POST['peng'];
                    $pb = $_POST['peng_bing'];

                    $query_tambah = mysqli_query($koneksi,"INSERT INTO skpi VALUES('','".$kode."','".$jenis."','".$sikap."','".$sb."','".$umum."','".$ub."','".$peng."','".$pb."' )");

                    if(!$query_tambah){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil ditambahkan');</script>";
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