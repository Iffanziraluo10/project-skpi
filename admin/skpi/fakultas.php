<?php include 'header.php' ?>

<?php include 'navbar.php' ?>

<main id="main" class="main">
    <section class="section dashboard">
    <div class="row">
    <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Data Fakultas</h1>
                <a href="fakultas/tambah_fk.php" class="btn btn-primary" title="tambah_data"><i class="fas fa-plus"></i> Tambah</a>
            
                <table id="tabel" class="display" style="width:100%; background-color: white; color: black;">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Kd Fakultas</td>
                            <td>Nama Fakultas</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM fakultas");
                        while($d=mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d['kd_fakultas'] ?></td>
                            <td><?= $d['nama_fakultas'] ?></td>
                            <td>
                                <a class="btn btn-warning text-black" href="fakultas/edit_fk.php?id=<?= $d['id_fakultas'] ?>" title="edit_data"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger text-black" href="fakultas/hapus_fk.php?id=<?= $d['id_fakultas'] ?>" title="hapus_data"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    </section>
</main>

<?php include 'footer.php' ?>