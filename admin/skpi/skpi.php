<?php include 'header.php' ?>

<?php include 'navbar.php' ?>

<main id="main" class="main">
    <section class="section dashboard">
    <div class="row">
    <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Data Kompetensi SKPI</h1>
                <a href="tskpi/tambah_skpi.php" class="btn btn-primary" title="tambah_data"><i class="fas fa-plus"></i> Tambah</a>
                <table id="tabel" class="display" style="width:100%; background-color: white; color: black;">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Kode SKPI</td>
                            <td>Jenis SKPI</td>
                            <td>Sikap</td>
                            <td>Keterampilan Umum</td>
                            <td>Pengetahuan</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM skpi");
                        while($d=mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d['kode_skpi'] ?></td>
                            <td><?= $d['jenis_skpi'] ?></td>
                            <td><?= $d['sikap'] ?></td>
                            <td><?= $d['ket_umum'] ?></td>
                            <td><?= $d['pengetahuan'] ?></td>
                            <td>
                                <a class="btn btn-warning text-black" href="tskpi/edit_skpi.php?id=<?= $d['id_skpi'] ?>" title="edit_data"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger text-black" href="tskpi/hapus_skpi.php?id=<?= $d['id_skpi'] ?>" title="hapus_data"><i class="fas fa-trash"></i></a>
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