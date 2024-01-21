<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Edit Data Fakultas</h1>
                <a href="../fakultas.php" class="btn btn-success mb-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                <?php
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"SELECT * FROM fakultas where id_fakultas = '$id' ");
                while($d=mysqli_fetch_array($data)){
                ?>
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kd Fakultas</label>
                        <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_fk" name="id_fk" value="<?= $d['id_fakultas'] ?>">
                        <input type="text" class="form-control" id="kd_fk" name="kd_fk" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['kd_fakultas'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Fakultas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm_fk" name="nm_fk" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['nama_fakultas'] ?>">
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
                    $id_fk = $_POST['id_fk'];
                    $kd_fk = $_POST['kd_fk'];
                    $nama_fk = $_POST['nm_fk'];

                    $query_edit = mysqli_query($koneksi,"UPDATE fakultas SET kd_fakultas='$kd_fk', nama_fakultas='$nama_fk' where id_fakultas='$id_fk' ");

                    if(!$query_edit){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil diperbarui');</script>";
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