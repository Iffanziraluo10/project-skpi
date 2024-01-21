<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Edit Data Kompetensi</h1>
                <a href="../kompetensi.php" class="btn btn-success mb-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                <?php
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"SELECT * FROM kompetensi where id_kompetensi = '$id' ");
                while($d = mysqli_fetch_array($data)){
                ?>
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kd Kompetensi</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="id_komp" value="<?= $d['id_kompetensi'] ?>">
                            <input type="text" class="form-control" id="kd_komp" name="kd_komp" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['kd_kompetensi'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jenis Kompetensi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jenis_komp" name="jenis_komp" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['jenis_kompetensi'] ?>">
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
                    $id_komp = $_POST['id_komp'];
                    $kd_komp = $_POST['kd_komp'];
                    $jenis = $_POST['jenis_komp'];

                    $query_edit = mysqli_query($koneksi,"UPDATE kompetensi SET kd_kompetensi='$kd_komp', jenis_kompetensi='$jenis' where id_kompetensi='$id_komp' ");

                    if(!$query_edit){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil diperbarui');</script>";
                    echo "<script>document.location = '../kompetensi.php'; </script>";
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