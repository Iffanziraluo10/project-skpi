<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Edit Data Detail Sub Kompetensi</h1>
                <a href="../detail_sub.php" class="btn btn-success mb-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                <?php
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"SELECT * FROM detail_subkomp where id_detail = '$id' ");
                while($d=mysqli_fetch_array($data)){
                ?>
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tingkat</label>
                        <input type="hidden" class="form-control" value="<?= $d['id_detail'] ?>" readonly name="id_detail">
                        <div class="col-sm-10">
                            <select class="form-select" name="tingkat" id="tingkat" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                                <option value="0">Pilih Tingkatan</option>
                                <option <?php if($d['tingkat'] == "lokal"){echo "selected='selected'";} ?> value="lokal">Lokal</option>
                                <option <?php if($d['tingkat'] == "regional"){echo "selected='selected'";} ?> value="regional">Regional</option>
                                <option <?php if($d['tingkat'] == "nasional"){echo "selected='selected'";} ?> value="nasional">Nasional</option>
                                <option <?php if($d['tingkat'] == "internasional"){echo "selected='selected'";} ?> value="internasional">Internasional</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Bobot</label>
                        <input type="number" class="form-control" id="bobot" name="bobot" required oninvalid="this.setCustomValidity('Silahkan diisi')" step="0.01" min="0" value="<?= $d['bobot'] ?>">
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <button type="submit" name="edit" class="btn btn-primary"><i class="bi bi-pencil"></i> Perbarui</button>
                        </div>
                    </div>
                </form>
                <?php } 
                if(isset($_POST['edit'])){
                    $id_detail = $_POST['id_detail'];
                    $tingkat = $_POST['tingkat'];
                    $bobot = $_POST['bobot'];

                    $query_edit = mysqli_query($koneksi,"UPDATE detail_subkomp SET tingkat='$tingkat', bobot='$bobot' where id_detail='$id_detail' ");

                    if(!$query_edit){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil diperbarui');</script>";
                    echo "<script>document.location = '../detail_sub.php'; </script>";
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
    var selectOption = document.getElementById("kd_subkomp");
    var inputText = document.getElementById("kd_subkomp1");
    
    var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
    
    inputText.value = selectedOptionValue;
    }
</script>