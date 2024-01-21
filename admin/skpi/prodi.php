<?php include 'header.php' ?>

<?php include 'navbar.php' ?>

<main id="main" class="main">
    <section class="section dashboard">
    <div class="row">
    <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Data Program Studi</h1>
                <a href="prodi/tambah_prodi.php" class="btn btn-primary" title="tambah_data"><i class="fas fa-plus"></i> Tambah</a>

                <table id="tabel" class="display" style="width:100%; background-color: white; color: black;">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Kd Prodi</td>
                            <td>Nama Prodi</td>
                            <td>Nomor SK Akreditasi</td>
                            <td>Akreditasi</td>
                            <td>Fakultas</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM prodi inner join fakultas on prodi.kd_fakultas=fakultas.kd_fakultas");
                        while($d=mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d['kd_prodi'] ?></td>
                            <td><?= $d['nama_prodi'] ?></td>
                            <td><?= $d['no_sk'] ?></td>
                            <td><?= $d['akreditasi'] ?></td>
                            <td><?= $d['nama_fakultas'] ?></td>
                            <td>
                                <a class="btn btn-warning text-black" href="prodi/edit_prodi.php?id=<?= $d['id_prodi'] ?>" title="edit_data"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger text-black" href="prodi/hapus_prodi.php?id=<?= $d['id_prodi'] ?>" title="hapus_data"><i class="fas fa-trash"></i></a>
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