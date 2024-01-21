<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Edit Data Sub Kompetensi</h1>
                <a href="../sub_kompetensi.php" class="btn btn-success mb-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                <?php
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"SELECT * FROM sub_kompetensi where id_sub = '$id' ");
                while($d=mysqli_fetch_array($data)){
                ?>
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kd Sub Kompetensi</label>
                        <div class="col-sm-10">
                            <input type="hidden" value="<?= $d['id_sub'] ?>" name="id_sub">
                            <input type="text" class="form-control" id="kd_sub" name="kd_sub" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['kd_sub'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Sub Kompetensi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm_sub" name="nm_sub" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['nama_sub'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kd Kompetensi</label>
                        <select class="form-select" name="kd_komp" id="kd_komp" onchange="getSelectedOption()">
                            <option value="">--Silahkan Pilih--</option>
                            <?php
                            $tampil = mysqli_query($koneksi,"SELECT * FROM kompetensi");
                            while($l = mysqli_fetch_array($tampil)){
                                if($l['kd_kompetensi'] == $d['kd_kompetensi']){
                                    echo '<option value='.$l['kd_kompetensi'].' selected>'.$l['kd_kompetensi']."-".$l['jenis_kompetensi'].'</option>';
                                } else{
                                    echo '<option value='.$l['kd_kompetensi'].'>'.$l['kd_kompetensi']."-".$l['jenis_kompetensi'].'</option>';
                                }
                            }
                            ?>
                        </select>
                        <input type="hidden" name="kd_komp1" id="kd_komp1" value="<?= $d['kd_kompetensi'] ?>">
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <button type="submit" name="edit" class="btn btn-primary"><i class="bi bi-pencil"></i> Perbarui</button>
                        </div>
                    </div>
                </form>
                <?php } 
                if(isset($_POST['edit'])){
                    $id_sub = $_POST['id_sub'];
                    $kd_sub = $_POST['kd_sub'];
                    $nama_sub = $_POST['nm_sub'];
                    $kd_komp = $_POST['kd_komp1'];

                    $query_edit = mysqli_query($koneksi,"UPDATE sub_kompetensi SET kd_sub='$kd_sub', nama_sub='$nama_sub', kd_kompetensi='$kd_komp' where id_sub='$id_sub' ");

                    if(!$query_edit){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil diperbarui');</script>";
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