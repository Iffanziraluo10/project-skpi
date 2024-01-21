<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Tambah Data Sub Kompetensi</h1>
                <a href="../sub_kompetensi.php" class="btn btn-success mb-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kd Sub Kompetensi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kd_sub" name="kd_sub" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Sub Kompetensi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm_sub" name="nm_sub" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kd Kompetensi</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="kd_komp" id="kd_komp" onchange="getSelectedOption()">
                                <option value="">--Silahkan Pilih--</option>
                                <?php
                                $query = "SELECT * FROM kompetensi ";
                                $result = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo $row['kd_kompetensi']; ?>"><?php echo $row['kd_kompetensi'].'-'.$row['jenis_kompetensi']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <input type="hidden" name="kd_komp1" id="kd_komp1">
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
                    $kd_sub = $_POST['kd_sub'];
                    $nama_sub = $_POST['nm_sub'];
                    $kd_komp = $_POST['kd_komp1'];

                    $query_tambah = mysqli_query($koneksi,"INSERT INTO sub_kompetensi VALUES('','".$kd_sub."','".$nama_sub."','".$kd_komp."')");

                    if(!$query_tambah){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil ditambahkan');</script>";
                    echo "<script>document.location = '../sub_kompetensi.php'; </script>";
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
<script>
    function getSelectedOption() {
    var selectOption = document.getElementById("kd_komp");
    var inputText = document.getElementById("kd_komp1");
    
    var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
    
    inputText.value = selectedOptionValue;
    }
</script>