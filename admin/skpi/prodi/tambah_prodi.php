<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Tambah Data Prodi</h1>
                <a href="../prodi.php" class="btn btn-success mb-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kd Prodi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kd_prodi" name="kd_prodi" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Program Studi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm_prodi" name="nm_prodi" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nomor SK Akreditasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_sk" name="no_sk" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Akreditasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="akreditasi" name="akreditasi" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="fk" id="fk" onchange="getSelectedOption()">
                                <option value="">--Silahkan Pilih--</option>
                                <?php
                                $query = "SELECT * FROM fakultas ";
                                $result = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo $row['kd_fakultas']; ?>"><?php echo $row['nama_fakultas']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <input type="text" name="kd_fk" id="kd_fk">
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
                    $kd_prodi = $_POST['kd_prodi'];
                    $sk = $_POST['no_sk'];
                    $nama_prodi = $_POST['nm_prodi'];
                    $ak = $_POST['akreditasi'];

                    $query_tambah = mysqli_query($koneksi,"INSERT INTO prodi VALUES('','".$kd_prodi."','".$nama_prodi."','".$sk."','".$ak."','".$kd_fk."')");

                    if(!$query_tambah){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil ditambahkan');</script>";
                    echo "<script>document.location = '../prodi.php'; </script>";
                }
                ?>
            </div>
        </div>
        </div>
    </div>
    <!-- End tabel data -->

    </section>
</main>
<script>
    function getSelectedOption() {
    var selectOption = document.getElementById("fk");
    var inputText = document.getElementById("kd_fk");
    
    var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
    
    inputText.value = selectedOptionValue;
    }
</script>

<?php include '../sidebar/footer.php' ?>