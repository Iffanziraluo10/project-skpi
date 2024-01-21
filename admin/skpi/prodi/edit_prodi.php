<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Edit Data Prodi</h1>
                <a href="../prodi.php" class="btn btn-success mb-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                <?php
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"SELECT * FROM prodi where id_prodi = '$id' ");
                while($d=mysqli_fetch_array($data)){
                ?>
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kd Prodi</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id_prodi" name="id_prodi" value="<?= $d['id_prodi'] ?>">
                            <input type="text" class="form-control" id="kd_prodi" name="kd_prodi" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['kd_prodi'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Program Studi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm_prodi" name="nm_prodi" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['nama_prodi'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nomor SK Akreditasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_sk" name="no_sk" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['no_sk'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label"> Akreditasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="akreditasi" name="akreditasi" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['akreditasi'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="fk" id="fk" onchange="getSelectedOption()">
                                    <option value="">--Silahkan Pilih--</option>
                                    <?php
                                    $tampil = mysqli_query($koneksi,"SELECT * FROM fakultas");
                                    while($l=mysqli_fetch_array($tampil)){
                                        if($l['kd_fakultas'] == $d['kd_fakultas']){
                                            echo '<option value='.$l['kd_fakultas'].' selected>'.$l['nama_fakultas'].'</option>';
                                        } else{
                                            echo '<option value='.$l['kd_fakultas'].'>'.$l['nama_fakultas'].'</option>';
                                        }
                                    }
                                    ?>
                            </select>
                            <input type="hidden" name="kd_fk" id="kd_fk" value="<?= $d['kd_fakultas'] ?>">
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
                    $id_prodi = $_POST['id_prodi'];
                    $kd_fk = $_POST['kd_fk'];
                    $kd_prodi = $_POST['kd_prodi'];
                    $nama_prodi = $_POST['nm_prodi'];
                    $sk = $_POST['no_sk'];
                    $ak = $_POST['akreditasi'];

                    $query_edit = mysqli_query($koneksi,"UPDATE prodi SET kd_prodi='$kd_prodi', nama_prodi='$nama_prodi', no_sk='$sk', akreditasi='$ak', kd_fakultas='$kd_fk' where id_prodi='$id_prodi' ");

                    if(!$query_edit){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil diperbarui');</script>";
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

<?php include '../sidebar/footer.php' ?>
<script>
    function getSelectedOption() {
    var selectOption = document.getElementById("fk");
    var inputText = document.getElementById("kd_fk");
    
    var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
    
    inputText.value = selectedOptionValue;
    }
</script>