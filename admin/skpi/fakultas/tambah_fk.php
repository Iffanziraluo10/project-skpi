<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Tambah Data Fakultas</h1>
                <a href="../fakultas.php" class="btn btn-success mb-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kd Fakultas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kd_fk" name="kd_fk" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Fakultas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm_fk" name="nm_fk" required oninvalid="this.setCustomValidity('Silahkan diisi')">
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
                    $kd_fk = $_POST['kd_fk'];
                    $nama_fk = $_POST['nm_fk'];

                    $query_tambah = mysqli_query($koneksi,"INSERT INTO fakultas VALUES('','".$kd_fk."','".$nama_fk."')");

                    if(!$query_tambah){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil ditambahkan');</script>";
                    echo "<script>document.location = '../fakultas.php'; </script>";
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