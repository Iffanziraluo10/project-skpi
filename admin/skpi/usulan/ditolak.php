<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <?php
                $id = $_GET['id'];
                $tampil = mysqli_query($koneksi,"SELECT * FROM berkas_usulan where id_berkas='$id' ");
                $k = mysqli_fetch_assoc($tampil);
            ?>
            <div class="card-body">
                <h1 class="card-title fs-3">Berkas Ditolak</h1>
                <a href="cek_berkas.php?id=<?= $k['id_usulan'] ?>" class="btn btn-success mb-4"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                
                <form action="" method="POST">
                <div class="row mb-0">
                    <!-- id -->
                    <input type="hidden" value="<?= $k['id_berkas'] ?>" name="id_berkas">
                    <label class="col-sm-2 col-form-label">Buat Catatan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="catatan" id="catatan" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" name="edit" class="btn btn-primary"><i class="bi bi-telegram"></i> Kirim</button>
                    </div>
                </div>

                </form>
                <?php
                if(isset($_POST['edit'])){
                    $id = $_POST['id_berkas'];
                    $catatan = $_POST['catatan'];

                    $query_edit = mysqli_query($koneksi,"UPDATE berkas_usulan SET catatan='$catatan' where id_berkas='$id' ");

                    if(!$query_edit){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil diubah');</script>";
                    echo "<script>document.location = 'cek_berkas.php?id=".$k['id_usulan']."'; </script>";
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
