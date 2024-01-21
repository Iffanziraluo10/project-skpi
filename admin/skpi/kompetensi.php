<?php include 'header.php' ?>

<?php include 'navbar.php' ?>

<main id="main" class="main">
    <section class="section dashboard">
    <div class="row">
    <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Data Kompetensi</h1>
                <a href="kompetensi/tambah_komp.php" class="btn btn-primary" title="tambah_data"><i class="fas fa-plus"></i> Tambah</a>

                <table id="tabel" class="display" style="width:100%; background-color: white; color: black;">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Kd Kompetensi</td>
                            <td>Jenis Kompetensi</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM kompetensi");
                        while($d=mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d['kd_kompetensi'] ?></td>
                            <td><?= $d['jenis_kompetensi'] ?></td>
                            <td>
                                <a class="btn btn-warning text-black" href="kompetensi/edit_komp.php?id=<?= $d['id_kompetensi'] ?>" title="edit_data"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger text-black" href="kompetensi/hapus_komp.php?id=<?= $d['id_kompetensi'] ?>" title="hapus_data"><i class="fas fa-trash"></i></a>
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