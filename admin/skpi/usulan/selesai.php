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
                $tampil = mysqli_query($koneksi,"SELECT * FROM berkas_usulan inner join usulan_skpi on berkas_usulan.id_usulan=usulan_skpi.id_usulan inner join mahasiswa on usulan_skpi.id_mahasiswa=mahasiswa.id_mahasiswa where berkas_usulan.id_usulan='$id' ");
                $k = mysqli_fetch_assoc($tampil);
            ?>
            <div class="card-body">
                <h1 class="card-title fs-3">Kesimpulan</h1>
                <a href="cek_berkas.php?id=<?= $id ?>" class="btn btn-success mb-4"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                
                <form action="" method="POST" autocomplete="off">
                    <div class="row mb-3">
                        <input type="hidden" value="<?= $k['id_usulan'] ?>" name="id_usulan">
                        <label class="col-sm-2 col-form-label">Usulan tersebut ?</label>
                        <!-- id -->
                        <div class="col-sm-10">
                            <select class="form-select" name="status" id="status">
                                <option value="">--Pilih--</option>
                                <option value="1">Diterima</option>
                                <option value="2">Ditolak</option>
                            </select>
                        </div>
                    </div>
                    <?php
                        // nomor skpi
                        $query = "SELECT MAX(no_skpi) AS last_number FROM usulan_skpi";
                        $result = mysqli_query($koneksi, $query);
                        $row = mysqli_fetch_assoc($result);
                        $lastNumber = $row['last_number'];

                        // 2. Menghasilkan Nomor Baru
                        $newNumber = $lastNumber + 1;
                    ?>
                    
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tulis Nomor SKPI</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control bg-light" name="noskpi" value="<?= $newNumber ?>" readonly>
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
                    $id = $_POST['id_usulan'];
                    $status = $_POST['status'];
                    $noskpi = $_POST['noskpi'];

                    $query_edit = mysqli_query($koneksi,"UPDATE usulan_skpi SET status_usulan='$status', no_skpi='$noskpi' where id_usulan='$id' ");

                    if(!$query_edit){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil');</script>";
                    echo "<script>document.location = '../usulan.php'; </script>";
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
