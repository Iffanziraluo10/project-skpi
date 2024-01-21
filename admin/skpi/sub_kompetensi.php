<?php include 'header.php' ?>

<?php include 'navbar.php' ?>

<main id="main" class="main">
    <section class="section dashboard">
    <div class="row">
    <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Data Sub Kompetensi</h1>
                <a href="sub_komp/tambah_sub.php" class="btn btn-primary" title="tambah_data"><i class="fas fa-plus"></i> Tambah</a>

                <table id="tabel" class="display" style="width:100%; background-color: white; color: black;">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Kd Sub Kompetensi</td>
                            <td>Nama Sub Kompetensi</td>
                            <td>Kd Kompetensi</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM sub_kompetensi");
                        while($d=mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d['kd_sub'] ?></td>
                            <td><?= $d['nama_sub'] ?></td>
                            <td><?= $d['kd_kompetensi'] ?></td>
                            <td>
                                <a class="btn btn-warning text-black" href="sub_komp/edit_sub.php?id=<?= $d['id_sub'] ?>" title="edit_data"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger text-black" href="sub_komp/hapus_sub.php?id=<?= $d['id_sub'] ?>" title="hapus_data"><i class="fas fa-trash"></i></a>
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